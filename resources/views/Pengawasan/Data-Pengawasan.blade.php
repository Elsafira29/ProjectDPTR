
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
  @include('tamplate.head')
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
 @include('tamplate.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('tamplate.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengawasan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline" style="width: 130rem;">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{ route('Create-Pengawasan') }}" class="btn btn-secondary">Tambah Data <i class="fa fa-plus-square"></i></a>
                </div>
            </div>
             <!-- end filter data-->
              <div style="display: flex;">
                <select id="kabupaten">
                  <option value="">Pilih Kabupaten</option>
                </select>
                <select id='kapanewon'>
                  <option value=''>Pilih Kapanewon</option>
                </select>
                <select id='kelurahan'>
                  <option value=''>Pilih Kalurahan</option>
                </select>
              </div>
               <!--main content paling utama-->
            <div class="card-body">
              <table id="myTable" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kabupaten</th>
                            <th>Kapanewon</th>
                            <th>Kalurahan</th>
                            <th>Tahun Pengawasan</th>
                            <th>Nomor SK</th>
                            <th>Tanggal SK</th>
                            <th>Bentuk Pemanfaatan</th>
                            <th>Pengelola</th>
                            <th>Persil Klas</th>
                            <th>Nomor Sertifikat</th>
                            <th>Luas Pemanfaatan</th>
                            <th>Luas Keseluruhan</th>
                            <th>Jumlah Bidang</th>
                            <th>Lokasi</th>
                            <th>Koordinat</th>
                            <th>Jangka Waktu</th>
                            <th>Jenis Sk</th>
                            <th>Tinda Lanjut</th>
                            <th>Kesesuaian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="table">
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
    @include('tamplate.footer')
   </footer>
</div>
  <!-- Select2 JS --> 
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
      @include('tamplate.footer')
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
    let kapanewon = $('#kapanewon')
    let kelurahan= $('#kelurahan')
    kelurahan.select2();
    kapanewon.select2();
    kabupaten.select2();

    kabupaten.on('select2:select', (e) => {
          
          // fetch selected kabupaten
          $.ajax({
            url: "{{route('api.pengawasan.search')}}",
            type: "GET",
            data: {
              kabupaten: e.target.value
            },
            success: function(data) {
              $('#table').empty()
              data.forEach(item => {
                $('#table').append(`
                <tr>
                  <td>${item.kabupaten}</td>
                  <td>${item.kapanewon}</td>
                  <td>${item.kelurahan}</td>
                  <td>${item.tahun_pengawasan}</td>
                  <td>${item.nomor_sk}</td>
                  <td>${item.tanggal_sk}</td>
                  <td>${item.bentuk_pemanfaatan}</td>
                  <td>${item.pengelola}</td>
                  <td>${item.persil_klas}</td>
                  <td>${item.nomor_sertifikat}</td>
                  <td>${item.luas_pemanfaatan}</td>
                  <td>${item.luas_keseluruhan}</td>
                  <td>${item.jumlah_bidang}</td>
                  <td>${item.lokasi}</td>
                  <td>${item.koordinat}</td>
                  <td>${item.jktwaktu}</td>
                  <td>${item.jenis_sk}</td>
                  <td>${item.tdklanjut}</td>
                  <td>${item.kesesuaian}</td>
                  <td>
                     <a href="{{ url('edit-pengawasan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                     <a href="{{ url('delete-pengawasan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>`)                        
              })
                                        
              },
          })

          // fetch list kepanewon
          $.ajax({
            url: "{{route('api.pengawasan.kapanewon')}}",
            type: "GET",
            data: {
              kabupaten: e.target.value
            },
            success: function(data) {
              // console.log("memanggil kapanewon")
              // console.log("e", e.target.value)
              // console.log('data', data)
              data.map(it => {
                var newOption = new Option(it.kapanewon, it.kapanewon, false, false);
                $('#kapanewon').append(newOption);
              })
                                        
              },
          })
    })

   kapanewon.on('select2:select', (e) => {
    // console.log('hereeeeeee', $("#kabupaten").val(), e.target.value)
    $.ajax({
            url: "{{route('api.pengawasan.kelurahan')}}",
            type: "GET",
            data: {
             kapanewon: e.target.value, kabupaten:$("#kabupaten").val()
            },
            success: function(data) {
              // console.log("memanggil kelurahan")
              // console.log("e", e.target.value)
              // console.log('data', data)
              console.log("dataaa", data)
              data.map(it => {
                var newOption = new Option(it.kelurahan, it.kelurahan, false, false);
                $('#kelurahan').append(newOption);
              })
                                        
              },
          })
          $.ajax({
            url: "{{route('api.pengawasan.search')}}",
            type: "GET",
            data: {
             kapanewon: e.target.value,
              kabupaten: $("#kabupaten").val()
            },
            success: function(data) {
              $('#table').empty()
              kapanewon.empty()
              // console.log("e", e.target.value)
              // console.log('data', data)
              data.forEach(item => {
                $('#table').append(`
                <tr>
                  <td>${item.kabupaten}</td>
                  <td>${item.kapanewon}</td>
                  <td>${item.kelurahan}</td>
                  <td>${item.tahun_pengawasan}</td>
                  <td>${item.nomor_sk}</td>
                  <td>${item.tanggal_sk}</td>
                  <td>${item.bentuk_pemanfaatan}</td>
                  <td>${item.pengelola}</td>
                  <td>${item.persil_klas}</td>
                  <td>${item.nomor_sertifikat}</td>
                  <td>${item.luas_pemanfaatan}</td>
                  <td>${item.luas_keseluruhan}</td>
                  <td>${item.jumlah_bidang}</td>
                  <td>${item.lokasi}</td>
                  <td>${item.koordinat}</td>
                  <td>${item.jktwaktu}</td>
                  <td>${item.jenis_sk}</td>
                  <td>${item.tdklanjut}</td>
                  <td>${item.kesesuaian}</td>
                  <td>
                     <a href="{{ url('edit-pengawasan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                     <a href="{{ url('delete-pengawasan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt"></i></a>
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
            url: "{{route('api.pengawasan.search')}}",
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
                  <td>${item.kabupaten}</td>
                  <td>${item.kapanewon}</td>
                  <td>${item.kelurahan}</td>
                  <td>${item.tahun_pengawasan}</td>
                  <td>${item.nomor_sk}</td>
                  <td>${item.tanggal_sk}</td>
                  <td>${item.bentuk_pemanfaatan}</td>
                  <td>${item.pengelola}</td>
                  <td>${item.persil_klas}</td>
                  <td>${item.nomor_sertifikat}</td>
                  <td>${item.luas_pemanfaatan}</td>
                  <td>${item.luas_keseluruhan}</td>
                  <td>${item.jumlah_bidang}</td>
                  <td>${item.lokasi}</td>
                  <td>${item.koordinat}</td>
                  <td>${item.jktwaktu}</td>
                  <td>${item.jenis_sk}</td>
                  <td>${item.tdklanjut}</td>
                  <td>${item.kesesuaian}</td>
                  <td>
                     <a href="{{ url('edit-pengawasan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                     <a href="{{ url('delete-pengawasan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt"></i></a>
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
        url: "{{route('api.pengawasan.kabupaten')}}",
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
