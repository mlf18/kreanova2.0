<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bupati;

class BupatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bupati = Bupati::all();

        return view('kabupaten.index', compact('bupati'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kabupaten.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $bupati = new Bupati;
            $bupati->nama_kabupaten = $request->input('nama_kabupaten');
            $bupati->alokasi_anggaran = $request->input('alokasi_anggaran');
            $bupati->perda = $request->input('perda');
            $bupati->mou = $request->input('mou');
            $bupati->lomba_kab = $request->input('lomba_kab');
            $bupati->pameran_kab = $request->input('pameran_kab');
            $bupati->jumlah_lombakab = $request->input('jumlah_lombakab');
            $bupati->jumlah_pamerankab = $request->input('jumlah_pamerankab');
            $bupati->pemenang_provinsi = $request->input('pemenang_provinsi');
            $bupati->save();

            return redirect('bupati');
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
