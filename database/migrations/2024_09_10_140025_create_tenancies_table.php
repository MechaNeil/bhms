<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTenanciesTable extends Migration
{
    public function up()
    {
        Schema::create('tenancies', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('tenant_id')->constrained('users')->onDelete('cascade');  // Foreign key to users (tenant)
            $table->foreignId('room_id')->constrained()->onDelete('cascade');  // Foreign key to rooms
            $table->date('start_date');  // Tenancy start date
            $table->date('end_date')->nullable();  // Tenancy end date (nullable for ongoing tenancies)
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancies');
    }
};