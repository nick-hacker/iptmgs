<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
	protected $fillable = ['institution_name', 'institution_acronym'];
    public function colleges()
    {
    	return $this->hasMany(College::class);
    }
}
