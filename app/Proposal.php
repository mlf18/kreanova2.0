<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{

    protected $fillable = ['id, abstrak, latar_belakang, maksud, manfaat, spek_teknik, keunggulan, penerapan, biaya_produksi, prospek_bisnis, proposal_name, spk_name, lampiran_name'];

    public function profils()
    {
    	return $this->belongsToMany(Profil::class);
    }
}
