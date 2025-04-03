<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    //
    protected $table = 'foods';

    public function food_categories()
    {
        return $this->belongsTo(food_category::class);
    }
}
