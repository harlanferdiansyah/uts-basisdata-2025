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
        Schema::create('dokters', function (Blueprint $table) {
        $table->id();
        $table->foreignId('poliklinik_id')->constrained('polikliniks')->onDelete('cascade');
        $table->string('nama_dokter', 150);
        $table->string('spesialisasi', 100);
        $table->string('nomor_str', 50);
        $table->string('telepon', 20);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
