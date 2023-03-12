<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Util\ResponseFormatter;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    use ResponseFormatter;
    public function getAllKabupatens(Request $request)
    {
        $term = $request->input('term');
        if ($term) {
            $data = Kabupaten::where('name', 'LIKE', '%' . $term . '%')->paginate(5);
            return self::ok($data);
        }
        $data = Kabupaten::paginate(5);
        return self::ok($data);
    }

    public function getAllKecamatanFromGivenKabupatenId(Request $request, $id)
    {

        $data = Kecamatan::where('kabupaten_id', $id);
        $term = $request->input('term');
        if ($term) {
            $data = $data->where('name', 'LIKE', '%' . $term . '%')->paginate(5);
            return self::ok($data);
        }
        $data = $data->paginate(5);
        return self::ok($data);
    }

    public function getAllKelurahanFromGivenKecamatanId(Request $request, $id)
    {
        $data = Kelurahan::where('kecamatan_id', $id);
        $term = $request->input('term');
        if ($term) {
            $data = $data->where('name', 'LIKE', '%' . $term . '%')->paginate(5);
            return self::ok($data);
        }
        $data = $data->paginate(5);
        return self::ok($data);
    }
}
