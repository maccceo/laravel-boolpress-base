<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class, 10)
        	// creane 10, pppppoi
        	-> create()
        	-> each(function($tag) {
        		// prendi una manciata di post (5÷10)
	   			$posts = Post::inRandomOrder() -> take(rand(5,10)) -> get();
	   			// abbinagli questo tag (che gira per l'each)
	   			$tag -> posts() -> attach($posts);
	   		});
        	// così facendo tutti i tag sono distribuiti casualmente tra 5 e 10 post ciascuno
    }
}
