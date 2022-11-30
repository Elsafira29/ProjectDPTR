
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
  @include('tamplate.head')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/filepond@4.30.4/dist/filepond.min.css">
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('tamplate.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('tamplate.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline ">
            <div class="card-header">
                <h3>Input Data</h3>

            </div>

            <div class="card-body">
                <form action="{{ route('simpan-dpemanfaatan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="form-group">
                        <input type="text" id="id" name="id" class="form-control @error('id') is-invalid @enderror" placeholder="id">
                    </div> --}}
                    <div class="form-group">
                        <input type="text" id="kode_perizinan" name="kode_perizinan" class="form-control" placeholder="kode perizinan">
                    </div>
                    <div class="form-group">
                        <input type="text" id="desa-kecamatan" name="desa_kecamatan" class="form-control" placeholder="Desa/Kemacatan">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kabupaten" name="kabupaten" class="form-control" placeholder="kabupaten">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="kelurahan">
                    </div>
                    <div class="form-group">
                      <input type="text" id="persil" name="persil" class="form-control" placeholder="sertifikat/persil">
                     </div>
                    <div class="form-group">
                        <input type="text" id="luas" name="luas" class="form-control" placeholder="luas">
                    </div>
                    <div class="form-group">
                        <input type="text" id="uraian" name="uraian" class="form-control" placeholder="uraian">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control" placeholder="tanggal-mulai">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control" placeholder="tanggal-akhir">
                    </div>
                    <div class="form-group">
                      <label for="files" class="form-label mt-4">Upload SK Images :</label>
                      <div class="input-group hdtuto control-group lst increment" >
                        <input type="file" name="filenames[]" class="myfrm form-control">
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
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary">Simpan Data</button>
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
  <footer class="main-footer">
    @include('tamplate.footer')
   </footer>
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
