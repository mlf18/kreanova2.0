<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengusul extends Model
{
    protected $fillable = ['id', 'nama', 'jabatan',  'lembaga', 'alamat', 'no_telp'];

    public function profils()
    {
    	return $this->belongsToMany(Profil::class);
    }
}
