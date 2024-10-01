<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('maintenance_requests', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('tenant_id')->constrained('users')->onDelete('cascade');  // Foreign key to users (tenant)
            $table->foreignId('room_id')->constrained()->onDelete('cascade');  // Foreign key to rooms
            $table->string('issue');  // Maintenance issue description
            $table->enum('status', ['pending', 'in_progress', 'resolved'])->default('pending');  // Maintenance request status
            $table->date('request_date');  // Date of the maintenance request
            $table->date('resolved_date')->nullable();  // Date when issue was resolved
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenance_requests');
    }
};