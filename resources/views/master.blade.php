<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
</head>
<body>
    
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
            <h1 class="m-0">Data Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline" style="width: 100%;">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{ route('register') }}" class="btn btn-secondary">Tambah Data <i class="fa fa-plus-square"></i></a>
                </div>
            </div>

            <div class="card-body">
              <table id="myTable" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    {{-- <tbody>
                      @foreach ($dtpengawasan as $item)
                        <tr>
                            <td>{{ $item->kabupaten }}</td>
                            <td>{{ $item->kapanewon }}</td>
                            <td>{{ $item->kelurahan }}</td>
                            <td>{{ $item->tahun_pengawasan }}</td>
                            <td>{{ $item->nomor_sk }}</td>
                            <td>{{ $item->tanggal_sk }}</td>
                            <td>{{ $item->bentuk_pemanfaatan }}</td>
                            <td>{{ $item->pengelola }}</td>
                            <td>{{ $item->persil_klas }}</td>
                            <td>{{ $item->nomor_sertifikat }}</td>
                            <td>{{ $item->luas_pemanfaatan }}</td>
                            <td>{{ $item->luas_keseluruhan }}</td>
                            <td>{{ $item->jumlah_bidang }}</td>
                            <td>{{ $item->lokasi}}</td>
                            <td>{{ $item->koordinat }}</td>
                            <td>{{ $item->jktwaktu }}</td>
                            <td>{{ $item->jenis_sk }}</td>
                            <td>{{ $item->tdklanjut}}</td>
                            <td>{{ $item->kesesuaian }}</td>
                            <td>
                              <a href="{{ url('edit-pengawasan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                              <a href="{{ url('delete-pengawasan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                        </tr>
                        @endforeach
                    </tbody> --}}
                </table>
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
{{-- @include('tamplate.script') --}}
</body>
</html>

</body>
</html>