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
        Schema::create('userinfo', function (Blueprint $table) {
            $table->string('fname', length: 50);
            $table->string('lname', length: 50);
            $table->integer('age');
            $table->string('sex', length: 6);
            $table->string('phonenumber', length: 11);
            $table->string('email', length: 50);
            $table->string('password', length: 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userinfo');
    }
};
