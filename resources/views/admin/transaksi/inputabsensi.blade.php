@extends('admin.master')

@section('judul')
Laporan Data Lelang
@endsection

@section('content')


<!-- Button to Open the Modal -->
<section class="pencarianlap">
    <!-- Date and time range -->
    <div class="container">

        <div class="row mb-0">
            <div class="col-sm-4 ">
                <div class="form-group">
                    <label>Tanggal</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control float-right datepicker" name="dateAbsensi" id="dateAbsensi">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-4 mb-2">
                <label class="mb-0">Pegawai</label>
                <div class="form-inline">
                    <button class="btn btn-info " style="width: 10%;border-top-right-radius: 0;border-bottom-right-radius: 0" id="salesModal" data-toggle="modal" data-target="#modalCariSales"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <input type="text" readonly class="form-control" placeholder="Pegawai" id="txtPegawai" name="txtPegawai" style="width: 90%;border-top-left-radius: 0;border-bottom-left-radius: 0">

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
            <div class="col-sm-2">
                <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <label>Jam Masuk:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" class="form-control timepicker" id="txtJamMasuk" name="txtJamKeluar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <label>Jam Keluar:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" class="form-control timepicker" id="txtJamMasuk" name="txtJamKeluar">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <label><br></label>
                        <div class="input-group">
                            <button class="btn btn-primary"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Input</button>
                        </div>
                    </div>
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

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" type="image/png" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/img/glyphicons-halflings.png">
<link rel="stylesheet" href="{{ asset ('/adminlte/plugins/timepicker/bootstrap-timepicker.min.css')}}">
@endsection


@section('script')
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset ('/adminlte/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });

    //Timepicker
    $('.timepicker').timepicker({
        showInputs: false
    })
</script>

@endsection
