<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b8_casefiles', function (Blueprint $table) {
            $table->id();
            $table->string('case_identity', 50);
            $table->longText('description')->nullable();
            $table->enum('type', ['civil','family','criminal']);
            $table->enum('client_type', ['prosecutor','defendant']);
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('b7_clients')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedBigInteger('lawyer_id')->nullable();
            $table->foreign('lawyer_id')->references('id')->on('b6_lawyers')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedBigInteger('court_id')->nullable();
            $table->foreign('court_id')->references('id')->on('b1_courts')->onUpdate('cascade')->onDelete('restrict');
            $table->enum('result', ['waiting','running','won','lost'])->default('waiting');
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
        Schema::dropIfExists('b8_casefiles');
    }
}
