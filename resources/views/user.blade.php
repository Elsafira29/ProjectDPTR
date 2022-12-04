<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="background-color:#A0522D;width: 280px; height: 100vh">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <div class="row">
            <div class="col-2">
              <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo Dinas" class="brand-image img-circle elevation-3" style="height:40px;width:35px;margin-right:50px;">
            </div>
            <div class="col-10">
              <h2 class="fs-4 ml-4 mt-1">DISPERTARU</h2>
            </div>
          </div>
          
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link text-white" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Pemanfaatan
            </a>
          </li>
          <li>
            <a href="{{ route('actionlogin') }}" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Pengawasan
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              Admin
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
    </div>
    <div class="content-wrapper" style="width: 200%;"">
      
      <nav class="navbar navbar-light" style="background-color:#A0522D; width:135%">
        <div class="container-fluid">
          <a class="navbar-brand">Home</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <div class="card card-body mt-4" style="background-color: rgb(255, 255, 255); margin-left:1%; width:130%">
        <table class="table table-striped" style="width:100%;right:20%;font-size:15px">
          <thead>
              <tr>
                  <th>Kabupaten</th>
                  <th>Kapanewon</th>
                  <th>Kalurahan</th>
                  <th>Tahun Pengawasan</th>
                  <th>Nomor SK</th>
                  <th>Tanggal SK</th>
                  <th>Bentuk Pemanfaatan</th>
                  <th>Pengelola</th>
                  <th>Persil Klas</th>
                  <th>Nomor Sertifikat</th>
                  <th>Luas Pemanfaatan</th>
                  <th>Luas Keseluruhan</th>
                  <th>Jumlah Bidang</th>
                  <th>Lokasi</th>
                  <th>Koordinat</th>
                  <th>Jangka Waktu</th>
                  <th>Jenis Sk</th>
                  <th>Tinda Lanjut</th>
                  <th>Kesesuaian</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          </table>
      </div>
      


       

    </div>
  </div> 
    {{-- <h4>Selamat Datang <b>{{ Auth::user()->username }}</b>, Anda Login sebagai <b>{{ Auth::user()->role}}</b></h4> --}}
</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>