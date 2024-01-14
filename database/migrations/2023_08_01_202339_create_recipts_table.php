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
        Schema::create('recipts', function (Blueprint $table) {

            $table->id();
            $table->date('date');
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->decimal('amount',8,2)->nullable();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipts');
    }
};
