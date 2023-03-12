@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/filepond@4.30.4/dist/filepond.min.css">

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
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
                        <h3>Input Data Pemanfaatan</h3>

                    </div>

                    <div class="card-body" style="width: 100vh">
                        <form action="{{ route('simpan-dpemanfaatan') }}" method="POST" enctype="multipart/form-data"
                            style="width: 100vh; margin-left:10px;">
                            @csrf
                            {{-- <div class="form-group mt-3">
                        <input type="text" id="id" name="id" class="form-control @error('id') is-invalid @enderror" placeholder="id">
                    </div> --}}
                            <div class="form-group mt-3">
                                <input type="hidden" id="kabupaten" name="kabupaten" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="hidden" id="kapanewon" name="kapanewon" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="hidden" id="kelurahan" name="kelurahan" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Kode Perizininan</label>
                                <input type="text" id="kode_perizinan" name="kode_perizinan" class="form-control"
                                    placeholder="Kode perizinan" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Kabupaten:</label>
                                <select id="kabupaten-input-form" class="form-select form-select-lg mb-3">
                                </select>
                                {{-- <input type="text" id="kabupaten" name="kabupaten" class="form-control" required> --}}
                            </div>
                            <div class="form-group mt-3">
                                <label>Kapanewon:</label>
                                <select id="kapanewon-input-form" class="form-select form-select-lg mb-3">

                                </select>
                                {{-- <input type="text" id="kapanewon" name="kapanewon" class="form-control" required> --}}
                            </div>
                            <div class="form-group mt-3">
                                <label>Kalurahan:</label>
                                <select id="kelurahan-input-form" class="form-select form-select-lg mb-3">

                                </select>
                                {{-- <input type="text" id="kelurahan" name="kelurahan" class="form-control" required> --}}
                            </div>
                            <div class="form-group mt-3 mt-3">
                                <label>Desa</label>
                                <input type="text" id="desa" name="desa" class="form-control" placeholder="Desa"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Sertifikat/persil</label>
                                <input type="text" id="persil" name="persil" class="form-control"
                                    placeholder="Sertifikat/persil" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Luas</label>
                                <input type="text" id="luas" name="luas" class="form-control" placeholder="Luas"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Uraian</label>
                                <input type="text" id="uraian" name="uraian" class="form-control" placeholder="Uraian"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Tanggal Mulai</label>
                                <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control"
                                    placeholder="tanggal-mulai" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Tahun Akhir</label>
                                <input type="text" id="tanggal_akhir" name="tanggal_akhir" class="form-control"
                                    placeholder="tanggal-akhir" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="files" class="form-label">Upload SK:</label>
                                <div class="input-group hdtuto control-group lst increment">
                                    <input type="file" name="filenames[]" class="myfrm form-control" required>
                                    <div class="input-group-btn">
                                        <button class="btn btn-success" type="button"><i
                                                class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                </div>
                                <div class="clone hide">
                                    <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                        <input type="file" name="filenames[]" class="myfrm form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button"><i
                                                    class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                    <label for="formFile" class="form-label">Upload file SK</label>
                    <input class="form-control" type="file" id="formFile">
                  </div> --}}
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



    <!-- Select2 JS -->
    <script>
        $(document).ready(function () {

            let kabupaten = null;
            let kabupatenId = null;
            let kecamatan = null;
            let kecamatanId = null;

            $(".btn-success").click(function () {
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click", ".btn-danger", function () {
                $(this).parents(".hdtuto").remove();
            });

            $('#kabupaten-input-form').select2({
                placeholder: 'Pilih Kabupaten',
                ajax: {
                    url: '{{route('kabupaten.get-all-kabupaten')}}',
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
            })

            $('#kabupaten-input-form').change(function () {
                kabupatenId = $('#kabupaten-input-form :selected').val();

                   $("#kapanewon-input-form").select2({
                        placeholder: 'Pilih Kabupaten',
                        ajax: {
                            url: "{{url('api/v1/kecamatan')}}/"+ kabupatenId,
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
                    })
            })

            $('#kapanewon-input-form').on('select2:select', function(){
                kecamatanId = $('#kapanewon-input-form :selected').val();

                $("#kelurahan-input-form").select2({
                        placeholder: 'Pilih kelurahan',
                        ajax: {
                            url: "{{url('api/v1/kelurahan')}}/"+ kecamatanId,
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
                    })
            })

        });

        $('#kelurahan-input-form').on('select2:select', function(){
            kabupaten = $('#kabupaten-input-form :selected').text();
            kapanewon = $('#kapanewon-input-form :selected').text();
            kelurahan = $('#kelurahan-input-form :selected').text();
            $('#kabupaten').attr('value', kabupaten)
            $('#kapanewon').attr('value', kapanewon)
            $('#kelurahan').attr('value', kelurahan)
        })
    </script>
    @include('tamplate.script')

</body>

</html>
@endsection
