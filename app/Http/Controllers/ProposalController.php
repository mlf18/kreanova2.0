<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proposal;

use App\Profil;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposal = Proposal::get();
        return view('proposal.index', compact('proposal'));
    }

    public function get($filename){

		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('proposal')->get($entry->filename);

		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil = Profil::pluck('judul', 'id');

        return view('proposal.create', compact('profil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proposal = new Proposal();
        $proposal->abstrak = $request->input('abstrak');
        $proposal->latar_belakang = $request->input('latar_belakang');
        $proposal->maksud = $request->input('maksud');
        $proposal->manfaat = $request->input('manfaat');
        $proposal->spek_teknik = $request->input('spek_teknik');
        $proposal->keunggulan = $request->input('keunggulan');
        $proposal->penerapan = $request->input('penerapan');
        $proposal->biaya_produksi = $request->input('biaya_produksi');
        $proposal->prospek_bisnis = $request->input('prospek_bisnis');

        // upload proposal

        $file       = $request->file('proposal_name');
        $fileName   = $file->getClientOriginalName();
        $request->file('proposal_name')->move("proposal/", $fileName);

        $proposal->proposal_name = $fileName;

        //upload surat pernyataan keaslian

        $file2       = $request->file('spk_name');
        $fileName2   = $file2->getClientOriginalName();
        $request->file('spk_name')->move("spk/", $fileName2);

        $proposal->spk_name = $fileName2;

        // upload lampiran

        $file3       = $request->file('lampiran_name');
        $fileName3   = $file3->getClientOriginalName();
        $request->file('lampiran_name')->move("lampiran/", $fileName3);

        $proposal->lampiran_name = $fileName3;

        $proposal->save();

        $proposal->profils()->attach($request->input('profil_id'));


        return redirect('/')->with('success', 'Saved');
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
