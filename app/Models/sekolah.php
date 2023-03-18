<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;
    protected $fillable =  [
        'nama_sekolah',
        'npsn',
        'alamat',
        'status'
    ];
    protected $table = 'sekolahs';
    public $timestamps = false;
}
