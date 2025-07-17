<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    //
    protected $fillable = ['title', 'description', 'instruction', 'reminder_method', 'reminder_time', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function schedules()
    {
        return $this->hasMany(ReminderSchedule::class);
    }
}
