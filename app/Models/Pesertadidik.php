<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesertadidik extends Model
{
	protected $table = 'peserta_didik';

    public $fillable = [
    	'nm_siswa',
    	'id_user',
        'jns_kelamin',
        'nisn',
        'tmp_lahir',
        'tgl_lahir',
        'agama',
        'alamat_siswa',
        'provinsi',
        'kabupaten',
        'no_tlpn',
        'email',
        'jurusan',
        'sts_siswa',
        'keterangan',
    ];
}
