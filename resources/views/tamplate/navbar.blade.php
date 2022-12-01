<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .navbar-light {
    background-color: #A0522D;
    }
</style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="color:#A0522D;width:80%">
    <!-- Left navbar links -->
    <ul class="navbar-nav d-flex">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link" style="color: rgb(255, 255, 255)">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <form action="/logout" method="POST">
          @csrf
          <button class="btn btn-custom d-flex" style="margin-left:800%; background-color:#FFB38F;"><i class="bi bi-box-arrow-right"></i>Logout</button>
      </form>
      </li>
    </ul>
  </nav>
