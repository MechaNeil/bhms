<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('tenant_id')->constrained('users')->onDelete('cascade');  // Foreign key to users (tenant)
            $table->foreignId('room_id')->constrained()->onDelete('cascade');  // Foreign key to rooms
            $table->decimal('amount', 8, 2);  // Payment amount
            $table->enum('status', ['pending', 'paid', 'overdue'])->default('pending');  // Payment status
            $table->date('payment_date');  // Date of payment
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
};