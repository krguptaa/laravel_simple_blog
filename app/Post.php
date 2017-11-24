<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
	public function comments(){
		return $this->hasMany(Comment::class);
	}

	public function user(){
		return $this->belongsTo(User::class);
	}


	public function scopeFilter($query,$filters){

		 if($month = $filters['month']){
            $query->whereMonth('created_at',Carbon::parse($month)->month);
         }

         if($year = $filters['year']){
         	$query->whereYear('created_at',$year);
         }
	}

	public static function archived(){
		return static::selectRaw('YEAR(created_at) year,MONTHNAME(created_at) as month,count(*) as published')->groupBy('year','month')->get()->toArray();
        
	}
}