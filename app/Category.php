<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
	protected $fillable = [
		'title',
		'author',
		'content'
	];
    
    public function posts() {
    	return $this -> hasMany(Post::class);
    }
}
