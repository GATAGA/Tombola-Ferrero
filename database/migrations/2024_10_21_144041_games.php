<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('user_id'); // Foreign key for the users table
            $table->string('result');
            $table->string('receipt');
            $table->timestamp('playing_time')->useCurrent(); // Sets default to current timestamp
        
            // Foreign key constraint
            $table->foreign('user_id')->references('customer_id')->on('customers')->onDelete('cascade'); // Reference 'id' in the 'users' table
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
