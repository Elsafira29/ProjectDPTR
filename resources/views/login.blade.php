<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengarsipan Pertanahan DPTR</title>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>

    .container-fluid h3{
        color: azure;
        margin-left: 20px;
        margin-top: 10px;
        font-family: serif;
    }

    .container {
        display: flex;
        justify-content: center;
        background-image: url("{{ asset('assets/img/peta.png') }}");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }

    #badan {
        background-color: #A0522D;
        opacity: 0.9;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        border-radius: 25px;

    }

    .btn {
        background-color:#FCAB64;
        display:block; 
        margin:auto;
        opacity: 1
    }
    

    .card h4 {
        color: aliceblue;
        font-family: serif;
    }

    .form-group {
       color: aliceblue
    }

    body{
        background-image: url("{{ asset('assets/img/peta.png') }}");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }

    @media(max-width:500px) {
  .navbar-brand h3 {
    font-size: 13px;
    margin-top:20px;
  }
}
</style>
<body>
  
  <!-- As a heading -->
  <nav class="navbar navbar-expand-lg" style="background-color: #A0522D">
    <div class="container-fluid">
        <a class="navbar-brand d-flex" href="#">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="50" height="60" class="d-inline-block align-text-top">
            <h3>PENGARSIPAN BIDANG P5 DISPERTARU DIY</h3>
          </a>
    </div>
  </nav>
    
    <div class="container"><br>
        <div class="card col-md-4 col-md-offset-4" style="margin-top: 60px " id="badan">
            <h4 class="text-center"><br>Login Akun</h4>
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="67" height="80" style="display:block; margin:auto;" class="d-flex d-inline-block align-text-top text-center">
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group mb-2">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <hr>
                <button type="submit" class="btn btn-block mt-3">Log In</button>
                {{-- <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p>  --}}
            </form>
        </div>
    </div>

   
    
</body>
</html>