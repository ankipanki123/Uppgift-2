<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      schema::create('product_store',function(Blueprint $table) {
        $table->increments('id');
        $table->integer('store_id');
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
        schema::drop('product_store');
    }
}
