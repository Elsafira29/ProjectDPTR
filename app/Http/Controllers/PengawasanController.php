<?php

namespace App\Http\Controllers;

use App\Models\pengawasan;
use App\Http\Requests\StorepengawasanRequest;
use App\Http\Requests\UpdatepengawasanRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengawasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kabupaten(Request $request) {
        $data = DB::table('pengawasan')->select('kabupaten')->distinct()->get();
        return $data;
    }
    public function kapanewon(Request $request) {
        $kabupaten = $request->query('kabupaten');
        if(!isset($kabupaten)) {
            dd("gk ada kabupaten di query");
        }
        $data = DB::table('pengawasan')->where('kabupaten', $kabupaten)->select('kapanewon')->distinct()->get();
        // dd($data);
        return $data;
    }

     public function kelurahan(Request $request) {
        $kabupaten = $request->query('kabupaten');
        if(!isset($kabupaten)) {
            dd("gk ada kabupaten di query");
        }
        $data = DB::table('pengawasan')->where('kabupaten', $kabupaten)->select('kelurahan')->distinct()->get();
        // dd($data);
        return $data;
    }
    public function pengawasan(Request $request) 
    {
        // dd($request);
        $kabupaten =  $request->query('kabupaten');
        $kapanewon = $request->query('kapanewon');
        $kelurahan = $request->query('kelurahan');
        
        if(isset($kapanewon)&&isset($kabupaten)&&isset($kelurahan)) {
            $data = DB::table('pengawasan')
            ->where('kabupaten', $kabupaten)
            ->where('kapanewon', $kapanewon)
            ->where('kelurahan', $kelurahan)->get();
        } elseif (isset($kelurahan)&&isset($kabupaten)) {
            $data = DB::table('pengawasan')
           ->where('kabupaten', $kabupaten)
           ->where('kelurahan', $kelurahan)->get();
        } else {
            $data = DB::table('pengawasan')
            ->where('kabupaten', $kabupaten)->get();
        };
        return response()->json($data);
    }
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
