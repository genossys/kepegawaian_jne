@extends('admin.master')

@section('judul')
Data Shift
@endsection

@section('content')


<!-- Button to Open the Modal -->
<div>
    <button id="tambahModal" style="margin-bottom: 10px; margin-top: 20px" type="button" class="btn btn-primary box-tools pull-right" data-toggle="modal" data-target="#modaltambahShift">
        <i class="fa fa-plus-circle" aria-hidden="true"></i> Data Shift
    </button>

</div>

<div class="table-responsive-lg">
    <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode Shift</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<!--Srart Modal -->
<div class="modal fade" id="modaltambahShift">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Shift</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="" method="POST" id="formSimpanShift" class="form">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="alert alert-success" style="display:none"></div>

                    <div class="form-group">
                        <label>Kode Shift </label>
                        <input type="text" class="form-control" placeholder="Kode Shift" id="kodeshift" name="kodeshift">
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                    <label>Jam Masuk:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                        <input type="text" class="form-control timepicker" id="jamMasuk" name="jamMasuk">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                    <label>Jam Keluar:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                        <input type="text" class="form-control timepicker" id="jamKeluar" name="jamKeluar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="text-right">
                        <button id="btnSimpan" class="btn btn-primary"></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- EndModal -->

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset ('/adminlte/plugins/timepicker/bootstrap-timepicker.min.css')}}">
@endsection


@section('script')
<script src="{{ asset('/js/tampilan/changemodal.js') }}"></script>
\<script src="{{ asset ('/adminlte/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript">


    //Timepicker
    $('.timepicker').timepicker({
        showInputs: false
    })
</script>

@endsection
