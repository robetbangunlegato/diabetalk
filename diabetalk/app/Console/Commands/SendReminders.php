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
        $today = strtolower($now->format('l')); // ex: 'monday'

        Reminder::with('user', 'schedules')->whereTime('reminder_time', $now->format('H:i'))->get()->each(function ($reminder) use ($today, $now) {
            foreach ($reminder->schedules as $schedule) {
                if (
                    $schedule->day === 'everyday' ||
                    $schedule->day === $today ||
                    ($schedule->day === 'just_once' && $reminder->created_at->isSameDay($now))
                ) {
                    Mail::to($reminder->user->email)->send(new ReminderMail($reminder));
                }
            }
        });
    }
}
