<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheeseTexturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheese_textures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('texture');
            $table->timestamps();
            // $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cheese_textures');
        // Schema::table('cheese_textures', function (Blueprint $table)

        // {

        //     $table->dropColumn('created_at');
        //     $table->dropColumn('updated_at');


        // });

    }
}
