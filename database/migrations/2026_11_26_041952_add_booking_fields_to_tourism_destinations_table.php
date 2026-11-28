<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tourism_destinations', function (Blueprint $table) {
            $table->decimal('price_per_person', 12, 2)->nullable()->after('entrance_fee');
            $table->text('booking_contact')->nullable()->after('price_per_person');
        });
    }

    public function down(): void
    {
        Schema::table('tourism_destinations', function (Blueprint $table) {
            $table->dropColumn([
                'price_per_person',
                'booking_contact',
            ]);
        });
    }
};
