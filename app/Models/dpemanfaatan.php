<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dpemanfaatan extends Model
{
    // use HasFactory;
    protected $table = "dpemanfaatan";
    protected $primaryKey = "id";
    protected $fillable = ['id','kode_perizinan','desa_kecamatan','kabupaten','kelurahan','persil','luas','uraian','tanggal_mulai','tanggal_akhir','file_SK'];

    //relation
    // public function dasboard()
    // {
    //     return $this->belongsTo(dasboar::class);
    // }

    //scope
    public function scopeSearch($query, $kabupaten)
    {
        return $query->where('kabupaten', 'LIKE', "%{$kabupaten}%");
    }
}
