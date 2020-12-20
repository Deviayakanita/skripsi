<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasikeluar extends Model
{
	protected $table = 'mutasi_keluar';

    public $fillable = [
    	'no_srt_pindah',
        'nis',
    	'id_siswa',
    	'sekolah_tujuan',
        'tingkat_kelas',
        'tgl_masuk',
        'alasan_pindah',
        'status_mutasi',
    ];
}
