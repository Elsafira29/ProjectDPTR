@extends('layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-3 col-6" >
      <!-- small box -->
      <div class="card" style="margin-left:10%; margin-top:10%">
        <div class="card-body" style="background-color: rgba(255, 179, 143, 1)">
          <div class="small-box" >
            <div class="inner">
              <h1>{{ $pengawasan }}</h1>
              <p>Pengawasan</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
              <a href="{{ route('tabel') }}" class="btn" style="background-color: antiquewhite">More Info > </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-6" >
      <!-- small box -->
      <div class="card" style="margin-left:5%; margin-top:10%">
        <div class="card-body" style="background-color: rgba(255, 179, 143, 1)">
          <div class="small-box" >
            <div class="inner">
              <h1>{{ $pemanfaatan }}</h1>
              <p>Pemanfaatan</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
              <a href="{{ route('tabel') }}" class="btn" style="background-color: antiquewhite">More Info > </a>
          </div>
        </div>
      </div>    
    </div>
  </div>
   
  <div class="container">
    <div class="card-body" style="margin: 5%; background-color:rgb(255, 251, 251)">
      <h2 id="manfaat">Pemanfaatan</h2>
      <table id="myTables" class="table table-striped" style="width:100%">
            <thead >
                <tr>
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
  
            <tbody id="table">
              @foreach ($dtpemanfaatan as $item)
                <tr>
                    <td>{{ $item->kode_perizinan }}</td>
                    <td>{{ $item->desa_kecamatan }}</td>
                    <td>{{ $item->kabupaten }}</td>
                    <td>{{ $item->kelurahan }}</td>
                    <td>{{ $item->persil }}</td>
                    <td>{{ $item->luas }}</td>
                    <td>{{ $item->uraian }}</td>
                    <td>{{ $item->tanggal_mulai }}</td>
                    <td>{{ $item->tanggal_akhir }}</td>
                    <td><a href="{{ asset('files/'.$item->filename) }}">lihat file</a></td>
                  </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="card-body" style="margin: 5%; background-color:rgb(255, 251, 251)">
      <h2 id="awasi">Pengawasan</h2>
      <table id="myTable" class="table table-striped" style="width:90%">
            <thead>
                <tr>
                  <th>Kapanewon</th> 
                  <th>Kalurahan</th> 
                  <th>Kabupaten</th>
                  <th>Tahun Pengawasan</th>  
                  <th>Nomor SK</th>  
                  <th>Bentuk Pemanfaatan</th>  
                  <th>Persil Klas</th>
                  <th>Jenis Sk</th>
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
                  <td>{{ $item->jenis_sk }}</td>
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

@endsection

