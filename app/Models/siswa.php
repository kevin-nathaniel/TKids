<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable =  [
        'nama_siswa',
        'nis',
        'nama_wali_murid',
        'kelas',
        'nilai_berhitung',
        'nilai_membaca',
        'nilai_menulis',
        'nilai_menggambar',
        'status_anak',
        'tahun_ajaran',
        'keterangan'
    ];
    protected $table = 'siswa';
    public $timestamps = false;
}
