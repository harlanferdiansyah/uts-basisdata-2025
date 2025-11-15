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
        Schema::create('pasiens', function (Blueprint $table) {
        $table->id();
        $table->string('nik', 20);
        $table->string('nama', 150);
        $table->date('tanggal_lahir');
        $table->enum('jenis_kelamin', ['L','P']);
        $table->text('alamat');
        $table->string('telepon', 20);
        $table->enum('gol_darah', ['A','B','AB','O']);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
