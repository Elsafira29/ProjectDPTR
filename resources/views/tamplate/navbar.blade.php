<style>
    .navbar-light {
    background-color: #A0522D;
    }
</style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="color:#A0522D;width:200%">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link" style="color: white">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <form action="/logout" method="POST">
          @csrf
          <button class="btn btn-danger" >Logout</button>
      </form>
      </li>
    </ul>
  </nav>
