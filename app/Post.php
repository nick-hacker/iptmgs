<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['name_of_post','description']; 
    
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        // return dd($body);
        //$this->comments // will return the comleection of the posts which are belongs to this post
    	/*Comment::create([
            'body' => $body , 
            'post_id' => $this->id //Since it is the instance of a class 
            ]);*/
          $this->comments()->create(compact('body')); //This will also set id of the post behind the scene coz of relationship wee set here 
    }
}
