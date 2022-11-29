<?php

namespace App\Http\Controllers;

use App\Models\dpemanfaatan;
use App\Models\FileUpload;
use App\Http\Requests\StoredpemanfaatanRequest;
use App\Http\Requests\UpdatedpemanfaatanRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DpemanfaatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kabupaten(Request $request) {
        $data = DB::table('pemanfaatan')->select('kabupaten')->distinct()->get();
        return $data;
    }
    public function kecamatan(Request $request) {
        $kabupaten = $request->query('kabupaten');
        if(!isset($kabupaten)) {
            dd("gk ada kabupaten di query");
        }
        $data = DB::table('pemanfaatan')->where('kabupaten', $kabupaten)->select('desa_kecamatan')->distinct()->get();
        // dd($data);
        return $data;
    }
    public function kelurahan(Request $request) {
        $kabupaten = $request->query('kabupaten');
        if(!isset($kabupaten)) {
            dd("gk ada kabupaten di query");
        }
        $data = DB::table('pemanfaatan')->where('kabupaten', $kabupaten)->select('kelurahan')->distinct()->get();
        // dd($data);
        return $data;
    }
    public function pemanfaatan(Request $request) 
    {
        // dd($request);
        $kabupaten =  $request->query('kabupaten');
        $desa_kecamatan = $request->query('desa_kecamatan');
        $kelurahan = $request->query('kelurahan');
        if(isset($desa_kecamatan)&&isset($kabupaten)&&isset($kelurahan)) {
            $data = DB::table('pemanfaatan')
            ->where('kabupaten', $kabupaten)
            ->where('desa_kecamatan', $desa_kecamatan)
            ->where('kelurahan', $kelurahan)->get();
        } elseif (isset($kelurahan)&&isset($kabupaten)) {
            $data = DB::table('pemanfaatan')
           ->where('kabupaten', $kabupaten)
           ->where('kelurahan', $kelurahan)->get();
        } else {
            $data = DB::table('pemanfaatan')
            ->where('kabupaten', $kabupaten)->get();
        };
        
        return response()->json($data);
    }
    public function index()
    {
        //percobaan
        
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
        // $this->validate($request, [
        //     'filenames' => 'required',
        //     'filenames.*' => 'required'
        // ]);
        
        $files = [];
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
        }
        // dd($request->all());
        $hello = dpemanfaatan::create([
            'id'=>$request->id,
            'kode_perizinan'=> $request->kode_perizinan,
            'desa_kecamatan'=>$request->desa_kecamatan,
            'kabupaten'=>$request->kabupaten,
            'kelurahan'=>$request->kelurahan,
            'persil'=>$request->persil,
            'luas'=>$request->luas,
            'uraian'=>$request->uraian,
            'tanggal_mulai'=>$request->tanggal_mulai,
            'tanggal_akhir'=>$request->tanggal_akhir,
            'file_SK' => 'hehe :P'
        ]);

        // dd($hello);

        foreach($files as $file) {
            FileUpload::create([
                'filename' => $file,
                'id_pemanfaatan' => $request->id
            ]);
        }

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
