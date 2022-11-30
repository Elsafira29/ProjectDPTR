<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengarsipan P5 DPTR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .container-fluid h3{
        color: azure;
        margin-left: 20px;
        margin-top: 10px;
        font-family: serif;
    }

    .carousel-item {
    height: 500px;
}
.carousel-item img {
    margin-top: -100px;
    filter: brightness(50%);
}


</style>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #A0522D">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="#">
                <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="50" height="60" class="d-inline-block align-text-top">
                <h3>PENGARSIPAN BIDANG P5 DISPERTARU DIY</h3>
              </a>
            
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="#" &raquo;>Pengawasan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#awasi" &raquo;>Pemanfaatan</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="{{ route('login_admin') }}">Login</a>
                </li>
                </li>
              </ul>
          </form>
        </div>
      </nav>
      <Main>
        <!--Carousel Scroll-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
              aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/img/gambar1.jpg') }}" class="d-block w-100" alt="...">
              <div class="container">
                <div class="carousel-caption text-center">
                  <h1>Dinas Pertanahan dan Tata Ruang DIY</h1>
                  <p>Dinas Pertanahan dan Tata Ruang (Kundha Niti Mandala Sarta Tata Sasana) Daerah Istimewa Yogyakarta mempunyai tugas membantu Gubernur menyelenggarakan urusan pemerintahan dan urusan keistimewaan bidang tata ruang serta urusan pemerintahan dan urusan keistimewaan bidang pertanahan.</p>
                  <br>
                  <center><a id="#" class="btn btn-success btn-secondary btn-warning" href="#awasi">Cek Arsip
                      &raquo;</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/gambar2.jpg') }}" class="d-block w-100" alt="...">
              <div class="container">
                <div class="carousel-caption text-center">
                  <h1>Bidang P5</h1>
                  <p>“Bidang Pemanfaatan, Penanganan Permasalahan, dan Pengawasan Pertanahan mempunyai tugas melaksanakan fasilitasi pemanfaatan, penanganan permasalahan dan pengawasan pertanahan untuk meningkatkan persentase desa yang sudah mempunyai Peraturan Desa tentang Pemanfaatan Tanah Desa.</p>
                  <br>
                  <center><a id="" class="btn btn-success btn-secondary btn-warning" href="#awasi">Cek Arsip
                      &raquo;</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/gambar3.jpeg') }}" class="d-block w-100" alt="...">
              <div class="container">
                <div class="carousel-caption text-center">
                  <h1>VISI</h1>
                  <p>"Terwujudnya Peningkatan Kemuliaan Martabat Manusia Jogja"</p>
                  <br>
                  <center><a id="" class="btn btn-success btn-secondary btn-warning" href="#awasi">Cek Arsip
                      &raquo;</a>
                </div>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/gambar6.png') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!--End Carousel Scroll-->
      
<!--End About-->
          <Main>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
<!-- Select2 CSS --> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 

<!-- jQuery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<!-- Select2 JS --> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="mt-4">Pemanfaatan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content" style="margin: 50px">
        <div class="card card-info card-outline" style="width: 100% ;">
     <!-- end filter data-->
     {{-- <div style="display: flex;">
       <select id="kabupaten">
        <option value="">Pilih Kabupaten</option>
      </select>
      <select id='kecamatan'>
        <option value=''>Pilih Kecamatan</option>
      </select>
     </div> --}}
      <!--main content paling utama-->
            <div class="card-body" id="awasi">
              <table id="myTable" class="table table-striped" style="width:100%">
                    <thead >
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
                        </tr>
                    </thead>
{{-- 
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
                            {{-- <td><a href="{{ asset('files/'.$item->filename) }}">lihat file</a></td> --}}

                              {{-- <a href="{{ asset('img/'. $item->gambar) }}" target="_blank" rel="noopener noreferrer">lihat gambar</a> --}}
                              {{-- <img src="cover/{{ $item->file_SK }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""> --}}
                              {{-- <img src="{{ asset('img/'.$item->file_SK) }}" class="img-responsive" height="10%" width="50%" alt="" srcset=""> --}}

                            {{-- <td>
                              <a href="{{ url('edit-pemanfaatan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                              <a href="{{ url('hapus-pemanfaatan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                          </tr>
                        </tr> --}}
                        {{-- @endforeach
                    </tbody> --}} 
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
    @include('tamplate.footer')
   </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('tamplate.script')
{{-- <script>
  // fetch omset, keuntungan, omset, dan total penjualan
  $(document).ready(function() {
    let kabupaten = $("#kabupaten");
    let kecamatan = $('#kecamatan')
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
              console.log("memanggil kecamatan")
              console.log("e", e.target.value)
              console.log('data', data)
              data.map(it => {
                var newOption = new Option(it.desa_kecamatan, it.desa_kecamatan, false, false);
                $('#kecamatan').append(newOption);
              })
                                        
              },
          })
    })

    kecamatan.on('select2:select', (e) => {
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
              console.log("e", e.target.value)
              console.log('data', data)
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
          console.log('data', data)
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
</script> --}}
</body>
</html>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>