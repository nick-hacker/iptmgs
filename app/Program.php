<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
	protected $fillable = ['program_code','program_name', 'program_acronym','weight','program_years', 'program_type','schools_id'];
    //
    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}
