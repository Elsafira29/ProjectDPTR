<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kecamatan = [
            ["id" => "340101", "kabupaten_id" => "3401", "name" => "Temon"],
            ["id" => "340102", "kabupaten_id" => "3401", "name" => "Wates"],
            ["id" => "340103", "kabupaten_id" => "3401", "name" => "Panjatan"],
            ["id" => "340104", "kabupaten_id" => "3401", "name" => "Galur"],
            ["id" => "340105", "kabupaten_id" => "3401", "name" => "Lendah"],
            ["id" => "340106", "kabupaten_id" => "3401", "name" => "Sentolo"],
            ["id" => "340107", "kabupaten_id" => "3401", "name" => "Pengasih"],
            ["id" => "340108", "kabupaten_id" => "3401", "name" => "Kokap"],
            ["id" => "340109", "kabupaten_id" => "3401", "name" => "Girimulyo"],
            ["id" => "340110", "kabupaten_id" => "3401", "name" => "Nanggulan"],
            ["id" => "340111", "kabupaten_id" => "3401", "name" => "Samigaluh"],
            ["id" => "340112", "kabupaten_id" => "3401", "name" => "Kalibawang"],
            ["id" => "340201", "kabupaten_id" => "3402", "name" => "Srandakan"],
            ["id" => "340202", "kabupaten_id" => "3402", "name" => "Sanden"],
            ["id" => "340203", "kabupaten_id" => "3402", "name" => "Kretek"],
            ["id" => "340204", "kabupaten_id" => "3402", "name" => "Pundong"],
            ["id" => "340205", "kabupaten_id" => "3402", "name" => "Bambanglipuro"],
            ["id" => "340206", "kabupaten_id" => "3402", "name" => "Pandak"],
            ["id" => "340207", "kabupaten_id" => "3402", "name" => "Pajangan"],
            ["id" => "340208", "kabupaten_id" => "3402", "name" => "Bantul"],
            ["id" => "340209", "kabupaten_id" => "3402", "name" => "Jetis"],
            ["id" => "340210", "kabupaten_id" => "3402", "name" => "Imogiri"],
            ["id" => "340211", "kabupaten_id" => "3402", "name" => "Dlingo"],
            ["id" => "340212", "kabupaten_id" => "3402", "name" => "Banguntapan"],
            ["id" => "340213", "kabupaten_id" => "3402", "name" => "Pleret"],
            ["id" => "340214", "kabupaten_id" => "3402", "name" => "Piyungan"],
            ["id" => "340215", "kabupaten_id" => "3402", "name" => "Sewon"],
            ["id" => "340216", "kabupaten_id" => "3402", "name" => "Kasihan"],
            ["id" => "340217", "kabupaten_id" => "3402", "name" => "Sedayu"],
            ["id" => "340301", "kabupaten_id" => "3403", "name" => "Wonosari"],
            ["id" => "340302", "kabupaten_id" => "3403", "name" => "Nglipar"],
            ["id" => "340303", "kabupaten_id" => "3403", "name" => "Playen"],
            ["id" => "340304", "kabupaten_id" => "3403", "name" => "Patuk"],
            ["id" => "340305", "kabupaten_id" => "3403", "name" => "Paliyan"],
            ["id" => "340306", "kabupaten_id" => "3403", "name" => "Panggang"],
            ["id" => "340307", "kabupaten_id" => "3403", "name" => "Tepus"],
            ["id" => "340308", "kabupaten_id" => "3403", "name" => "Semanu"],
            ["id" => "340309", "kabupaten_id" => "3403", "name" => "Karangmojo"],
            ["id" => "340310", "kabupaten_id" => "3403", "name" => "Ponjong"],
            ["id" => "340311", "kabupaten_id" => "3403", "name" => "Rongkop"],
            ["id" => "340312", "kabupaten_id" => "3403", "name" => "Semin"],
            ["id" => "340313", "kabupaten_id" => "3403", "name" => "Ngawen"],
            ["id" => "340314", "kabupaten_id" => "3403", "name" => "Gedangsari"],
            ["id" => "340315", "kabupaten_id" => "3403", "name" => "Saptosari"],
            ["id" => "340316", "kabupaten_id" => "3403", "name" => "Girisubo"],
            ["id" => "340317", "kabupaten_id" => "3403", "name" => "Tanjungsari"],
            ["id" => "340318", "kabupaten_id" => "3403", "name" => "Purwosari"],
            ["id" => "340401", "kabupaten_id" => "3404", "name" => "Gamping"],
            ["id" => "340402", "kabupaten_id" => "3404", "name" => "Godean"],
            ["id" => "340403", "kabupaten_id" => "3404", "name" => "Moyudan"],
            ["id" => "340404", "kabupaten_id" => "3404", "name" => "Minggir"],
            ["id" => "340405", "kabupaten_id" => "3404", "name" => "Seyegan"],
            ["id" => "340406", "kabupaten_id" => "3404", "name" => "Mlati"],
            ["id" => "340407", "kabupaten_id" => "3404", "name" => "Depok"],
            ["id" => "340408", "kabupaten_id" => "3404", "name" => "Berbah"],
            ["id" => "340409", "kabupaten_id" => "3404", "name" => "Prambanan"],
            ["id" => "340410", "kabupaten_id" => "3404", "name" => "Kalasan"],
            ["id" => "340411", "kabupaten_id" => "3404", "name" => "Ngemplak"],
            ["id" => "340412", "kabupaten_id" => "3404", "name" => "Ngaglik"],
            ["id" => "340413", "kabupaten_id" => "3404", "name" => "Sleman"],
            ["id" => "340414", "kabupaten_id" => "3404", "name" => "Tempel"],
            ["id" => "340415", "kabupaten_id" => "3404", "name" => "Turi"],
            ["id" => "340416", "kabupaten_id" => "3404", "name" => "Pakem"],
            ["id" => "340417", "kabupaten_id" => "3404", "name" => "Cangkringan"],
            ["id" => "347101", "kabupaten_id" => "3471", "name" => "Tegalrejo"],
            ["id" => "347102", "kabupaten_id" => "3471", "name" => "Jetis"],
            ["id" => "347103", "kabupaten_id" => "3471", "name" => "Gondokusuman"],
            ["id" => "347104", "kabupaten_id" => "3471", "name" => "Danurejan"],
            ["id" => "347105", "kabupaten_id" => "3471", "name" => "Gedongtengen"],
            ["id" => "347106", "kabupaten_id" => "3471", "name" => "Ngampilan"],
            ["id" => "347107", "kabupaten_id" => "3471", "name" => "Wirobrajan"],
            ["id" => "347108", "kabupaten_id" => "3471", "name" => "Mantrijeron"],
            ["id" => "347109", "kabupaten_id" => "3471", "name" => "Kraton"],
            ["id" => "347110", "kabupaten_id" => "3471", "name" => "Gondomanan"],
            ["id" => "347111", "kabupaten_id" => "3471", "name" => "Pakualaman"],
            ["id" => "347112", "kabupaten_id" => "3471", "name" => "Mergangsan"],
            ["id" => "347113", "kabupaten_id" => "3471", "name" => "Umbulharjo"],
            ["id" => "347114", "kabupaten_id" => "3471", "name" => "Kotagede"],
        ];

        foreach (array_chunk($kecamatan, 500) as $item) {
            Kecamatan::insert($item);
        }
    }
}
