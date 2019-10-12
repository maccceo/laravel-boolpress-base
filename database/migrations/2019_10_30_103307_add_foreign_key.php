<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // aggiungo colonna
            $table -> bigInteger('category_id') -> unsigned() -> index();
            //la collego
            $table -> foreign('category_id', 'categories')
                   -> references('id')
                   -> on ('categories');
        });


        // relazione n a n post e tag, tabella ponte
        Schema::table('post_tag', function (Blueprint $table) {
            // creo colonna post_id e la collego
            $table -> bigInteger('post_id') -> unsigned() -> index();
            $table -> foreign('post_id', 'post_tag_post')
                   -> references('id')
                   -> on ('posts');
            
            // creo colonna tag_id e la collego
            $table -> bigInteger('tag_id') -> unsigned() -> index();
            $table -> foreign('tag_id', 'post_tag_tag')
                   -> references('id')
                   -> on ('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table -> dropForeign('categories');
            $table -> dropColumn('category_id');
        });


        Schema::table('post_tag', function (Blueprint $table) {
            $table -> dropForeign('post_tag_post');
            $table -> dropColumn('post_id');
            $table -> dropForeign('post_tag_tag');
            $table -> dropColumn('tag_id');
        });
    }
}
