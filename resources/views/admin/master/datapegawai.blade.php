@extends('admin.master')

@section('judul')
Data Pegawai
@endsection

@section('content')


<!-- Button to Open the Modal -->
<div>
    <button id="tambahModal" style="margin-bottom: 10px; margin-top: 20px" type="button" class="btn btn-primary box-tools pull-right" data-toggle="modal" data-target="#modaltambahPegawai">
        <i class="fa fa-plus-circle" aria-hidden="true"></i> Data Pegawai
    </button>

</div>

<div class="table-responsive-lg">
    <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Nama</th>
                <th>No. Telp</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>jabatan</th>
                <th>Gaji /hari</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

</div>


<!--Srart Modal -->
<div class="modal fade" id="modaltambahPegawai">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="" method="POST" id="formSimpanPegawai" class="form">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="alert alert-success" style="display:none"></div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email </label>
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control float-right datepicker" name="tanggalLahir" id="tanggalLahir">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>No.Telp </label>
                                <input type="text" class="form-control" placeholder="No. Telp" id="noTelp" name="noTelp">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jabatan </label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="admin">Manager</option>
                                    <option value="admin">Kurir</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gaji /hari </label>
                                <input type="number" class="form-control" placeholder="Gaji" id="gajiPerHari" name="gajiPerHari">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Alamat </label>
                        <input type="text" class="form-control" placeholder="Alamat" id="txtAlamat" name="txtAlamat">
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Shift </label>
                                <select name="shift" id="shift" class="form-control">
                                    <option value="admin">Pagi</option>
                                    <option value="admin">Siang</option>
                                    <option value="admin">Sore</option>
                                </select>
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
<link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.min.css')}}">
@endsection


@section('script')
<script src="{{ asset('/js/tampilan/changemodal.js') }}"></script>
<script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>



@endsection
