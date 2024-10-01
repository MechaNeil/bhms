<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('boarding_house_id')->constrained()->onDelete('cascade');  // Foreign key to boarding_houses
            $table->string('room_number');  // Room number or name
            $table->decimal('rent', 8, 2);  // Rent amount
            $table->enum('status', ['available', 'occupied', 'maintenance'])->default('available');  // Room status
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};