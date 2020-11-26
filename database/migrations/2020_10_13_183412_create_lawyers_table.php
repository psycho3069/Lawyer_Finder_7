<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b6_lawyers', function (Blueprint $table) {
            $table->id();
            $table->longtext('profile_bio')->nullable();
            $table->foreignId('user_id')->constrained('a1_users');
            $table->foreignId('court_id')->constrained('b1_courts')->nullable();
            $table->enum('type', ['advocate','judge','magistrate','barrister'])->nullable();
            $table->enum('specialty', ['prosecutor','defendant'])->nullable();
            $table->float('rating',2,2)->default('0.0');
            $table->integer('reviews')->default(0);
            $table->integer('cases')->default(0);
            $table->float('success_rate',3,2)->default('0.0');
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
        Schema::dropIfExists('b6_lawyers');
    }
}
