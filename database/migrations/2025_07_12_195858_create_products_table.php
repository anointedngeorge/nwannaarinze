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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->integer('quantity')->default(1);
            $table->float('amount')->default(0.00);
            $table->float('discount')->nullable(true)->default(0.00);
            $table->boolean('is_discounted')->default(false);
            $table->string('currency')->default('ngn');
            $table->boolean('is_active')->default(true);
            $table->text('attributes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
