<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReminderSchedule extends Model
{
    //
    protected $table = 'reminder_schedules';

    protected $fillable = ['reminder_id', 'day'];

    protected $casts = [
        'last_sent_at' => 'datetime',
    ];

    public function reminder()
    {
        return $this->belongsTo(Reminder::class);
    }

}
