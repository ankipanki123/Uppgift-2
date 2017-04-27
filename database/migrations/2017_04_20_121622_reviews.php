<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      schema::create('reviews',function(Blueprint $table) {
        $table->increments('id');
        $table->text('name');
        $table->text('comment');
        $table->integer('grade');
        $table->integer('product_id');
        $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('reviews');
    }
}
