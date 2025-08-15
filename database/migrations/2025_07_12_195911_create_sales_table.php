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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product')->constrained('products');
            $table->integer('quantity')->default(1);
            $table->float('amount')->default(0.00);
            $table->float('discount')->nullable(true)->default(0.00);
            $table->string('currency')->default('ngn');
            $table->boolean('is_approved')->default(true);

            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');

            $table->string('payment_type');
            $table->string('payment_status')->default('pending');
            $table->timestamp('sales_date_time');
            $table->date('sales_date');
            $table->year('sales_year');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
