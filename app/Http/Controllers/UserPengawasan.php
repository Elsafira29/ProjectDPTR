<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengawasan;
use Illuminate\Support\Facades\DB;

class UserPengawasan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //   return view('Pengawasan.Data-Pengawasan');
          $dtpengawasan = pengawasan::all();
          return view('user_dashboard', compact('dtpengawasan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        pengawasan::create([
            'id'=>$request->id,
            'kabupaten'=>$request->kabupaten,
            'kapanewon'=>$request->kapanewon,
            'kelurahan'=>$request->kelurahan,
            'tahun_pengawasan'=>$request->tahun_pengawasan,
            'nomor_sk'=>$request->nomor_sk,
            'tanggal_sk'=>$request->tanggal_sk,
            'bentuk_pemanfaatan'=>$request->bentuk_pemanfaatan,
            'pengelola'=>$request->pengelola,
            'persil_klas'=>$request->persil_klas,
            'nomor_sertifikat'=>$request->nomor_sertifikat,
            'luas_pemanfaatan'=>$request->luas_pemanfaatan,
            'luas_keseluruhan'=>$request->luas_keseluruhan,
            'jumlah_bidang'=>$request->jumlah_bidang,
            'lokasi'=>$request->lokasi,
            'koordinat'=>$request->koordinat,
            'jktwaktu'=>$request->jktwaktu,
            'jenis_sk'=>$request->jenis_sk,
            'tdklanjut'=>$request->tdklanjut,
            'kesesuaian'=>$request->kesesuaian
        ]);

        return redirect('user_dashboard');

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
