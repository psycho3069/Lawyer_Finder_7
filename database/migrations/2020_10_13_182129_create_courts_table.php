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
            $table->string('location', 100);
            $table->enum('type', ['supreme','high','judge','magistrate','tribunale']);
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
