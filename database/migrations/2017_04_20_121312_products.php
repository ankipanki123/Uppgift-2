<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      schema::create('products',function(Blueprint $table) {
        $table->increments('id');
        $table->text('title');
        $table->text('brand');
        $table->text('image');
        $table->text('description');
        $table->float('price');
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
        schema::drop('products');
    }
}
