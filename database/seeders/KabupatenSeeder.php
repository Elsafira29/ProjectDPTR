<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kabupaten = [
            ["id" => "3401", "name" => "KAB. KULON PROGO"],
            ["id" => "3402", "name" => "KAB. BANTUL"],
            ["id" => "3403", "name" => "KAB. GUNUNGKIDUL"],
            ["id" => "3404", "name" => "KAB. SLEMAN"],
            ["id" => "3471", "name" => "KOTA YOGYAKARTA"]
        ];

        foreach (array_chunk($kabupaten, 2) as $i) {
            Kabupaten::insert($i);
        }
    }
}
