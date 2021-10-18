<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class izinKerja extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'izin_kerja';
    protected $fillable = [
        'tempat_tulis_izin',
        'tanggal_tulis_izin',
        'hal_izin',
        'kepada_orang_instansi',
        'nama_instansi',
        'alamat_instansi',
        'nama_user_izin',
        'alamat_user_izin',
        'jabatan_user_izin',
        'tanggal_mulai_izin',
        'tanggal_selesai_izin',
        'alasan_izin',
    ];
}
