@extends('layouts.apps')

@section('content')
    
<!DOCTYPE html>
<html lang="en">
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content" style="margin: 7vh; margin-left:25vh; width:110vh">
    <div class="card catd-info card-outline">
      <div class="card-header">
        <h3>Edit Data Permohonan Izin</h3>
      </div>

      <div class="card-body">
        @foreach($administrasi as $item)
          <form action="{{ route('updateadministrasi',$item->id) }}" method="POST">
              @csrf
              {{-- <div class="form-group mb-3">
                  <label>ID</label>
                  <input type="text" id="id" name="id" class="form-control"  value="{{ $item->id }}">
              </div> --}}
              <div class="form-group mb-3">
                  <label>Tanggal Masuk Surat</label>
                  <input type="text" id="desa" name="desa" class="form-control"  value="{{ $item->desa }}">
              </div>
              <div class="form-group mb-3">
                <label>Tanggal Masuk Surat</label>
                <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"  value="{{ $item->tgl_masuk }}">
              </div>
              <div class="form-group mb-3">
                  <label>Tindak Lanjut</label>
                  <input type="text" id="tindak" name="tindak" class="form-control" value="{{ $item->tindak }}">
              </div>
              <div class="form-group mb-3">
                  <label>Pengembalian</label>
                <input type="text" id="pengembalian" name="pengembalian" class="form-control" value="{{ $item->pengembalian }}">
               </div>
              <div class="form-group mb-3">
                  <label>Proses Kasultanan</label>
                  <input type="text" id="proses_kasultanan" name="proses_kasultanan" class="form-control" value="{{ $item->proses_kasultanan }}">
              </div>
              <div class="form-group mb-3">
                <label>Jawaban Kasultanan</label>
                <input type="text" id="jawaban_kasultanan" name="jawaban_kasultanan" class="form-control" value="{{ $item->jawaban_kasultanan }}">
              </div>
              <div class="form-group mb-3">
                <label>Proses Biro Hukum</label>
                <input type="text" id="proses_biro" name="proses_biro" class="form-control" value="{{ $item->proses_biro}}">
              </div>
              <div class="form-group mb-3">
                <label>Jawaban Biro Hukum</label>
                <input type="text" id="jawaban_biro" name="jawaban_biro" class="form-control" value="{{ $item->jawaban_biro}}">
              </div>
              <div class="form-group mb-3">
                <label>Surat Rekomendasi Bupati</label>
                <textarea name="surat_kemonbu" id="surat_kemonbu" cols="30" rows="10" value="{{ $item->surat_kemonbu }}"></textarea>
            </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-success" style="background-color: rgb(255, 102, 0)">Ubah Data</button>
              </div>
          </form>
        @endforeach
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