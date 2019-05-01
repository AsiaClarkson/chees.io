<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheeseDishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheese_dish', function (Blueprint $table) {
            $table->integer('cheese_id')->nullable();
            $table->foreign('cheese_id')->references('id')->on('cheeses');
            $table->integer('dish_id')->nullable();
            $table->foreign('dish_id')->references('id')->on('dishes');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cheese_dish');
    }
}
