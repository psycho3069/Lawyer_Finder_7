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
        Schema::create('b4_reviews', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('b4_reviews');
    }
}
