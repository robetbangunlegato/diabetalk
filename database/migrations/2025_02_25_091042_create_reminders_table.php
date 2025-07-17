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
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable(); // deskripsi untuk dosis/nama obat dll.
            $table->enum('instruction',['sebelum makan', 'sesudah makan', 'tidak ada']);
            $table->enum('reminder_method', ['gmail', 'push_notification', 'whatsapp'])->default('gmail');
            $table->time('reminder_time');
            $table->timestamps();
            
            // $table->enum('status', ['pending', 'completed'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
