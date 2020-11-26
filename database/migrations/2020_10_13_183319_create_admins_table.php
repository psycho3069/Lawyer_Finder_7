<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b5_admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('a1_users');
            $table->enum('type', ['superadmin','admin','moderator','editor','viewer']);
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
        Schema::dropIfExists('b5_admins');
    }
}
