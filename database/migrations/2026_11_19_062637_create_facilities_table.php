<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();

            $table->string('name', 150);
            $table->string('category', 100)->nullable();

            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->string('image_path')->nullable();

            $table->string('address')->nullable();
            $table->string('operating_hours')->nullable();
            $table->string('contact')->nullable();

            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};