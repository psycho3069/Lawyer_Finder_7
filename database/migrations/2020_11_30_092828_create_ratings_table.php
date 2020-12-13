<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b3_ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('value');
            $table->longtext('text');
            $table->foreignId('giver_id')->constrained('a1_users');
            $table->foreignId('taker_id')->constrained('a1_users');
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
        Schema::dropIfExists('b3_ratings');
    }
}
