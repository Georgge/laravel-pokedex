<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_battle_only');
            $table->integer('affecting_natures'); // contemplate pivot table
            $table->integer('characteristics'); // contemplate pivot table
            $table->integer('affecting_moves'); // contemplate pivot table
            $table->integer('move_damage_class'); // contemplate pivot table
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
        Schema::dropIfExists('stats');
    }
}
