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
        Schema::create('c2_ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('value');
            $table->longtext('text')->nullable();
            $table->foreignId('taker_id')->constrained('b6_lawyers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('giver_id')->constrained('b7_clients')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('c2_ratings');
    }
}
