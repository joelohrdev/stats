<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBattingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained();
            $table->date('date')->nullable();
            $table->string('against')->nullable();
            $table->integer('plate_appearances')->default(0);
            $table->integer('at_bats')->default(0);
            $table->integer('hits')->default(0);
            $table->integer('singles')->default(0);
            $table->integer('doubles')->default(0);
            $table->integer('triples')->default(0);
            $table->integer('home_runs')->default(0);
            $table->integer('runs_batted_in')->default(0);
            $table->integer('runs')->default(0);
            $table->integer('hit_by_pitch')->default(0);
            $table->integer('reached_on_error')->default(0);
            $table->integer('hit_into_fielders_choice')->default(0);
            $table->integer('batter_advances_on_catchers_interference')->default(0);
            $table->integer('walks')->default(0);
            $table->integer('strikeouts')->default(0);
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
        Schema::dropIfExists('battings');
    }
}
