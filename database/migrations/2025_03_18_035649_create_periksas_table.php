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
        Schema::create('periksas', function (Blueprint $table) {
            $table->id();
            //metode yang digunakan untuk menambahkan kunci asing (foreign key) dalam basis data
            //onDelete('cascade') menghapus data ditabel
            $table->unsignedBigInteger('id_pasien')->constrained('pasiens')->onDelete('cascade');
            $table->unsignedBigInteger('id_dokter')->constrained('dokters')->onDelete('cascade');
            $table->dateTime('tgl_periksa');
            $table->longText('catatan');
            $table->bigInteger('biaya_periksa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksas');
    }
};
