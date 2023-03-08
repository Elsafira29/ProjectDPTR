<?php

namespace App\Http\Controllers;
use App\Models\administrasi;
use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrasi = administrasi::all();
        return view('permohonan_izin.tabel_izin', compact('administrasi'));

        $administrasi = administrasi::with('administrasi')->get();
        return response()->json($administrasi);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permohonan_izin.form_izin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        administrasi::create([
            'id'=>$request->id,
            'surat_kemonbu'=> $request->surat_kemonbu,
            'desa'=>$request->desa,
            'tgl_masuk'=>$request->tgl_masuk,
            'tindak'=>$request->tindak,
            'pengembalian'=>$request->pengembalian,
            'proses_kasultanan'=>$request->proses_kasultanan,
            'jawaban_kasultanan'=>$request->jawaban_kasultanan,
            'proses_biro'=>$request->proses_biro,
            'jawaban_biro'=>$request->jawaban_biro,
        ]);
        return redirect('tabel_izin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(administrasi::with('administrasi')->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admistrasi = administrasi::select('*')
                            -> where('id', $id)
                            -> get();
        return view('permohonan_izin.Edit_izin',['administrasi' => $admistrasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $administrasi = administrasi::where('id',$request->id)
                        ->Update([
                            'id'=>$request->id,
                            'surat_kemonbu'=> $request->surat_kemonbu,
                            'desa'=>$request->desa,
                            'tgl_masuk'=>$request->tgl_masuk,
                            'tindak'=>$request->tindak,
                            'pengembalian'=>$request->pengembalian,
                            'proses_kasultanan'=>$request->proses_kasultanan,
                            'jawaban_kasultanan'=>$request->jawaban_kasultanan,
                            'proses_biro'=>$request->proses_biro,
                            'jawaban_biro'=>$request->jawaban_biro,
         ]);
         return redirect()->route('tabel_izin');
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
            $administrasi = administrasi::where('id', $id)
                  ->delete();
    
            return redirect()->route('form_izin');
    }
    }
}
