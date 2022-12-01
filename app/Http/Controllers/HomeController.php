<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\dpemanfaatan;
use App\Models\pengawasan;
use Illuminate\Support\Facades\DB;
  
class HomeController extends Controller
{
    public function index()
    {
        $jml_pemanfaatan = dpemanfaatan::count();
        $jml_pengawasan = pengawasan::count();
        return view('home',  ['pengawasan' => $jml_pengawasan, 'pemanfaatan' => $jml_pemanfaatan ]);
    }
    
}