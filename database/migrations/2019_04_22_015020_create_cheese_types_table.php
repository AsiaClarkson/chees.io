<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheeseTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheese_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
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
        Schema::dropIfExists('cheese_types');
        // Schema::table('cheese_types', function (Blueprint $table)

        // {

        //     $table->dropColumn('created_at');
        //     $table->dropColumn('updated_at');


        // });

    }
}
