<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheeseColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheese_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color');
            $table->string('hexcode');
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
        Schema::dropIfExists('cheese_colors');
        // Schema::table('cheese_colors', function (Blueprint $table)

        // {

        //     $table->dropColumn('created_at');
        //     $table->dropColumn('updated_at');


        // });

    }
}
