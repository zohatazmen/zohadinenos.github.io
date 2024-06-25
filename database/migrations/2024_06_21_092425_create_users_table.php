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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique(); // Ensure this line is present
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('token');
            $table->timestamp('created_at')->nullable();

            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            // Add foreign key constraint to reference users table
        });

        // Laravel uses the 'sessions' table provided by the framework
        // No need to define sessions table here

        // If you want to create a sessions table, you would typically use the built-in Laravel migration command
        // php artisan session:table
        // and then run
        // php artisan migrate

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        // No need to drop 'sessions' table here if you didn't create it explicitly
    }
};
