<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengarsipan P5 DPTR</title>
    <script src="https://kit.fontawesome.com/b1ea2b304c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .container-fluid h3{
        color: azure;
        margin-left: 20px;
        margin-top: 10px;
        font-family: serif;
    }

    .carousel-item {
    height: 500px;
}
.carousel-item img {
    margin-top: -100px;
    filter: brightness(70%);
}

</style>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #A0522D">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="#">
                <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="50" height="60" class="d-inline-block align-text-top">
                <h3>PENGARSIPAN BIDANG P5 DISPERTARU DIY</h3>
              </a>
            
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="#">Pengawasan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Pemanfaatan</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="{{ route('login_admin') }}">Login</a>
                </li>
                </li>
              </ul>
          </form>
        </div>
      </nav>
      <Main>
        <!--Carousel Scroll-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/img/gambar1.jpg') }}" class="d-block w-100" alt="...">
              <div class="container">
                {{-- <div class="carousel-caption text-end">
                  <center><a id="buttonmkn" class="btn btn-success btn-secondary btn-warning" href="#bawah">Yuk Kulineran
                      &raquo;</a>
                </div> --}}
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/gambar2.jpg') }}" class="d-block w-100" alt="...">
              <div class="container col">
                {{-- <div class="carousel-caption text-end ">
                  <center><a id="buttonmkn" class="btn btn-success btn-secondary btn-warning" href="#bawah">Yuk Kulineran
                      &raquo;</a>
                </div> --}}
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/gambar3.jpeg') }}" class="d-block w-100" alt="...">
              <div class="container">
                {{-- <div class="carousel-caption text-end">
                  <center><a id="buttonmkn" class="btn btn-success btn-secondary btn-warning" href="#bawah">Yuk Kulineran
                      &raquo;</a>
                </div> --}}
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!--End Carousel Scroll-->
       
        <a href="{{ route('userpemanfaatan') }}" class="btn btn-warning">Pemanfaatan</a>

<!--End About-->
          <Main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>