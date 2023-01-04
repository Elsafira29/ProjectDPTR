@extends('layouts.app')

@section('content')
    
<!DOCTYPE html>
<html lang="en">
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <div class="pull-right">
      <a href="{{ url('Data-Pengawasan') }}">
        <button type="back" class="btn btn-primary my-3 mx-3" style="background-color: brown"><i class="fa-solid fa-circle-arrow-left"></i></i>Back</button>
      </a>
    </div>
    <div class="content" style="margin: 2vh; margin-left:25vh; width:110vh; margin-right:23vh">
      <div class="card catd-info card-outline">
      <div class="card-header">
        <h3>Detail Data Pengawasan</h3>
      </div>
        <div class="card-body table-responsive mt-4">
          <div class="row">
            <div class="col-md-8 offset-md-2">

              <table class="table table-bordered">
                <tbody>
                  @foreach ($Pengawasan as $item)
                  <tr>
                    <th>Kabupaten</th>
                    <td>{{ $item->kabupaten }}</td>
                  </tr>
                  <tr>
                    <th>Kapanewon</th>
                    <td>{{ $item->kapanewon }}</td>
                  </tr>
                  <tr>
                    <th>Kalurahan</th>
                    <td>{{ $item->kelurahan }}</td>
                  </tr>
                  <tr>
                    <th>Tahun Pengawasan</th>
                    <td>{{ $item->tahun_pengawasan }}</td>
                  </tr>
                  <tr>
                    <th>Nomor SK</th>
                    <td>{{ $item->nomor_sk }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal SK</th>
                    <td>{{ $item->tanggal_sk }}</td>
                  </tr>
                  <tr>
                    <th>Bentuk Pemanfaatan</th>
                    <td>{{ $item->bentuk_pemanfaatan }}</td>
                  </tr>
                  <tr>
                    <th>Pengelola</th>
                    <td>{{ $item->pengelola }}</td>
                  </tr>
                  <tr>
                    <th>Persil Klas</th>
                    <td>{{ $item->persil_klas }}</td>
                  </tr>
                  <tr>
                    <th>Nomor Sertifikat</th>
                    <td>{{ $item->nomor_sertifikat }}</td>
                  </tr>
                  <tr>
                    <th>Luas Pemanfaatan</th>
                    <td>{{ $item->luas_pemanfaatan }}</td>
                  </tr>
                  <tr>
                    <th>Luas Keseluruhan</th>
                    <td>{{ $item->luas_keseluruhan }}</td>
                  </tr>
                  <tr>
                    <th>Jumlah Bidang</th>
                    <td>{{ $item->jumlah_bidang }}</td>
                  </tr>
                  <tr>
                    <th>Lokasi</th>
                    <td>{{ $item->lokasi}}</td>
                  </tr>
                  <tr>
                    <th>Koordinat</th>
                    <td>{{ $item->koordinat }}</td>
                  </tr>
                  <tr>
                    <th>Jangka Waktu</th>
                    <td>{{ $item->jktwaktu }}</td>
                  </tr>
                  <tr>
                    <th>Jenis Sk</th>
                    <td>{{ $item->jenis_sk }}</td>
                  </tr>
                  <tr>
                    <th>Tinda Lanjut</th>
                    <td>{{ $item->tdklanjut}}</td>
                  </tr>
                  <tr>
                    <th>Kesesuaian</th>
                    <td>{{ $item->kesesuaian }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
           
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>
        </div>
      </div>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark"> --}}
    <!-- Control sidebar content goes here -->
    {{-- <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="cart-tools">
                    <a href="#" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
  </aside> --}}
  <!-- /.control-sidebar -->

  @include('tamplate.script')

</body>
</html>
@endsection