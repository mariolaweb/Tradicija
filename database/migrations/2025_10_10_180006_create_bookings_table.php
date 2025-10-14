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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms')->cascadeOnDelete();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();

            // status & source: držimo kao string (jednostavno za MVP)
            // status: pending | confirmed | cancelled
            // source: web | phone | external
            $table->string('status', 20)->default('pending')->index();
            $table->string('source', 20)->default('web')->index();

            // period
            $table->date('check_in');
            $table->date('check_out');

            // cijena (po potrebi popunjavati)
            $table->decimal('total_price', 10, 2)->nullable();

            $table->text('notes')->nullable();

            $table->timestamps();

            // Korisni indeksi za brzu provjeru zauzeća
            $table->index(['room_id', 'check_in', 'check_out']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
