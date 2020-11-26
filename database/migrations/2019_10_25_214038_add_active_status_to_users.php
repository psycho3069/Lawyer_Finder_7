<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveStatusToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('a1_users', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('a1_users', 'active_status')) {
                $table->boolean('active_status')->default(0)->after('email');
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
