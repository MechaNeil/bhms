<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('username')->unique();  // Username (unique)
            $table->string('email')->unique();  // Email (unique)
            $table->string('password');  // Password
            $table->enum('role', ['landlord', 'tenant']);  // Role to distinguish between landlord and tenant
            $table->string('phone_number')->nullable();  // Phone number (optional)
            $table->string('address')->nullable();  // Address (optional)
            $table->rememberToken();  // Token for "remember me" functionality
            $table->timestamps();  // created_at and updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};