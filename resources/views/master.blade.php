@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
</head>
<body>
<html lang="en">
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <div class="content-wrapper">
    <div class="content" style="margin:5vh">
        <div class="card card-info card-outline" style="width: 100%;margin-bottom: 100%">
            <div class="card-header">
              <h2 class="m-0">Data Admin</h2>
            </div>
            <div class="card-tools mt-3 mb-3" style="margin-left: 15px;margin-right:2px">
              <a href="{{ route('register') }}" class="btn btn-secondary">Tambah Data <i class="fa fa-plus-square"></i></a>
          </div>


        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{{-- @include('tamplate.script') --}}
</body>
</html>
@endsection