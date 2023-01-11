<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrasi', function (Blueprint $table) {
            $table->id();
            $table->string('surat_kemonbu');
            $table->string('desa');
            $table->date('tgl_masuk');
            $table->string('tindak');
            $table->string('pengembalian');
            $table->string('proses_kasultanan');
            $table->string('jawaban_kasultanan');
            $table->string('proses_biro');
            $table->string('jawaban_biro');
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
        Schema::dropIfExists('administrasi');
    }
}
