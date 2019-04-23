<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheeseCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheese_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
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
        Schema::dropIfExists('cheese_countries');
        // Schema::table('cheese_countries', function (Blueprint $table)

        // {

        //     $table->dropColumn('created_at');
        //     $table->dropColumn('updated_at');


        // });

    }
    
}
