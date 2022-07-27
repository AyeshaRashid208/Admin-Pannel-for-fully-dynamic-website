<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('name');
            $table->string('title');
            $table->string('fimage');
            $table->longText('one');
            $table->longText('two')->nullable();
            $table->string('image_one')->nulllable();
            $table->string('image_two')->nullable();
            $table->string('heading')->nullable();
            $table->longText('three')->nullable();
            $table->longText('quote')->nullable();
            $table->string('catagory');
            $table->string('tag_one');
            $table->string('tag_two')->nullable();
            $table->string('tag_three')->nullable();
            $table->string('tag_four')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
