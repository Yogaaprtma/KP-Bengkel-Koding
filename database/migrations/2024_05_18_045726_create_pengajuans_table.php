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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('perusahaan');
            $table->string('posisi');
            $table->enum('bidang_kajian', ['Teknik Informatika'])->default('Teknik Informatika');
            $table->string('keyword')->unique();
            $table->string('deskripsi');
            $table->string('catatan');
            $table->string('status')->nullable();
            $table->unsignedBigInteger('mhs_id');
            $table->foreign('mhs_id')->references('id')->on('mahasiswas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
