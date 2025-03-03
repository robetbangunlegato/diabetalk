<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReminderSchedule extends Model
{
    //
    protected $table = 'reminder_schedules';

    protected $fillable = ['reminder_id', 'day'];

}
