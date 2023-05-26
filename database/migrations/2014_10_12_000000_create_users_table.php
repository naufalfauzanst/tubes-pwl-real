<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('user_role', ['admin', 'user'])->default('user');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    
            // $table->integer("id", 11);
            // $table->string("username", 25);
            // $table->string("password", 50);
            // $table->string("email", 50);
            // $table->string("nama", 100);
            // $table->string("level", 20);
            // $table->timestamps(); 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
