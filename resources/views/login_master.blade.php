@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>

  <style>
    .card {
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        margin-bottom: 200px;
        margin-left: 50vh;
        background-color: #A0522D;
        color: aliceblue;
    }
  </style>

<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
    <div class="container"><br>
        <div class="card col-md-4 col-md-offset-4 mt-4" style="display:block; font-family:serif">
            <h4 class="text-center"><br>Login <br> Master Admin</h4>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('master') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-block mt-4" style="background-color: #f6996f">Log In</button>
                <hr>
                {{-- <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p> --}}
            </form>
        </div>
    </div>
</div>
  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{{-- @include('tamplate.script') --}}
</body>
</html>
@endsection