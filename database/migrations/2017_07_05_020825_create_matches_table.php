<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('home_team_id');
            $table->integer('away_team_id');
            $table->string('home_team_name');
            $table->string('away_team_name');
            $table->dateTime('starting_time');
            $table->dateTime('finishing_time');
            $table->dateTime('starting_bet');
            $table->dateTime('finishing_bet');
            $table->double('home_rate');
            $table->double('draw_rate');
            $table->double('away_rate');
            $table->integer('home_score');
            $table->integer('away_score');
            $table->enum('result',[0,1,2]);   // 0 cho home, 1 cho draw, 2 cho away
            $table->enum('public',[0,1,2])->default(0);     // 0 cho chua public, 1 cho da public, 2 cho da co ket qua
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
        //
         Schema::dropIfExists('matches');
    }
}
