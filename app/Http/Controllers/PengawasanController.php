<?php

namespace App\Http\Controllers;

use App\Models\pengawasan;
use Illuminate\Http\Request;

class PengawasanController extends Controller
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
          return view('Pengawasan.Data-Pengawasan', compact('dtpengawasan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Pengawasan.Create-Pengawasan');
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

        return redirect('Data-Pengawasan');

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
        $Pengawasan = Pengawasan::select('*')
                            -> where('id', $id)
                            -> get();
        return view('Pengawasan.Edit-Pengawasan',['Pengawasan' => $Pengawasan]);
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
        $Pengawasan = Pengawasan::where('id',$request->id)
                        ->update([
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
                            'kesesuaian'=>$request->kesesuaian,
                        ]);
                        return redirect()->route('Data-Pengawasan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $Pengawasan = Pengawasan::where('id', $id)
                  ->delete();
    
            return redirect()->route('Data-Pengawasan');
    }
    }
}
