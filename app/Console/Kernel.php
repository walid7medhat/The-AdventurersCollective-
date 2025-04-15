<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Thomasjohnkane\Snooze\Models\ScheduledNotification;
use Thomasjohnkane\Snooze\Models\SendScheduledNotifications;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    //  protected $commands = [
    //   Thomasjohnkane\Snooze\Models\SendScheduledNotifications::class,
    // ];
 
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
                $schedule->command('snooze:send')->hourly();


    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
 
}
