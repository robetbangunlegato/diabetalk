<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class food_consumption extends Model
{
    //
    public function foods()
    {
        return $this->belongsTo(food::class);
    }
}
