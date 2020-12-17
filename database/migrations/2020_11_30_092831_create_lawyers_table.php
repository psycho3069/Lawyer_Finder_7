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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('a1_users');
            $table->unsignedBigInteger('court_id')->nullable();
            $table->foreign('court_id')->references('id')->on('b1_courts');
            $table->enum('type', ['advocate','judge','magistrate','barrister'])->nullable();
            $table->unsignedBigInteger('specialties_id')->nullable();
            $table->foreign('specialties_id')->references('id')->on('a04_specialties');
            $table->bigInteger('ratings')->default('0');
            $table->integer('reviews')->default(0);
            $table->integer('cases')->default(0);
            $table->integer('admin_approval')->default(0);
            $table->string('nid_front',191)->default('nid_front.png');
            $table->string('nid_back',191)->default('nid_back.png');
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
