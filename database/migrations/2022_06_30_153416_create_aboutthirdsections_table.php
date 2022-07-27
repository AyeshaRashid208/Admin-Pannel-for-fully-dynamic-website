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
        Schema::create('aboutthirdsections', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->string('heading');
            $table->string('main_title');
            $table->string('description');
            $table->string('skill_one');
            $table->string('skill_two');
            $table->string('skill_three');
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
        Schema::dropIfExists('aboutthirdsections');
    }
};
