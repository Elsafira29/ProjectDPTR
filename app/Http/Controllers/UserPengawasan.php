<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengawasan;
use App\Models\dpemanfaatan;
use Illuminate\Support\Facades\DB;

class UserPengawasan extends Controller
{

   public function index()
   {
       $dtpengawasan = DB::table('pengawasan')->get();
       return view('user_pengawasan', compact('dtpengawasan'));
       
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

       $hello = pengawasan::create([
           'id'=>$request->id,
           'kabupaten'=>$request->kabupaten,
           'kapanewon'=>$request->kapanewon,
           'kelurahan'=>$request->kelurahan,
           'tahun_pengawasan'=>$request->tahun_pengawasan,
           'nomor_sk'=>$request->nomor_sk,
           'tanggal_sk'=>$request->tanggal_sk,
           'bentuk_pemanfaatan'=>$request->bentuk_pemanfaatan,
           'pengelola'=>$request->pengelola,
       ]);
       

       // dd($hello);

       
       //     $nm = request()->file('file_SK');
       //     $namaFile = $nm->store("img/menu");

       //     $dtUpload = new Uploadgambar;
       //     $dtUpload->file_SK =$namaFile;

       //     $nm->move(public_path().'/img', $namaFile);
       //     $dtUpload->save();

       // ]);




       return redirect('user_pengawasan');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       return response()->json(pengawasan::with('pengawasan')->find($id));
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
