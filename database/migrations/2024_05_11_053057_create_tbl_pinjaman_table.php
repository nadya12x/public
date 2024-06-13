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
        Schema::create('tbl_pinjaman', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('judul_buku');
            $table->string('nama_peminjam');
            $table->string('no_hp');
            $table->date('tgl_peminjaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pinjaman');
    }
};
