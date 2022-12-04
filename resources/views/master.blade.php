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
            <div class="card-tools mt-3" style="margin-left: 15px;margin-right:2px">
              <a href="{{ route('register') }}" class="btn btn-secondary">Tambah Data <i class="fa fa-plus-square"></i></a>
          </div>

            <div class="card-body">
              <table id="myTable" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    {{-- <tbody>
                      @foreach ($dtpengawasan as $item)
                        <tr>
                            <td>{{ $item->kabupaten }}</td>
                            <td>{{ $item->kapanewon }}</td>
                            <td>{{ $item->kelurahan }}</td>
                            <td>{{ $item->tahun_pengawasan }}</td>
                            <td>{{ $item->nomor_sk }}</td>
                            <td>{{ $item->tanggal_sk }}</td>
                            <td>{{ $item->bentuk_pemanfaatan }}</td>
                            <td>{{ $item->pengelola }}</td>
                            <td>{{ $item->persil_klas }}</td>
                            <td>{{ $item->nomor_sertifikat }}</td>
                            <td>{{ $item->luas_pemanfaatan }}</td>
                            <td>{{ $item->luas_keseluruhan }}</td>
                            <td>{{ $item->jumlah_bidang }}</td>
                            <td>{{ $item->lokasi}}</td>
                            <td>{{ $item->koordinat }}</td>
                            <td>{{ $item->jktwaktu }}</td>
                            <td>{{ $item->jenis_sk }}</td>
                            <td>{{ $item->tdklanjut}}</td>
                            <td>{{ $item->kesesuaian }}</td>
                            <td>
                              <a href="{{ url('edit-pengawasan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                              <a href="{{ url('delete-pengawasan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                        </tr>
                        @endforeach
                    </tbody> --}}
                </table>
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