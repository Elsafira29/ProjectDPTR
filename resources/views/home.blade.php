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
   
  <div class="container" style="font-size: 12px;">
    <div class="card-body" style="margin: 5%; background-color:rgb(255, 251, 251)">
      <h4 id="manfaat">Pemanfaatan</h4>
      <table id="myTables" class="table table-striped" style="width:100%">
            <thead >
                <tr>
                    <th>Kode Perizinan</th>
                    <th>Desa Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Kalurahan</th>
                    <th>Luas</th>
                    <th>Uraian</th>
                    <th>Sertifikat</th>
                    <th>Tanggal Mlai</th>
                    <th>Tanggal Akhir</th>
                    <th>File SK</th>
                </tr>
            </thead>
  
            {{-- <tbody id="table">
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
                    <td>
                      @foreach($item->files as $file)
                      <a href="{{ asset('files/'.$file->filename) }}">file {{ $loop->index + 1 }}</a>
                      @endforeach
                    </td>
                  </tr>
                </tr>
                @endforeach
            </tbody> --}}
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
    
    <div class="card-body" style="margin: 5%; background-color:rgb(255, 251, 251)">
      <h4 id="awasi">Pengawasan</h4>
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

