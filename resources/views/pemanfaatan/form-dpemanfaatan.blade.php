@extends('layouts.app')

@section('content')
    
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/filepond@4.30.4/dist/filepond.min.css">
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content" style="margin: 7vh; margin-left:25vh; width:110vh">
        <div class="card card-info card-outline ">
            <div class="card-header">
                <h3>Input Data Pemanfaatan</h3>

            </div>

            <div class="card-body" style="width: 100vh">
                <form action="{{ route('simpan-dpemanfaatan') }}" method="POST" enctype="multipart/form-data" style="width: 100vh; margin-left:10px;">
                    @csrf
                    {{-- <div class="form-group mt-3">
                        <input type="text" id="id" name="id" class="form-control @error('id') is-invalid @enderror" placeholder="id">
                    </div> --}}
                    <div class="form-group mt-3">
                        <label>Kode Perizininan</label>
                        <input type="text" id="kode_perizinan" name="kode_perizinan" class="form-control" placeholder="Kode perizinan" required>
                    </div>
                    <div class="form-group mt-3 mt-3">
                        <label>Desa/Kecamatan</label>
                        <input type="text" id="desa-kecamatan" name="desa_kecamatan" class="form-control" placeholder="Desa/Kecamatan" required>
                    </div>
                    <div class="form-group mt-3">
                      <label>Kabupaten</label>
                        <input type="text" id="kabupaten" name="kabupaten" class="form-control" placeholder="Kabupaten" required>
                    </div>
                    <div class="form-group mt-3">
                      <label>Kelurahan</label>
                        <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="Kelurahan" required>
                    </div>
                    <div class="form-group mt-3">
                      <label>Sertifikat/persil</label>
                      <input type="text" id="persil" name="persil" class="form-control" placeholder="Sertifikat/persil" required>
                     </div>
                    <div class="form-group mt-3">
                      <label>Luas</label>
                        <input type="text" id="luas" name="luas" class="form-control" placeholder="Luas" required>
                    </div>
                    <div class="form-group mt-3">
                      <label>Uraian</label>
                        <input type="text" id="uraian" name="uraian" class="form-control" placeholder="Uraian" required>
                    </div>
                    <div class="form-group mt-3">
                      <label>Tanggal Mulai</label>
                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control" placeholder="tanggal-mulai" required>
                    </div>
                    <div class="form-group mt-3">
                      <label>Tanggal Akhir</label>
                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control" placeholder="tanggal-akhir" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="files" class="form-label">Upload SK:</label>
                      <div class="input-group hdtuto control-group lst increment" >
                        <input type="file" name="filenames[]" class="myfrm form-control" required>
                        <div class="input-group-btn"> 
                          <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                      </div>
                      <div class="clone hide">
                        <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                          <input type="file" name="filenames[]" class="myfrm form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                          </div>
                        </div>
                      </div>                  </div>
                  {{-- <div class="mb-3">
                    <label for="formFile" class="form-label">Upload file SK</label>
                    <input class="form-control" type="file" id="formFile">
                  </div> --}}
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-secondary" style="background-color: brown">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--
  The classic file input element we'll enhance
  to a file pond, configured with attributes
  -->
  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('tamplate.script')
<script src="https://cdn.jsdelivr.net/npm/filepond@4.30.4/dist/filepond.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".btn-success").click(function(){ 
        var lsthmtl = $(".clone").html();
        $(".increment").after(lsthmtl);
    });
    $("body").on("click",".btn-danger",function(){ 
        $(this).parents(".hdtuto").remove();
    });
  });
</script>
</body>
</html>
@endsection