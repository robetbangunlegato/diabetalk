<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Reminder;
use App\Models\User;
use Carbon\Carbon;
use App\Mail\ReminderMail;

class SendReminders extends Command
{
    protected $signature = 'reminder:send';
    protected $description = 'Kirim email pengingat kepada pengguna berdasarkan jadwal';

    public function handle()
    { 
        $now = now();
        $today = strtolower($now->format('l')); // e.g., 'monday'

        $start = $now->copy()->subMinutes(2)->format('H:i');
        $end = $now->format('H:i');

        Reminder::with('user', 'schedules')
            ->whereBetween('reminder_time', [$start, $end])
            ->get()
            ->each(function ($reminder) use ($today, $now) {
                foreach ($reminder->schedules as $schedule) {
                    $shouldSend = false;

                    // Cek apakah email sudah dikirim hari ini
                    $alreadySentToday = $schedule->last_sent_at &&
                        $schedule->last_sent_at->isSameDay($now);

                    if ($schedule->day === 'just_once') {
                        $shouldSend = !$schedule->last_sent_at && $reminder->created_at->isSameDay($now);
                    } elseif ($schedule->day === 'everyday') {
                        $shouldSend = !$alreadySentToday;
                    } elseif ($schedule->day === $today) {
                        $shouldSend = !$alreadySentToday;
                    }

                    if ($shouldSend) {
                        // Kirim email
                        Mail::to($reminder->user->email)->send(new ReminderMail($reminder));

                        // Update last_sent_at
                        $schedule->last_sent_at = $now;
                        $schedule->save();
                    }
                }
            }
        );
    }
}
