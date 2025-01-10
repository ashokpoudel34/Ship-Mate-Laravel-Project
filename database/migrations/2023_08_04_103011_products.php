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
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shipmate_id');
            $table->string('product_name');
            $table->string('product_category');
            $table->string('price');
            $table->string('discounted_price');
            $table->string('product_unit');
            $table->string('product_description');
            $table->string('path');
            $table->timestamps();
            $table->foreign('shipmate_id')->references('id')->on('shipmate')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Products');
    }
};
