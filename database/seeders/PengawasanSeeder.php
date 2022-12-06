<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\pengawasan;

class PengawasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = pengawasan::create([
            'kabupaten' => Str::random(9),
            'kapanewon' => Str::random(9),
            'kelurahan' => Str::random(9),
            'tahun_pengawasan' => Str::random(9),
            'nomor_sk' => Str::random(9),
            'tanggal_sk' => now(),
            'bentuk_pemanfaatan' => Str::random(9),
            'pengelola' => Str::random(9),
            'persil_klas' => Str::random(9),
            'nomor_sertifikat' => Str::random(9),
            'luas_pemanfaatan' => Str::random(9),
            'luas_keseluruhan' => Str::random(9),
            'jumlah_bidang' => Str::random(9),
            'lokasi' => Str::random(9),
            'koordinat' => Str::random(9),
            'jktwaktu' => Str::random(9),
            'jenis_sk' => Str::random(9),
            'tdklanjut' => Str::random(9),
            'kesesuaian' => Str::random(9)
            // 'file_SK'=>$request->file_SK,
        ]);

        // DB::table('file')->insert([
        //     'id_pemanfaatan' => $data->id,
        //     'filename' => Str::random(20),
        // ]);
        // DB::table('file')->insert([
        //     'id_pemanfaatan' => $data->id,
        //     'filename' => Str::random(20),
        // ]);
        // DB::table('file')->insert([
        //     'id_pemanfaatan' => $data->id,
        //     'filename' => Str::random(20),
        // ]);
        // DB::table('file')->insert([
        //     'id_pemanfaatan' => $data->id,
        //     'filename' => Str::random(20),
        // ]);
    }
}
