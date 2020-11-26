<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('a1_users', function (Blueprint $table) {
            if (!Schema::hasColumn('a1_users', 'location')) {
                $table->char('location', 30)->nullable()->after('type');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('a1_users', function (Blueprint $table) {
            //
        });
    }
}
