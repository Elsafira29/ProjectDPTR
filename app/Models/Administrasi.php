<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    //use HasFactory;
    protected $table = "administrasi";
    protected $primaryKey = "id";
    protected $fillable = ['id','surat_kemonbu','desa','tgl_masuk','tindak','pengembalian','proses_kasultanan','jawaban_kasultanan','proses_biro','jawaban_biro'];

}
