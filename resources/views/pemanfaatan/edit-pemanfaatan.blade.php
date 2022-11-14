
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
  @include('tamplate.head')
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
                <h3>edit data</h3>

            </div>

            <div class="card-body">
              @foreach($dpemanfaatan as $item)
                <form action="{{ route('updatepemanfaatan') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="id" name="id" class="form-control" placeholder="id" value="{{ $item->id }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kode_perizinan" name="kode_perizinan" class="form-control" placeholder="kode perizinan" value="{{ $item->kode_perizinan }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="desa-kecamatan" name="desa_kecamatan" class="form-control" placeholder="Desa/Kemacatan" value="{{ $item->desa_kecamatan }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kabupaten" name="kabupaten" class="form-control" placeholder="kabupaten" value="{{ $item->kabupaten }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="kelurahan" value="{{ $item->kelurahan }}">
                    </div>
                    <div class="form-group">
                      <input type="text" id="persil" name="persil" class="form-control" placeholder="sertifikat/persil" value="{{ $item->persil }}">
                     </div>
                    <div class="form-group">
                        <input type="text" id="luas" name="luas" class="form-control" placeholder="luas" value="{{ $item->luas }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="uraian" name="uraian" class="form-control" placeholder="uraian" value="{{ $item->uraian }}">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control" placeholder="tanggal-mulai" value="{{ $item->tanggal_mulai }}">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control" placeholder="tanggal-akhir" value="{{ $item->tanggal_akhir }}">
                    </div>
                    <div class="form-group">
                      <input type="text" id="file_SK" name="file_SK" class="form-control" placeholder="File SK" value="{{ $item->file_SK }}">
                  </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Ubah Data</button>
                    </div>
                </form>
              @endforeach
            </div>
        </div> 
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('tamplate.footer')
   </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('tamplate.script')
</body>
</html>
