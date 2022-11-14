<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengawasan extends Model
{
    //use HasFactory;
    protected $table = "pengawasan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kabupaten','kapanewon','kelurahan','tahun_pengawasan','nomor_sk','tanggal_sk','bentuk_pemanfaatan','pengelola','persil_klas','nomor_sertifikat','luas_pemanfaatan','luas_keseluruhan','jumlah_bidang','lokasi','koordinat','jktwaktu','jenis_sk','tdklanjut','kesesuaian'
    ];
        
    // public function dasboard(){
    //     return $this->hasMany(dasboard::class);
    // }
}
