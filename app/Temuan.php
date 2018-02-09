<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temuan extends Model
{
 	protected $fillable =['id. temuan_asli, waktu_produksi, sudah_ada, ide_orang, asal_usul, komersial, komersial_pihak, penarapan, pelaku_penerapan, cakupan_penerapan, bahan_lokal, kapasitas_produksi, tenaga_kerja, prospek_tempat, prospek_cara, biaya_produksi, omset, asal_bahan, quantity_bahan, orientasi'];  

 	public function profils() 
 	{
 		return $this->belongsToMany(Profil::class);
 	}
}
