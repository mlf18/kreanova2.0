<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav=[
            'active','','','',''
        ];
        return view('content.beranda.index')->with(['navbar'=>$nav]);
    }
    public function artikel()
    {
        $nav=[
            '','','','',''
        ];
        return view('content.artikel.index')->with(['navbar'=>$nav])->with(['navbar'=>$nav]);
    }
    public function panduan(){
        $nav=[
            '','','','',''
        ];
        return view('content.panduan.index')->with(['navbar'=>$nav])->with(['navbar'=>$nav]);
    }
    public function direktori(){
        $nav=[
            '','','active','',''
        ];
        $locationsPeta=[
            [
                'nama'=>'Semarang',
                'latitude'=>-7.00514500,
                'longitude'=>110.43812500,
            ],
            [
                'nama'=>'Semarang',
                'latitude'=>-7.04472300,
                'longitude'=>110.46195900,
            ],
            
        ];
        return view('content.direktori.index')->with(['locationsPeta'=>$locationsPeta,'navbar'=>$nav]);
    }
    public function polling(){
        $nav=[
            '','','','active',''
        ];
        return view('content.polling.index')->with(['navbar'=>$nav]);
    }
    public function daftarpemenang(){
        $nav=[
            '','','','',''
        ];
        return view('content.daftarpemenang.index')->with(['navbar'=>$nav]);
    }
    public function rekap(){
        $nav=[
            '','','','',''
        ];
        return view('content.rekap.index')->with(['navbar'=>$nav]);
    }
}
