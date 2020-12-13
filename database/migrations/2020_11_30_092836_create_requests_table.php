<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c1_requests', function (Blueprint $table) {
            $table->id();
            $table->enum('state', ['pending','accepted','rejected','closed'])->default('pending');
            $table->unsignedBigInteger('lawyer_id');
            $table->foreign('lawyer_id')->references('id')->on('b6_lawyers')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('b7_clients')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedBigInteger('casefile_id');
            $table->foreign('casefile_id')->references('id')->on('b8_casefiles')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('c1_requests');
    }
}
