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
            $table->enum('state', ['waiting','accepted','rejected'])->default('waiting');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('b7_clients');
            $table->unsignedBigInteger('casefile_id');
            $table->foreign('casefile_id')->references('id')->on('b2_casefiles');
            $table->unsignedBigInteger('lawyer_id');
            $table->foreign('lawyer_id')->references('id')->on('b6_lawyers');
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
