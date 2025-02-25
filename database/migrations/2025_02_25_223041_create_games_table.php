<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id');
            $table->foreignId('opponent_id');
            $table->date('date');
            $table->integer('gp');
            $table->integer('pa');
            $table->integer('ab');
            $table->integer('avg');
            $table->integer('obp');
            $table->integer('ops');
            $table->integer('slg');
            $table->integer('h');
            $table->integer('singles');
            $table->integer('doubles');
            $table->integer('triples');
            $table->integer('hr');
            $table->integer('rbi');
            $table->integer('r');
            $table->integer('bb');
            $table->integer('bb');
            $table->integer('so');
            $table->integer('kl');
            $table->integer('hbp');
            $table->integer('sac');
            $table->integer('sf');
            $table->integer('roe');
            $table->integer('fc');
            $table->integer('sb');
            $table->integer('sbp');
            $table->integer('cs');
            $table->integer('pik');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
