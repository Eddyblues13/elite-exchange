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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('sender_name', 255)->nullable();
            $table->string('sender_phone', 15)->nullable();
            $table->string('sender_email', 255)->nullable();
            $table->string('sender_address', 255)->nullable();
            $table->string('receiver_name', 255)->nullable();
            $table->string('receiver_phone', 15)->nullable();
            $table->string('receiver_email', 255)->nullable();
            $table->string('receiver_address', 255)->nullable();
            $table->text('parcel_description')->nullable();
            $table->string('dispatch_location', 255)->nullable();
            $table->string('current_location', 255)->nullable();
            $table->string('locale', 50)->nullable();
            $table->string('courier_status', 50)->nullable();
            $table->date('dispatch_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->string('tracking_number', 20)->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
