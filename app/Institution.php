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

    /*public function addCollege($body)
    {
        
          return $this->colleges()->create(compact(['college_name','college_acronym'])); 
    }*/
}
