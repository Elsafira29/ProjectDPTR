<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemanfaatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemanfaatan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_perizinan');
            $table->string('desa_kecamatan');
            $table->string('kabupaten');
            $table->string('kelurahan');
            $table->string('persil');
            $table->string('luas');
            $table->string('uraian');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('file_SK');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemanfaatan');
    }
}
