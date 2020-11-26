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
        Schema::create('b2_casefiles', function (Blueprint $table) {
            $table->id();
            $table->string('case_identity', 50);
            $table->longText('description')->nullable();
            $table->enum('type', ['civil','family','criminal']);
            $table->enum('client_type', ['procecutor','defendant']);
            $table->foreignId('client_id')->constrained('a1_users');
            $table->foreignId('lawyer_id')->nullable()->constrained('a1_users');
            $table->foreignId('court_id')->nullable()->constrained('b1_courts');
            $table->enum('result', ['waiting','pending','running','won','lost'])->default('waiting');
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
        Schema::dropIfExists('b2_casefiles');
    }
}
