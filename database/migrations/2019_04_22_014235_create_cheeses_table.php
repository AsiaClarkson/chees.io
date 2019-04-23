<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheeses', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('name')->unique()->nullable(false);
            $table->string('flavor');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('cheese_types');
            $table->unsignedBigInteger('texture_id');
            $table->foreign('texture_id')->references('id')->on('cheese_textures');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('cheese_colors');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('cheese_countries');
            $table->string('image');
            $table->timestamps();
            // $table->dropTimestamps();
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
        Schema::dropIfExists('cheeses');
        // Schema::table('cheeses', function (Blueprint $table)

        // {

        //     $table->dropColumn('created_at');
        //     $table->dropColumn('updated_at');


        // });

    }
}
