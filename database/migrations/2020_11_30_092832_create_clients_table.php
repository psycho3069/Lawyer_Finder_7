<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b7_clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('a1_users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cases')->default(0);
            $table->float('rating',2,2)->default('0.0');
            $table->integer('reviews')->default(0);
            $table->tinyInteger('blocked')->default(0);
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
        Schema::dropIfExists('b7_clients');
    }
}
