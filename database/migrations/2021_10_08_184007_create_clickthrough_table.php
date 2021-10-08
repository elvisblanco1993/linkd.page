<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClickthroughTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clickthrough', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('clickthrough')->nullable();
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
        Schema::dropIfExists('clickthrough');
    }
}
