<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
	protected $fillable = ['school_name', 'school_acronym', 'colleges_id'];
    //
    public function departments()
    {
    	return $this->hasMany(Department::class);
    }

    public function college()
    {
    	return $this->belongsTo(College::class);
    }
}
