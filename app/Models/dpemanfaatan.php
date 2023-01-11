<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FileUpload;

class dpemanfaatan extends Model
{
    //  use HasFactory;
    protected $table = "pemanfaatan";
    protected $fillable = ['kode_perizinan','kabupaten','kapanewon','kelurahan','desa','persil','luas','uraian','tanggal_mulai','tanggal_akhir'];

    // relation
    public function files()
    {
        return $this->hasMany(FileUpload::class, 'id_pemanfaatan');
    }

    //scope
    public function scopeSearch($query, $kabupaten)
    {
        return $query->where('kabupaten', 'LIKE', "%{$kabupaten}%");
    }
}
