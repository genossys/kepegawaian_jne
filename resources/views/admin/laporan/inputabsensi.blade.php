@extends('admin.master')

@section('judul')
Laporan Data Lelang
@endsection

@section('content')


<!-- Button to Open the Modal -->
<section class="pencarianlap">
    <!-- Date and time range -->
    <div class="container">


        <div class="row">
            <div class="col-sm-4 mb-2">
                <label class="mb-0">Sales</label>
                <div class="form-inline">
                    <button class="btn btn-info " style="width: 10%;border-top-right-radius: 0;border-bottom-right-radius: 0" id="salesModal" data-toggle="modal" data-target="#modalCariSales"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <input type="text" readonly class="form-control" placeholder="Sales" id="txtSales" name="txtSales" style="width: 90%;border-top-left-radius: 0;border-bottom-left-radius: 0">

                </div>
            </div>
            <div class=" col-sm-4">
                <label><br></label>
                <div class="form-inline">
                    <a class="text-danger"> *Semua </a>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4 ">
                <div class="form-group">
                    <label>Tanggal Penjualan:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control float-right" id="reservation">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="form-group">
                    <label><br></label>
                    <div class="input-group ">
                        <button class="btn btn-success "><i class="fa fa-search " aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label><br></label>
                    <div class="input-group  text-right ">
                        <button class="btn btn-warning ml-auto text-white" onclick="cetak()"><i class="fa fa-print" aria-hidden="true"></i> Cetak</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.input group -->
    </div>
    <!-- /.form group -->

    <!-- Date and time range -->

</section>

<section>
    <div class="container">
        <div class="table-responsive-lg">
            <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Transaksi</th>
                        <th>Kode Customer</th>
                        <th>Tanggal</th>
                        <th>Diskon</th>
                        <th>Total</th>
                        <th>Status Lunas</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>

@endsection

@section('css')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/daterangepicker/daterangepicker-bs3.css')}}">
@endsection


@section('script')
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset ('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script>
    $(function() {
        //Date range picker
        $('#reservation').daterangepicker()

    })
</script>

<script src="{{ asset('/js/Laporan/laporanpenjualan.js') }}"></script>
@endsection
