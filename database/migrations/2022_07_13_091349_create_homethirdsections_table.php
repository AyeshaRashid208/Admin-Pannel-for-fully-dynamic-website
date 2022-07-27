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
        Schema::create('homethirdsections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('detail');
            $table->string('title_one');
            $table->string('desc_one');
            $table->string('title_two');
            $table->string('desc_two');
            $table->string('title_thr');
            $table->string('desc_thr');
            $table->string('hidden_id')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('homethirdsections');
    }
};
