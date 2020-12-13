<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a1_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->default(config('chatify.user_avatar.default'));
            $table->string('messenger_color')->default('#2180f3');
            $table->boolean('dark_mode')->default(0);
            $table->boolean('active_status')->default(0);
            $table->char('contact', 20)->default(0);
            $table->enum('type', ['admin', 'lawyer','client']);
            $table->char('location', 30)->nullable();
            $table->enum('gender', ['male', 'female','other']);
            $table->date('birthdate')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('a02_districts');
            $table->rememberToken();
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
        // Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('a1_users');
        // Schema::disableForeignKeyConstraints();
    }
}
