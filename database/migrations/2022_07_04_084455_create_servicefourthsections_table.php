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
        Schema::create('servicefourthsections', function (Blueprint $table) {
            $table->id();
            $table->string('tab_two_name');
            $table->string('plan_one_heading');
            $table->string('plan_one_desc');
            $table->string('price_one');
            $table->string('feature_one');
            $table->string('feature_two');
            $table->string('feature_thr');
            $table->string('feature_four');
            $table->string('recom');
            $table->string('plan_two_heading');
            $table->string('plan_two_desc');
            $table->string('price_two');
            $table->string('P_feature_one');
            $table->string('P_feature_two');
            $table->string('P_feature_thr');
            $table->string('P_feature_four');
            $table->string('plan_thr_heading');
            $table->string('plan_thr_desc');
            $table->string('price_thr');
            $table->string('Pt_feature_one');
            $table->string('Pt_feature_two');
            $table->string('Pt_feature_thr');
            $table->string('Pt_feature_four');
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
        Schema::dropIfExists('servicefourthsections');
    }
};
