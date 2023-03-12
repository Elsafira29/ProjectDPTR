<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\dpemanfaatan;

class DpemanfaatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = dpemanfaatan::create([
            'kode_perizinan' => Str::random(10),
            'kapanewon' => Str::random(10),
            'kabupaten' => 'sleman',
            'kelurahan' => 'ngaglik',
            'desa' => Str::random(10),
            'persil' => Str::random(10),
            'luas' => Str::random(10),
            'uraian' => Str::random(10),
            'tanggal_mulai' => now(),
            'tanggal_akhir' => now(),
            // 'file_SK'=>Str::random(10),
        ]);

        DB::table('file')->insert([
            'id_pemanfaatan' => $data->id,
            'filename' => Str::random(20),
        ]);
        DB::table('file')->insert([
            'id_pemanfaatan' => $data->id,
            'filename' => Str::random(20),
        ]);
        DB::table('file')->insert([
            'id_pemanfaatan' => $data->id,
            'filename' => Str::random(20),
        ]);
        DB::table('file')->insert([
            'id_pemanfaatan' => $data->id,
            'filename' => Str::random(20),
        ]);
    }
}
