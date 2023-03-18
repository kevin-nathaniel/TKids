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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->bigInteger('nis') -> unsigned();
            $table->string('nama_wali_murid');
            $table->string('kelas');
            $table->float('nilai_berhitung');
            $table->float('nilai_membaca');
            $table->float('nilai_menulis');
            $table->float('nilai_menggambar');
            $table->string('status_anak');
            $table->string('tahun_ajaran');
            $table->string('keterangan');
            $table->timestamps();

            


            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};