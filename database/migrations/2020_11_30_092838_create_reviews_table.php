<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c3_reviews', function (Blueprint $table) {
            $table->id();
            $table->longtext('text');
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
        Schema::dropIfExists('c3_reviews');
    }
}
