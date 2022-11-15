<?php

namespace App\Http\Controllers;

use App\Models\dpemanfaatan;
use App\Http\Requests\StoredpemanfaatanRequest;
use App\Http\Requests\UpdatedpemanfaatanRequest;

class DpemanfaatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //percobaan
        
=======
>>>>>>> 93cc6806f07dd628d95c2f86f0ffde723e591c51
        //memunculksn data inputan ke tabel
        $dtpemanfaatan = dpemanfaatan::all();
        return view('pemanfaatan.tabel', compact('dtpemanfaatan'));

        //percobaan
    }

    // public function  DpemanfaatanExport(){
    //     return Excel::dowload( );
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemanfaatan.form-dpemanfaatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredpemanfaatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredpemanfaatanRequest $request)
    {
        //bagian untuk menyimpan data ketabel
        // dd($request->all());

        dpemanfaatan::create([
            'id'=>$request->id,
            'kode_perizinan'=>$request->kode_perizinan,
            'desa_kecamatan'=>$request->desa_kecamatan,
            'kabupaten'=>$request->kabupaten,
            'kelurahan'=>$request->kelurahan,
            'persil'=>$request->persil,
            'luas'=>$request->luas,
            'uraian'=>$request->uraian,
            'tanggal_mulai'=>$request->tanggal_mulai,
            'tanggal_akhir'=>$request->tanggal_akhir,
            // 'file_SK'=>$request->file_SK,
            'file_SK' => $request->file('file_SK')->store('dpemanfaatan')
        ]);

        //     $nm = request()->file('file_SK');
        //     $namaFile = $nm->store("img/menu");

        //     $dtUpload = new Uploadgambar;
        //     $dtUpload->file_SK =$namaFile;

        //     $nm->move(public_path().'/img', $namaFile);
        //     $dtUpload->save();

        // ]);

        return redirect('tabel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dpemanfaatan  $dpemanfaatan
     * @return \Illuminate\Http\Response
     */
    public function show(dpemanfaatan $dpemanfaatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dpemanfaatan  $dpemanfaatan
     * @return \Illuminate\Http\Response
     */
    // public function edit(dpemanfaatan $dpemanfaatan)
    public function edit($id)
    {
        $dpemanfaatan = dpemanfaatan::select('*')
                        ->where('id', $id)
                        ->get();
        return view('pemanfaatan.edit-pemanfaatan', ['dpemanfaatan'=> $dpemanfaatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedpemanfaatanRequest  $request
     * @param  \App\Models\dpemanfaatan  $dpemanfaatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedpemanfaatanRequest $request, dpemanfaatan $dpemanfaatan)
    {
        //
        $dpemanfaatan = dpemanfaatan::where('id', $request->id)
                    ->update([
                        'id'=>$request->id,
                        'kode_perizinan'=>$request->kode_perizinan,
                        'desa_kecamatan'=>$request->desa_kecamatan,
                        'kabupaten'=>$request->kabupaten,
                        'kelurahan'=>$request->kelurahan,
                        'persil'=>$request->persil,
                        'luas'=>$request->luas,
                        'uraian'=>$request->uraian,
                        'tanggal_mulai'=>$request->tanggal_mulai,
                        'tanggal_akhir'=>$request->tanggal_mulai,
                        'file_SK'=>$request->file_SK,
                    ]);

                    return redirect()->route('tabel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dpemanfaatan  $dpemanfaatan
     * @return \Illuminate\Http\Response
     */
    // public function destroy(dpemanfaatan $dpemanfaatan)
    public function delete($id)
    {
        //
        $dpemanfaatan = dpemanfaatan::where('id', $id)
                    ->delete();

        return redirect()->route('tabel');
    }


}
