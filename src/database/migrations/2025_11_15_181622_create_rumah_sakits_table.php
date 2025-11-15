<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rumah_sakits', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->text('alamat');
            $table->string('telepon', 20);
            $table->string('email', 100)->nullable();
            $table->timestamps();
        });
    }
};
