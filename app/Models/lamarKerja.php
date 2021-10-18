<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lamarKerja extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'lamaran_kerja';
    protected $fillable = [
        'tempat_tulis_lamaran',
        'tanggal_tulis_lamaran',
        'kepada_lamaran_instansi',
        'nama_instansi_lamaran',
        'alamat_instansi_lamaran',
        'nama_user_lamar',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_user_lamar',
        'nomor_user_lamar',
        'berkas_satu',
        'berkas_dua',
        'berkas_tiga',
        'berkas_empat',
        'berkas_lima'
    ];
}
