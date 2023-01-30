@extends('layouts.app')

@section('content')

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

            </div><!-- /.col -->
            {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col --> --}}
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content" style="margin:3vh">
        <div class="card card-info card-outline" style="width: 100%;">
          <div class="card-header" style="background-color: #c47b59">
            <h2 class="m-0">Arsip Permohonan Izin</h2>
          </div>

          <div class="row mt-4" style="margin-left: 5px;margin-right:2px">
            <div class="col">
              <div class="card-tools">
                <a href="{{ route('form_izin') }}" class="btn btn-dark">Tambah Data <i class="fa fa-plus-square"></i></a> 
              </div>
            </div>


    <!-- Content Wrapper. Contains page content -->
    <div class="card-body" style="font-size:12px;">
        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
              <thead >
                <tr>
                  <th rowspan="2">Surat Rekomendari Bupati</th>
                  <th rowspan="2">Desa</th>
                  <th rowspan="2">Tanggal Masuk</th>
                  <th rowspan="2">Tindak Lanjut</th>
                  <th rowspan="2">Pengembalian</th>
                  <th colspan="2">Rekomendasi Kasultanan/Kadipaten</th>
                  <th colspan="2">Rekomendasi Biro Hukum</th>
                  <th rowspan="2">Action</th>
                </tr>
                <tr>
                  <th>Proses</th>
                  <th>Jawaban Kasultanan/Kadipaten</th>
                  <th>Proses</th>
                  <th>SK GUB/JAWABAN</th>
                </tr>
              </thead>
              
              <tbody id="table">
                @foreach ($administrasi as $item)
                <tr>
                  {{-- <td>{{ $item->id }}</td> --}}
                  <td>{{ $item->surat_kemonbu }}</td>
                  <td>{{ $item->desa }}</td>
                  <td>{{ $item->tgl_masuk }}</td>
                  <td>{{ $item->tindak }}</td>
                  <td>{{ $item->pengembalian }}</td>
                  <td>{{ $item->proses_kasultanan }}</td>
                  <td>{{ $item->jawaban_kasultanan }}</td>
                  <td>{{ $item->proses_biro }}</td>
                  <td>{{ $item->jawaban_biro }}</td>
                  <td>
                    <a href="{{ url('edit',$item->id) }}"><i class="fas fa-edit"></i></a> |
                    <a href="{{ url('hapus',$item->id) }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i class="fas fa-trash-alt bg-dancer"></i></a>
                    @csrf
                  </td>
                </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Select2 JS -->
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
      {{-- @include('tamplate.footer') --}}
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  @include('tamplate.script')
</body>

</html>
@endsection