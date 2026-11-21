<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pillars', function (Blueprint $table) {
            $table->id();

            $table->string('name', 150);
            $table->string('category', 100)->nullable();

            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->string('icon')->nullable();
            $table->string('cover_image')->nullable();

            $table->longText('activities')->nullable();
            $table->longText('achievements')->nullable();

            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pillars');
    }
};
