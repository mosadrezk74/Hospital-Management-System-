<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('fund_boxes', function (Blueprint $table) {

            $table->id();
            $table->date('date');
            $table->foreignId('single_invoice_id')->nullable()->references('id')->on('single_invoices')->onDelete('cascade');
            $table->foreignId('recipt_id')-> nullable()->references('id')->on('recipts')->onDelete('cascade');
            $table->foreignId('payment_id')-> nullable()->references('id')->on('payment_accounts')->onDelete('cascade');
            $table->decimal('Debit',8,2)->nullable();
            $table->decimal('credit',8,2)->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('fund_boxes');
    }
};
