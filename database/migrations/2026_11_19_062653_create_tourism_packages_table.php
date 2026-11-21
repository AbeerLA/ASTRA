<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tourism_packages', function (Blueprint $table) {
            $table->id();

            $table->string('name', 150);
            $table->string('category', 100)->nullable();

            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->longText('itinerary')->nullable();

            $table->decimal('price_per_person', 12, 2)->nullable();

            $table->unsignedInteger('min_participants')->nullable();
            $table->unsignedInteger('max_participants')->nullable();

            $table->string('duration', 100)->nullable();

            $table->longText('included')->nullable();
            $table->longText('excluded')->nullable();

            $table->string('cover_image')->nullable();

            $table->string('booking_contact')->nullable();

            $table->boolean('is_available')->default(true);
            $table->boolean('is_active')->default(true);

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tourism_packages');
    }
};
