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
        Schema::create('rays', function (Blueprint $table) {
            $table->id();
            $table->longText('description') ->nullable();
            $table->foreignId('invoice_id')->references('id')->on('single_invoices')->onDelete('cascade');
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreignId('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreignId('employee_id')->nullable()->references('id')->on('ray_men')->onDelete('cascade');
            $table->longText('description_employee')->nullable();
            $table->tinyInteger('case')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rays');
    }
};
