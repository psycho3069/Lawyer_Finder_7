<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c4_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('a1_users')->onUpdate('cascade')->onDelete('cascade');
            $table->smallInteger('ssc_year')->nullable();
            $table->float('ssc_result')->nullable();
            $table->foreignId('ssc_board_id')->nullable()->constrained('a08_boards')->onUpdate('cascade')->onDelete('cascade');
            $table->smallInteger('hsc_year')->nullable();
            $table->float('hsc_result')->nullable();
            $table->foreignId('hsc_board_id')->nullable()->constrained('a08_boards')->onUpdate('cascade')->onDelete('cascade');
            $table->smallInteger('degree_year')->nullable();
            $table->foreignId('degree_category_id')->nullable()->constrained('a07_degree_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('uni',40)->nullable();
            $table->string('sub',40)->nullable();
            $table->float('degree_result')->nullable();
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
        Schema::dropIfExists('c4_educations');
        // Schema::enableForeignKeyConstraints();
    }
}
