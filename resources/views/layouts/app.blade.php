<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengarsipan P5 | Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/e6cac57b1a.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white">
              <div class="row">
                <div class="col-2">
                  <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo Dinas" class="brand-image img-circle elevation-3">
                </div>
                <div class="col-10">
                  <h2 class="fs-4 ml-2 mt-1">DISPERTARU</h2>
                </div>
              </div>
              
            </a>
            <hr>
            <ul class="nav nav-pills flex-column">
              <li class="nav-item mb-3">
                <a href="{{ route('home') }}" class="nav-link text-white" aria-current="page"><i class="fa-solid fa-house"></i>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="{{ route('tabel_izin') }}" class="nav-link text-white mb-3"><i class="fa-solid fa-eye"></i>
                  Permohonan Izin
                </a>
              </li>
              <li>
                <a href="{{ route('tabel') }}" class="nav-link text-white mb-3"><i class="fa-solid fa-landmark"></i>
                  Pemanfaatan
                </a>
              </li>
              <li>
                <a href="{{ route('Data-Pengawasan') }}" class="nav-link text-white mb-3"><i class="fa-solid fa-eye"></i>
                  Pengawasan
                </a>
              </li>

              {{-- <li>
                <a href="{{ route('masteradmin') }}" class="nav-link text-white mb-3"><i class="fa-solid fa-user"></i>
                  Admin
                </a>
              </li> --}}
            </ul>
            <hr>
        </div>
      
        <div class="content-wrapper">
            
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <div class="d-flex ms-auto">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-custom d-flex"><i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
              </div>
            </div>
          </nav>
        
            @yield('content')

        </div>
        </div> 
        {{-- <h4>Selamat Datang <b>{{ Auth::user()->username }}</b>, Anda Login sebagai <b>{{ Auth::user()->role}}</b></h4> --}}
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </body>
        </html>
      
</body>
</html>



