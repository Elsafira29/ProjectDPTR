@extends('layouts.app')

@section('content')
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
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <div class="content-wrapper">
    <div class="container" style="margin-bottom: 17%"><br>
        <div class="card col-md-6 col-md-offset-3" style="display:block; margin:auto; padding:3%">
            <h2 class="text-center">Tambah Admin</h3>
            <hr>
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <form action="{{route('actionregister')}}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control" value="Admin" readonly>
                </div>
                <button type="submit" class="btn btn-block mt-3" style="background-color:#f6996f">Register</button>
                <hr>
            </form>
        </div>
    </div>
</div>
  
</body>
</html>
@endsection