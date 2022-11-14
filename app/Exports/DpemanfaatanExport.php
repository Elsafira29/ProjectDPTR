<?php

namespace App\Exports;

use App\Models\dpemanfaatan;
use Maatwebsite\Excel\Concerns\FromCollection;

class DpemanfaatanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dpemanfaatan::all();
    }
}
