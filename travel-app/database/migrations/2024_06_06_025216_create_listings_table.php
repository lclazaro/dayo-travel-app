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
        Schema::create('listings', function (Blueprint $table) {
            $table->id('list_id'); // Primary key
            $table->string('list_name', 50);
            $table->unsignedBigInteger('id'); // Foreign key to users table
            $table->string('unit_type'); // Foreign key to listingtypes table
            $table->integer('barangay');
            $table->string('city', 6);
            $table->string('province', 11);
            $table->string('region', 50);
            $table->string('country_code'); // Foreign key to countries table
            $table->timestamps();

            // Indexes
            $table->index('id');
            $table->index('unit_type');
            $table->index('country_code');

            // Foreign key constraints
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('unit_type')->references('unit_type')->on('listingtypes')->onDelete('cascade');
            $table->foreign('country_code')->references('country_code')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
