<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
	protected $fillable = ['program_code', 'program_acronym', 'schools_id'];
    //
    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}
