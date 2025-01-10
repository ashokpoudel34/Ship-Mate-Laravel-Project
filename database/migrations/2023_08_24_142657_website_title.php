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
        Schema::create('WebsiteTitles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shipmate_id');
            $table->string('href');
            $table->string('title');
            $table->string('heading');
            $table->string('description',500);
            $table->timestamps();
            $table->foreign('shipmate_id')->references('id')->on('shipmate')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('WebsiteTitles');
    }
};
