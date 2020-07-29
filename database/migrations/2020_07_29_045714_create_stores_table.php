<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('location_id')->unsigned()->index();

            $table->string('title');
            $table->text('detail');
            $table->integer('price')->unsigned();
            $table->integer('min_order')->unsigned();
            $table->integer('capacity')->unsigned();

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
        Schema::dropIfExists('stores');
    }
}
