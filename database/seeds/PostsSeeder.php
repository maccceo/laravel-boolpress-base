<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 20)    
	        -> make()
	        //passa tutti i post creati una riga fa
	   		-> each(function($post) {
		   		//prendi una categoria a caso
		   		$category = Category::inRandomOrder() -> first();
		   		//e associala al post appena creato (-> category() punta alla funzione creata nel model)
		   		$post -> category() -> associate($category);
		   		$post -> save();
		    });
    }
}
