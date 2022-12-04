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
          <a href="{{ route('home') }}" class="nav-link text-white" aria-current="page">
            Dashboard
          </a>
        </li>
        <li>
          <a href="{{ route('tabel') }}" class="nav-link text-white">
            Pemanfaatan
          </a>
        </li>
        <li>
          <a href="{{ route('Data-Pengawasan') }}" class="nav-link text-white">
            Pengawasan
          </a>
        </li>
        <li>
          <a href="{{ route('masteradmin') }}" class="nav-link text-white">
            Admin
          </a>
        </li>
      </ul>
      <hr>
  </div>

  <div class="content-wrapper" style="width: 200%;"">
      
    <nav class="navbar navbar-light" style="background-color:#A0522D; width:135%">
      <div class="container-fluid">
        <a class="navbar-brand text-light">Home</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
  
  </div>
  </div> 
  {{-- <h4>Selamat Datang <b>{{ Auth::user()->username }}</b>, Anda Login sebagai <b>{{ Auth::user()->role}}</b></h4> --}}
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
  </html>
