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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table -> dropForeign('categories');
        $table -> dropColumn('category_id');
    }
}
