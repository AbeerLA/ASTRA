<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('title', 200);
            $table->string('slug')->unique();

            $table->string('category', 100)->nullable();

            $table->string('excerpt')->nullable();
            $table->longText('content');

            $table->string('featured_image')->nullable();

            $table->string('author')->nullable();

            $table->timestamp('published_at')->nullable();

            $table->enum('status', ['draft', 'published', 'scheduled'])
                  ->default('draft');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
