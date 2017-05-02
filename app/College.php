<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
	protected $fillable = ['college_name', 'college_acronym', 'institutions_id'];

    public function schools()
    {
    	return $this->hasMany(School::class);
    }

    public function institution()
    {
    	return $this->belongsTo(Institution::class);
    }
}
