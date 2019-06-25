@extends('admin.master')

@section('judul')
Laporan Data Absensi
@endsection

@section('content')


<!-- Button to Open the Modal -->
<section class="pencarianlap pt-3">
    <!-- Date and time range -->
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label >Pegawai</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span >
                                <button class="btn btn-info " id="pegawaiModal" data-toggle="modal" data-target="#modalCariPegawai"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                        </div>
                        <input type="text" readonly class="form-control float-right" placeholder="Pegawai" id="pegawai" name="pegawai"">
                    </div>
                </div>
            </div>
            <div class=" col-sm-4">
                <label><br></label>
                <div class="form-inline">
                    <a class="text-danger"> *Semua </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5 ">
                <div class="form-group">
                    <label>Tanggal :</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control float-right" id="tglLaporan">
                        <button class="btn btn-success  ml-2"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 offset-5 ">
                <div class="form-group">
                    <label><br></label>

                    <div class="input-group ">
                        <button class="btn btn-success ml-auto"><i class="fa fa-print" aria-hidden="true"></i> Cetak</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="table-responsive-lg">
            <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Tanggal</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>

<!--Start Modal -->
<div class="modal fade" id="modalCariPegawai">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive-lg">
                    <table id="tbcustomer" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Pegawai</th>
                                <th>Nama Pegawai</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EndModal -->
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/daterangepicker/daterangepicker-bs3.css')}}">
@endsection


@section('script')
<!-- date-range-picker -->
<script src="{{asset ('/js/moment-with-locales.js')}}"></script>
<script src="{{asset ('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script>
    $(function() {
        //Date range picker
        $('#tglLaporan').daterangepicker()


    });
</script>

@endsection
