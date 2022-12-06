@extends('layouts.app')

@section('content')

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

            </div><!-- /.col -->
            {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col --> --}}
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content" style="margin:5vh">
        <div class="card card-info card-outline" style="width: 100%;">
          <div class="card-header" style="background-color: #c47b59">
            <h2 class="m-0">Arsip Pemanfaatan</h2>
          </div>

          <div class="row mt-4" style="margin-left: 5px;margin-right:2px">
            <div class="col">
              <div class="card-tools">
                <a href="{{ route('form-dpemanfaatan') }}" class="btn btn-dark">Tambah Data <i class="fa fa-plus-square"></i></a>
              </div>
            </div>
            <div class="col">
              <div style="display: flex; justify-content:end">
                <select id="kabupaten">
                  <option value="">Pilih Kabupaten</option>
                </select>
                <select id='kecamatan'>
                  <option value=''>Pilih Kecamatan</option>
                </select>
                <select id='kelurahan'>
                  <option value=''>Pilih Kalurahan</option>
                </select>
              </div>
            </div>
          </div>
          <!--main content paling utama-->
          <div class="card-body" style="font-size:12px;">
            <table id="myTable" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Perizinan</th>
                  <th>Desa Kecamatan</th>
                  <th>Kabupaten</th>
                  <th>Kalurahan</th>
                  <th>Luas</th>
                  <th>Uraian</th>
                  <th>sertifikat</th>
                  <th>Tanggal Mlai</th>
                  <th>Tanggal Akhir</th>
                  <th>File SK</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody id="table">
                @foreach ($dtpemanfaatan as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->kode_perizinan }}</td>
                  <td>{{ $item->desa_kecamatan }}</td>
                  <td>{{ $item->kabupaten }}</td>
                  <td>{{ $item->kelurahan }}</td>
                  <td>{{ $item->persil }}</td>
                  <td>{{ $item->luas }}</td>
                  <td>{{ $item->uraian }}</td>
                  <td>{{ $item->tanggal_mulai }}</td>
                  <td>{{ $item->tanggal_akhir }}</td>
                  {{-- <td><img width="150px" src="{{ url('') }}" alt=""></td> --}}
                  {{-- <td>{{ $item->file_SK }}</td> --}}
                  <td>
                    @foreach($item->files as $file)
                    <a href="{{ asset('files/'.$file->filename) }}">file {{ $loop->index + 1 }}</a>
                    @endforeach
                  </td>

                  {{-- <a href="{{ asset('img/'. $item->gambar) }}" target="_blank" rel="noopener noreferrer">lihat gambar</a> --}}
                  {{-- <img src="cover/{{ $item->file_SK }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""> --}}
                  {{-- <img src="{{ asset('img/'.$item->file_SK) }}" class="img-responsive" height="10%" width="50%" alt="" srcset=""> --}}

                  <td>
                    <a href="{{ url('edit-pemanfaatan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                    <a href="{{ url('hapus-pemanfaatan',$item->id) }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i class="fas fa-trash-alt bg-dancer"></i></a>
                    @csrf
                  </td>
                </tr>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Select2 JS -->
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
      {{-- @include('tamplate.footer') --}}
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  @include('tamplate.script')
  <script>
    // fetch omset, keuntungan, omset, dan total penjualan
    $(document).ready(function() {
      let kabupaten = $("#kabupaten");
      let kecamatan = $('#kecamatan')
      let kelurahan = $('#kelurahan')
      kelurahan.select2();
      kecamatan.select2();
      kabupaten.select2();

      kabupaten.on('select2:select', (e) => {

        // fetch selected kabupaten
        $.ajax({
          url: "{{route('api.pemanfaatan.search')}}",
          type: "GET",
          data: {
            kabupaten: e.target.value
          },
          success: function(data) {
            $('#table').empty()
            data.forEach(item => {
              $('#table').append(`
                <tr>
                  <td>${item.id}</td>
                  <td>${item.kode_perizinan}</td>
                  <td>${item.desa_kecamatan}</td>
                  <td>${item.kabupaten}</td>
                  <td>${item.kelurahan}</td>
                  <td>${item.persil}</td>
                  <td>${item.luas}</td>
                  <td>${item.uraian}</td>
                  <td>${item.tanggal_mulai}</td>
                  <td>${item.tanggal_akhir}</td>
                  <td>${item.file_sk}</td>
                  <td>
                              <a href="{{ url('edit-pemanfaatan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                              <a href="{{ url('hapus-pemanfaatan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                </tr>`)
            })

          },
        })

        // fetch list kecamatan
        $.ajax({
          url: "{{route('api.pemanfaatan.kecamatan')}}",
          type: "GET",
          data: {
            kabupaten: e.target.value
          },
          success: function(data) {
            // console.log("memanggil kecamatan")
            // console.log("e", e.target.value)
            // console.log('data', data)
            data.map(it => {
              var newOption = new Option(it.desa_kecamatan, it.desa_kecamatan, false, false);
              $('#kecamatan').append(newOption);
            })

          },
        })
      })

      kecamatan.on('select2:select', (e) => {
        $.ajax({
          url: "{{route('api.pemanfaatan.kelurahan')}}",
          type: "GET",
          data: {
            kecamatan: e.target.value,
            kabupaten: $("#kabupaten").val()
          },
          success: function(data) {
            console.log("dataaa", data)
            data.map(it => {
              var newOption = new Option(it.kelurahan, it.kelurahan, false, false);
              $('#kelurahan').append(newOption);
            })

          },
        })
        $.ajax({
          url: "{{route('api.pemanfaatan.search')}}",
          type: "GET",
          data: {
            desa_kecamatan: e.target.value,
            kabupaten: $("#kabupaten").val()
          },
          success: function(data) {
            $('#table').empty()
            kecamatan.empty()
            // console.log("e", e.target.value)
            // console.log('data', data)
            data.forEach(item => {
              $('#table').append(`
                <tr>
                  <td>${item.id}</td>
                  <td>${item.kode_perizinan}</td>
                  <td>${item.desa_kecamatan}</td>
                  <td>${item.kabupaten}</td>
                  <td>${item.kelurahan}</td>
                  <td>${item.persil}</td>
                  <td>${item.luas}</td>
                  <td>${item.uraian}</td>
                  <td>${item.tanggal_mulai}</td>
                  <td>${item.tanggal_akhir}</td>
                  <td>${item.file_sk}</td>
                  <td>
                              <a href="{{ url('edit-pemanfaatan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                              <a href="{{ url('hapus-pemanfaatan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                </tr>`)
            })

          },
          error: function(data) {
            let alert = $('div[role="alert"]')
            alert.addClass('alert alert-danger alert-dismissible')
            alert.html(JSON.stringify(data.responseJSON.message))
            alert.show()
          }
        })
      })

      // fetch list kelurahan
      kelurahan.on('select2:select', (e) => {
        // console.log('hereeeeeee', $("#kabupaten").val(), e.target.value)
        $.ajax({
          url: "{{route('api.pemanfaatan.search')}}",
          type: "GET",
          data: {
            kelurahan: e.target.value,
            kabupaten: $("#kabupaten").val()
          },
          success: function(data) {
            $('#table').empty()
            kelurahan.empty()
            // console.log("e", e.target.value)
            // console.log('data', data)
            data.forEach(item => {
              $('#table').append(`
                <tr>
                  <td>${item.id}</td>
                  <td>${item.kode_perizinan}</td>
                  <td>${item.desa_kecamatan}</td>
                  <td>${item.kabupaten}</td>
                  <td>${item.kelurahan}</td>
                  <td>${item.persil}</td>
                  <td>${item.luas}</td>
                  <td>${item.uraian}</td>
                  <td>${item.tanggal_mulai}</td>
                  <td>${item.tanggal_akhir}</td>
                  <td>${item.file_sk}</td>
                  <td>
                              <a href="{{ url('edit-pemanfaatan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                              <a href="{{ url('hapus-pemanfaatan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                </tr>`)
            })
          },
          error: function(data) {
            let alert = $('div[role="alert"]')
            alert.addClass('alert alert-danger alert-dismissible')
            alert.html(JSON.stringify(data.responseJSON.message))
            alert.show()
          }
        })
      })
      $.ajax({
        url: "{{route('api.pemanfaatan.kabupaten')}}",
        type: "GET",
        success: function(data) {
          // console.log('data', data)
          data.map(it => {
            var newOption = new Option(it.kabupaten, it.kabupaten, false, false);
            $('#kabupaten').append(newOption).trigger('change');
          })

        },
        error: function(data) {
          let alert = $('div[role="alert"]')
          alert.addClass('alert alert-danger alert-dismissible')
          alert.html(JSON.stringify(data.responseJSON.message))
          alert.show()
        }
      })
    })
  </script>
</body>

</html>
@endsection