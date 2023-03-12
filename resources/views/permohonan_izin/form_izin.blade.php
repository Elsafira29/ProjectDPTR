@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/filepond@4.30.4/dist/filepond.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content" style="margin: 10vh; margin-left:20vh; width:110vh; margin-right:28vh">
                <div class="card card-info card-outline ">
                    <div class="card-header">
                        <h3>Input Data Permohonan Izin</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('simpan_administrasi') }}" method="POST" enctype="multipart/form-data"
                            style="width: 100vh; margin-left:10px;">
                            {{ csrf_field() }}
                            {{-- <div class="form-group mt-3">
                        <input type="text" id="id" name="id" class="form-control @error('id') is-invalid @enderror" placeholder="id">
                    </div> --}}
                            <div class="form-group mt-3 mt-3">
                                <label>Desa</label> <br>
                                <input type="text" id="desa" name="desa" class="form-control" placeholder="Desa" required>
                            </div>
                            <div class="form-group mt-3 mt-3">
                                <label>Tanggal Masuk</label>
                                <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"
                                    placeholder="Tangal Masuk" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Tindak Lanjut</label>
                                <input type="text" id="tindak" name="tindak" class="form-control"
                                    placeholder="Tindak Lanjut" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Pengembalian</label>
                                <input type="text" id="pengembalian" name="pengembalian" class="form-control"
                                    placeholder="Pengembalian" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Proses Kasultanan</label>
                                <input type="text" id="proses_kasultanan" name="proses_kasultanan" class="form-control"
                                    placeholder="Proses Kasultanan" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Jawaban Kasultanan</label>
                                <input type="text" id="jawaban_kasultanan" name="jawaban_kasultanan"
                                    class="form-control" placeholder="Jawaban Kasultanan" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Proses Biro Hukum</label>
                                <input type="text" id="proses_biro" name="proses_biro" class="form-control"
                                    placeholder="Proses Biro Hukum" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Jawaban Biro Hukum</label>
                                <input type="text" id="jawaban_biro" name="jawaban_biro" class="form-control"
                                    placeholder="Jawaban Biro Hukum" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Surat rekomendasi permohonan</label>
                                <textarea name="surat_kemonbu" id="surat_kemonbu" cols="30" rows="8"></textarea>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-secondary" style="background-color: brown">Simpan
                                    Data</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!--
  The classic file input element we'll enhance
  to a file pond, configured with attributes
  -->
        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    {{-- <script>
        $('.desa-input-form').select2({
            placeholder: 'Select an option',
            ajax: {
                url: '{{route('desa.get-all-desa')}}',
                dataType: "json",
                processResults: function (data) {
                    return {
                        results: $.map(data.data.data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                data: function (params) {
                    return {
                        term: params.term || '',
                    }
                },
            }
        }) --}}



    {{-- </script> --}}

    <!-- jQuery -->
    @include('tamplate.script')

</body>

</html>
@endsection
