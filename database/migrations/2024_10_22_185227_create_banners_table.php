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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();  // Name of the banner, nullable
            $table->string('image')->nullable(); // Image file path, nullable
            $table->integer('click')->default(0)->nullable(); // Click counter, nullable
            $table->unsignedBigInteger('user_id')->nullable(); // Reference to users table, nullable
            $table->integer('view')->default(0)->nullable(); // View counter, nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
