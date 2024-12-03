<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->timestamps(); // This will add both created_at and updated_at
        });
    }

    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropTimestamps(); // This will remove the created_at and updated_at columns
        });
    }
}
