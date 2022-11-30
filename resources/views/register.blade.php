<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>


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
 <div class="content-wrapper">
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3" style="display:block; margin:auto">
            <h2 class="text-center">FORM REGISTER</h3>
            <hr>
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <form action="{{route('actionregister')}}" method="post">
            @csrf
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-address-book"></i> Role</label>
                    <input type="text" name="role" class="form-control" value="Admin" readonly>
                </div>
                <button type="submit" class="btn btn-block" style="background-color:#f6996f"><i class="fa fa-user"></i> Register</button>
                <hr>
            </form>
        </div>
    </div>
</div>
    <footer class="main-footer">
        @include('tamplate.footer')
       </footer>
    
</body>
</html>