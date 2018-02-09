<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Temuan;

use App\Profil;

class QuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil = Profil::pluck('nama', 'id');

        return view('quesioner.create', compact('profil')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $quesioner = new Temuan();
        $quesioner->temuan_asli = $request->input('temuan_asli');
        $quesioner->waktu_produksi = $request->input('waktu_produksi');
        $quesioner->sudah_ada = $request->input('sudah_ada');
        $quesioner->ide_orang = $request->input('ide_orang');
        $quesioner->asal_usul = $request->input('asal_usul');
        $quesioner->komersial = $request->input('komersial');
        $quesioner->komersial_pihak = $request->input('komersial_pihak');
        $quesioner->penarapan = $request->input('penarapan');
        $quesioner->pelaku_penerapan = $request->input('pelaku_penerapan');
        $quesioner->cakupan_penerapan = $request->input('cakupan_penerapan');
        $quesioner->bahan_lokal = $request->input('bahan_lokal');
        $quesioner->kapasitas_produksi = $request->input('kapasitas_produksi');
        $quesioner->tenaga_kerja = $request->input('tenaga_kerja');
        $quesioner->prospek_tempat = $request->input('prospek_tempat');
        $quesioner->prospek_cara = $request->input('prospek_cara');
        $quesioner->biaya_produksi = $request->input('biaya_produksi');
        $quesioner->omset  = $request->input('omset'); 
        $quesioner->asal_bahan = $request->input('asal_bahan');
        $quesioner->quantity_bahan = $request->input('quantity_bahan');
        $quesioner->orientasi = $request->input('orientasi');
        $quesioner->save();

        $quesioner->profils()->attach($request->input('profil_id'));

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
