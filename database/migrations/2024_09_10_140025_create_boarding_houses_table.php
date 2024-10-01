<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardingHousesTable extends Migration
{
    public function up()
    {
        Schema::create('boarding_houses', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('landlord_id')->constrained('users')->onDelete('cascade');  // Foreign key to users (landlord)
            $table->string('name');  // Boarding house name
            $table->string('address');  // Boarding house address
            $table->integer('num_rooms');  // Number of rooms available
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('boarding_houses');
    }
};