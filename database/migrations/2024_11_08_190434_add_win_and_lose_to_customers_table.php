<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWinAndLoseToCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->integer('nbr_of_games')->default(0);
            $table->integer('win')->default(0);
            $table->integer('lose')->default(0);
        });
    }

    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn(['win', 'lose', 'nbr_of_games']);
        });
    }
}
