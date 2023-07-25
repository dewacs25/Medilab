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
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('no_telepon');
            $table->string('kebutuhan');
            $table->text('deskripsi');
            $table->string('nik_pasien');
            $table->string('nama_pasien');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->enum('status',['close','open','pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasi');
    }
};
