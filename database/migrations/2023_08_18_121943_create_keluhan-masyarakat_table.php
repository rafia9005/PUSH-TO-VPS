<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhanMasyarakatTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keluhan_masyarakat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->text('keluhan');
            $table->enum('action', ['sedang di proses', 'done'])->default('sedang di proses');
            $table->timestamps();

            $table->index('created_at'); // Menambahkan indeks untuk kolom created_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan_masyarakat');
    }
}
