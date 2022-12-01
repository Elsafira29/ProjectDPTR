
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
