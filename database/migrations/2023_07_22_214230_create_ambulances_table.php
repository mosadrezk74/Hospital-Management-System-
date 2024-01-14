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
        Schema::create('ambulances', function (Blueprint $table) {
            $table->id();
            $table->string('car_number');
            $table->string('car_model');
            $table->integer('car_year_made');
            $table->string('car_type');
            $table->string('driver_name');
            $table->integer('driver_license_number');
            $table->integer('driver_phone');
            $table->string('notes')->nullable();

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ambulances');
    }
};
