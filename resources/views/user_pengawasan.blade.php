<div class="card-body">
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

          <tbody id="table">
            @foreach ($dtpengawasan as $item)
              <tr>
                  <td>{{ $item->id }}</td>
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
              @endforeach
          </tbody>
      </table>
  </div>