<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b1_courts', function (Blueprint $table) {
            $table->id();
            $table->char('name', 100);
            $table->unsignedBigInteger('court_division_id')->nullable();
            $table->foreign('court_division_id')->references('id')->on('a05_court_divisions');
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('a02_districts');
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
        // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('b1_courts');
        // Schema::enableForeignKeyConstraints();
    }
}
