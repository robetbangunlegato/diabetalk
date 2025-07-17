<?php

namespace App\Console;
use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\SendReminders; // pastikan ini diimpor

class Kernel extends \Illuminate\Foundation\Console\Kernel
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('reminder:send')->everyMinute(); // atau sesuai kebutuhan
    }
}