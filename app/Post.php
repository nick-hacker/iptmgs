<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function scopeFilter($query, $filters)
    {

        if($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year']){
            $query->whereYear('created_at', $year);
        }

        // if($day = $filters['day']){
        //     $query->whereYear('created_at', Carbon::parse($day)->day);
        // }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();
    }
} 