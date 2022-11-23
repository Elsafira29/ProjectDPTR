<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
 
class DpemanfaatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dpemanfaatan')->insert([
            'kode_perizinan'=> Str::random(10),
            'desa_kecamatan'=> Str::random(10),
            'kabupaten'=> 'sleman',
            'kelurahan'=> 'ngaglik',
            'persil'=> Str::random(10),
            'luas'=> Str::random(10),
            'uraian'=> Str::random(10),
            'tanggal_mulai'=> now(),
            'tanggal_akhir'=> now(),
            // 'file_SK'=>$request->file_SK,
            'file_SK' => Str::random(10),
        ]);
    }
}
