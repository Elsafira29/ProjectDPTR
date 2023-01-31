@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    const charData = {!!json_encode($chartData, JSON_HEX_TAG)!!};
    console.log(charData, 'here')
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ...charData.map(it => [it.kabupaten, it.total_kabupaten])
    ]);

    var options = {
      title: 'Kabupaten chart Pemanfaatan'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    const charData = {!!json_encode($charData, JSON_HEX_TAG)!!};
    console.log(charData, 'here')
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ...charData.map(it => [it.kabupaten, it.total_kabupaten])
    ]);

    var options = {
      title: 'Kabupaten chart Pengawasan'
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));

    chart.draw(data, options);
  }
</script>
<div class="content-wrapper">
  <div class="flex-container">
    <div class="small-box" style="width: 30%; background-color:rgba(255, 179, 143, 1)">
      <div class="inner">
        <h1>{{ $administrasi }}</h1>
        <p>Permohonan Izin</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
        <a href="{{ route('tabel_izin') }}" class="btn" style="background-color:rgb(255, 223, 207)">More Info > </a>
    </div>
    <div class="small-box" style="width: 30%; background-color:rgba(255, 179, 143, 1)">
      <div class="inner">
        <h1>{{ $pengawasan }}</h1>
        <p>Pengawasan</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
        <a href="{{ route('Data-Pengawasan') }}" class="btn" style="background-color:rgb(255, 223, 207)">More Info > </a>
    </div>
    <div class="small-box" style="width: 30%; background-color:rgba(255, 179, 143, 1)">
      <div class="inner">
        <h1>{{ $pemanfaatan }}</h1>
        <p>Pemanfaatan</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
        <a href="{{ route('tabel') }}" class="btn" style="background-color:rgb(255, 223, 207)">More Info > </a>
    </div>
  </div>
<div class="content-wrapper" style="margin-right: 22vh">
   
  {{-- Grafik Pemanfaatan --}}
  <div class="row">
    <div class="col-6">
      <div id="piechart"></div>
    </div>
    <div class="col-6">
  <div id="donutchart"></div>
    </div>
  </div>
  
  <div class="container">
    <div class="card-body" style="margin: 5%; background-color:rgb(249, 249, 249); padding:2%;width:130%">
      <h4 id="manfaat">Pemanfaatan</h4>
      <table id="myTables" class="table table-striped" style="width:100%">
            <thead >
                <tr>
                  <th>Kode Perizinan</th>
                  <th>Kabupaten</th>
                  <th>Kapanewon</th>
                  <th>Kalurahan</th>
                  <th>Desa</th>
                  <th>Luas</th>
                  <th>Uraian</th>
                  <th>Sertifikat</th>
                  <th>Tanggal Mulai</th>
                  <th>Tahun Akhir</th>
                  <th>File SK</th>
                </tr>
            </thead>
              <tbody id="table">
              @foreach ($dtpemanfaatan as $item)
              <tr>
                <td>{{ $item->kode_perizinan }}</td>
                  <td>{{ $item->kabupaten }}</td>
                  <td>{{ $item->kapanewon }}</td>
                  <td>{{ $item->kelurahan }}</td>
                  <td>{{ $item->desa }}</td>
                  <td>{{ $item->persil }}</td>
                  <td>{{ $item->luas }}</td>
                  <td>{{ $item->uraian }}</td>
                  <td>{{ $item->tanggal_mulai }}</td>
                  <td>{{ $item->tanggal_akhir }}</td>
                {{-- <td><img width="150px" src="{{ url('') }}" alt=""></td> --}}
                {{-- <td>{{ $item->file_SK }}</td> --}}
                <td>
                  @foreach($item->files as $file)
                  <a href="{{ asset('files/'.$file->filename) }}">File {{ $loop->index + 1 }}</a>
                  @endforeach
                </td>

                {{-- <a href="{{ asset('img/'. $item->gambar) }}" target="_blank" rel="noopener noreferrer">lihat gambar</a> --}}
                {{-- <img src="cover/{{ $item->file_SK }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""> --}}
                {{-- <img src="{{ asset('img/'.$item->file_SK) }}" class="img-responsive" height="10%" width="50%" alt="" srcset=""> --}}
              </tr>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
    
    <div class="card-body" style="margin: 5%; background-color:rgb(249, 249, 249);padding:4%;width:130%">
      <h4 id="awasi">Pengawasan</h4>
      {{-- <div class="table-responsive"> --}}
      <table id="myTable" class="table table-striped" style="width:100%;font-size:12px">
            <thead>
                <tr>
                  <th>Kapanewon</th> 
                  <th>Kalurahan</th> 
                  <th>Kabupaten</th>
                  <th>Tahun Pengawasan</th>  
                  <th>Nomor SK</th>  
                  <th>Bentuk Pemanfaatan</th>  
                  <th>Persil Klas</th>
                  <th>Tindak Lanjut</th>
                  <th>Kesesuaian</th>
                </tr>
            </thead>

            <tbody id="table">
              @foreach ($dtpengawasan as $item)
                <tr>
                  <td>{{ $item->kapanewon }}</td>
                  <td>{{ $item->kelurahan }}</td>
                  <td>{{ $item->kabupaten }}</td>
                  <td>{{ $item->tahun_pengawasan }}</td>  
                  <td>{{ $item->nomor_sk }}</td>
                  <td>{{ $item->bentuk_pemanfaatan }}</td>
                  <td>{{ $item->persil_klas }}</td>
                  <td>{{ $item->tdklanjut}}</td>
                  <td>{{ $item->kesesuaian }}</td>
                  </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>


    
  </div>
</div>

@endsection

