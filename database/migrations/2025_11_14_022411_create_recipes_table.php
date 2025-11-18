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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id('id_recipe');
            $table->foreignId('id_kategori')->references('id_kategori')->on('categories');
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('bahan');
            $table->string('langkah');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
