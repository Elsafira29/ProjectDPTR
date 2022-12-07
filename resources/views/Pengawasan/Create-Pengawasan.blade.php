@extends('layouts.app')

@section('content')
    

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content" style="margin: 7vh; margin-left:25vh; width:110vh">
      <div class="card card-info card-outline ">
          <div class="card-header">
              <h3>Input Data Pengawasan</h3>

          </div>

        <div class="card-body">
          <form action="{{ route('simpan-Pengawasan') }}" method="POST">
            {{ csrf_field() }}
                    {{-- <div class="form-group mt-3">
                      <label>ID:</label>
                      <input type="text" id="id" name ="id" class="form-control">
                    </div> --}}
                    <div class="form-group mt-3">
                      <label>Kabupaten:</label>
                      <input type="text" id="kabupaten" name="kabupaten" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label>Kapanewon:</label>
                        <input type="text" id ="kapanewon" name="kapanewon" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label>Kalurahan:</label>
                        <input type="text" id ="kelurahan" name="kelurahan" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label>Tahun Pengawasan:</label>
                        <input type="text" id="tahun_pengawasan" name="tahun_pengawasan" class="form-control"  />
                    </div>
                    <div class="form-group mt-3">
                        <label>Nomor SK	:</label>
                        <input type="text" id="nomor_sk" name="nomor_sk" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label>Tanggal SK:</label>
                        <input type="date" id="tanggal_sk" name="tanggal_sk" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label>Bentuk Pemanfaatan	:</label>
                        <input type="text" id="bentuk_pemanfaatan" name="bentuk_pemanfaatan" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label>Pengelola:</label>
                        <input type="text" id="pengelola" name="pengelola" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label>Persil Klas:</label>
                        <input type="text" id="persil_klas" name="persil_klas" class="form-control" />
                    </div>
                  <div class="form-group mt-3">
                    <label>Nomor Sertifikat:</label>
                    <input type="text" id="nomor_sertifikat" name="nomor_sertifikat" class="form-control" />
                  </div>
                  <div class="form-group mt-3">
                    <label>Luas Pemanfaatan:</label>
                    <input type="text" id="luas_pemanfaatan" name="luas_pemanfaatan" class="form-control" />
                  </div>
                  <div class="form-group mt-3">
                    <label>Luas Keseluruhan:</label>
                    <input type="text" id="luas_keseluruhan" name="luas_keseluruhan" class="form-control" />
                  </div>
                  <div class="form-group mt-3">
                    <label>Jumlah Bidang	:</label>
                    <input type="text" id="jumlah_bidang" name="jumlah_bidang" class="form-control" />
                  </div>
                  <div class="form-group mt-3">
                    <label>Lokasi:</label>
                    <input type="text" id="lokasi" name="lokasi" class="form-control" />
                  </div>
                  <div class="form-group mt-3">
                    <label>Koordinat:</label>
                    <input type="text" id="koordinat" name="koordinat" class="form-control" />
                  </div>
                  <div class="form-group mt-3">
                    <label>Jangka Waktu:</label>
                    <input type="text" id="jktwaktu" name="jktwaktu" class="form-control" />
                  <div>
                  <div class="form-group mt-3">
                    <label>Jenis Sk:</label>
                    <input type="text" id="jenis_sk" name="jenis_sk" class="form-control" />
                  <div>
                  <div class="form-group mt-3">
                    <label>Tindak Lanjut:</label>
                    <input type="text" id="tdklanjut" name="tdklanjut" class="form-control" />
                  <div>
                  <div class="form-group mt-3">
                      <label>Kesesuaian:</label>
                      <input type="text" id="kesesuaian" name="kesesuaian" class="form-control" />
                  <div class="mt-3">
                    <button type="submit" class="btn btn-success" style="background-color: brown">Simpan Data</button>
                  </div>
        
                </form>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
        </div>
      </div>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark"> --}}
    <!-- Control sidebar content goes here -->
    {{-- <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="cart-tools">
                    <a href="#" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
  </aside> --}}
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  {{-- <footer class="main-footer"> --}}
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
  @include('tamplate.script')

</body>
</html>

@endsection