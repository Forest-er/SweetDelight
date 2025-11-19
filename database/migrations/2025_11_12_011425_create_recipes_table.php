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
            $table->unsignedBigInteger('id_kategori');   // wajib ADA sebelum foreign key
            $table->unsignedBigInteger('id_user');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('bahan');
            $table->string('langkah');
            $table->string('gambar')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
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
