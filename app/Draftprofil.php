<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draftprofil extends Model
{
     protected $fillable = ['id', 'kategori', 'nama', 'alamat', 'kabupaten', 'pekerjaan', 'jk', 'no_telp',' email', 'anggota_1', 'anggota_2', 'anggota_3', 'anggota_4', 'anggota_5', 'judul', 'temuan', 'pengembangan'];
}
