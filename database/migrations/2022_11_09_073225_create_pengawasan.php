<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengawasan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengawasan', function (Blueprint $table) {
            $table->id();
            $table->string ('kabupaten');
            $table->string ('kapanewon');
            $table->string ('kelurahan');
            $table->string ('tahun_pengawasan');
            $table->string ('nomor_sk');
            $table->date ('tanggal_sk');
            $table->string ('bentuk_pemanfaatan');
            $table->string ('pengelola');
            $table->string ('persil_klas');
            $table->string ('nomor_sertifikat');
            $table->string ('luas_pemanfaatan');
            $table->string ('luas_keseluruhan');
            $table->string ('jumlah_bidang');
            $table->string ('lokasi');
            $table->string ('koordinat');
            $table->string ('jktwaktu');
            $table->string ('jenis_sk');
            $table->string ('tdklanjut');
            $table->string ('kesesuaian');
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
        Schema::dropIfExists('pengawasan');
    }
}
    

    
