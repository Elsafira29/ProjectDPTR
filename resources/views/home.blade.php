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
            <h1 class="m-0">Pemanfaatan</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('actionlogout') }}">Log Out</a></li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6" >
              <!-- small box -->
              <div class="small-box bg-light" >
                <div class="inner" style="background-color: rgba(255, 179, 143, 1)">
                  <h3>{{ $pengawasan }}</h3>

                  <p>Pengawasan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer" style="background-color: rgba(242, 138, 89, 1)">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner" style="background-color: rgba(255, 179, 143, 1)">
                  <h3>{{ $pemanfaatan }}</h3>

                  <p>Pemanfaatan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer" style="background-color: rgba(242, 138, 89, 1)">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
           
          <div class="card-body" style="margin: 5%; background-color:rgb(255, 251, 251)">
            <h2 id="manfaat">Pemanfaatan</h2>
            <table id="myTables" class="table table-striped" style="width:100%">
                  <thead >
                      <tr>
                          <th>ID</th>
                          <th>Kode Perizinan</th>
                          <th>Desa Kecamatan</th>
                          <th>Kabupaten</th>
                          <th>Kalurahan</th>
                          <th>Luas</th>
                          <th>Uraian</th>
                          <th>sertifikat</th>
                          <th>Tanggal Mlai</th>
                          <th>Tanggal Akhir</th>
                          <th>File SK</th>
                      </tr>
                  </thead>
        
                  <tbody id="table">
                    @foreach ($dtpemanfaatan as $item)
                      <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->kode_perizinan }}</td>
                          <td>{{ $item->desa_kecamatan }}</td>
                          <td>{{ $item->kabupaten }}</td>
                          <td>{{ $item->kelurahan }}</td>
                          <td>{{ $item->persil }}</td>
                          <td>{{ $item->luas }}</td>
                          <td>{{ $item->uraian }}</td>
                          <td>{{ $item->tanggal_mulai }}</td>
                          <td>{{ $item->tanggal_akhir }}</td>
                          <td><a href="{{ asset('files/'.$item->filename) }}">lihat file</a></td>
                        </tr>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
          
          <div class="card-body" style="margin: 2%; background-color:rgb(255, 251, 251)">
            <h2 id="awasi">Pengawasan</h2>
            <table id="myTable" class="table table-striped" style="width:90%">
                  <thead>
                      <tr>
                        <th>Kapanewon</th> 
                        <th>Kalurahan</th> 
                        <th>Kabupaten</th>
                        <th>Tahun Pengawasan</th>  
                        <th>Nomor SK</th>  
                        <th>Bentuk Pemanfaatan</th>  
                        <th>Persil Klas</th>
                        <th>Jenis Sk</th>
                        <th>Tindak Lanjut</th>
                        <th>Kesesuaian</th>
                      </tr>
                  </thead>

                  <tbody id="table">
                    @foreach ($dtpengawasan as $item)
                      <tr>
                        <td>{{ $item->kapanewon }}</td>
                        <td>{{ $item->kelurahan }}</td>
                        <td>{{ $item->kabupaten }}</td>
                        <td>{{ $item->tahun_pengawasan }}</td>  
                        <td>{{ $item->nomor_sk }}</td>
                        <td>{{ $item->bentuk_pemanfaatan }}</td>
                        <td>{{ $item->persil_klas }}</td>
                        <td>{{ $item->jenis_sk }}</td>
                        <td>{{ $item->tdklanjut}}</td>
                        <td>{{ $item->kesesuaian }}</td>
                        </tr>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div> 
          <!-- /.content -->
          </div>
          
          </div>
          <!-- /.card -->
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
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
