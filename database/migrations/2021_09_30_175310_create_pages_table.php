<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id(); // unique identifier
            $table->string('handler'); // handler
            $table->foreignId('user_id'); // Owner ID
            $table->string('name'); // Spring name
            $table->string('bio')->nullable(); // Spring description
            $table->string('avatar')->nullable(); // Owner avatar image url
            $table->string('template')->nullable(); // the base template to use
            $table->enum('bgtype', ['color', 'image'])->default('color'); // whether to use a bg color or image
            $table->string('bgvalue')->nullable(); // bg value based on bgtype
            $table->string('textcolor')->nullable(); // text color
            $table->string('font')->nullable(); // font family
            $table->string('btnbg')->default('#000000');
            $table->string('btnfg')->default('#FFFFFF');
            $table->string('btnstyle')->default('rounded-none');
            $table->enum('socpos', ['top', 'bottom'])->default('bottom'); // The position of the social media buttons
            $table->enum('soccolor', ['white', 'black'])->default('black'); // The color of the social media buttons' icons
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
        Schema::dropIfExists('springs');
    }
}
