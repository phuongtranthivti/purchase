<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->bigInteger('price');
            $table->bigInteger('price_new');
            $table->string('image')->nullable();
            $table->string('description');
            $table->integer('quantity',255);
            $table->timestamps();
            $table->string('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
