<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id');
            $table->string('uid');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('email');
            $table->string('avatar');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('social_insurance_number');
            $table->date('date_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
