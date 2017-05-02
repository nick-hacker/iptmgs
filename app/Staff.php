<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    public function department()
    {
    	return $this->belongsTo(Department::class);
    }

    public function positions()
    {
    	return $this->hasMany(Position::class);
    }
}
