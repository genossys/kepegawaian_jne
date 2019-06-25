@extends('admin.master')

@section('judul')
Data User
@endsection

@section('content')


<!-- Button to Open the Modal -->
<div>
    <button id="tambahModal" style="margin-bottom: 10px; margin-top: 20px" type="button" class="btn btn-primary box-tools pull-right" data-toggle="modal" data-target="#modaltambahUser">
        <i class="fa fa-plus-circle" aria-hidden="true"></i> Data User
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
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<!--Srart Modal -->
<div class="modal fade" id="modaltambahUser">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="" method="POST" id="formSimpanUser" class="form">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="alert alert-success" style="display:none"></div>

                    <div class="form-group">
                        <label>Nama </label>
                        <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Hak Akses</label>
                                <select class="form-control" id="hakAkses">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
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
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" class="form-control" placeholder="Masukan Ulang Password" id="conPassword" name="conPassword">
                                <small id="passwordHelpEdit" class="text-danger" hidden >
                                    Password Tidak Cocok
                                </small>
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
@endsection


@section('script')
<script src="{{ asset('/js/tampilan/changemodal.js') }}"></script>
<script type="text/javascript">
    $("#conPassword").on("blur", function() {
        var psw = document.getElementById("password").value;
        var pswcnf = document.getElementById("conPassword").value;
        if ((psw == pswcnf)) {
            $("#passwordHelpEdit").attr("hidden", false);
            $("#passwordHelpEdit").removeClass('text-danger');
            $("#passwordHelpEdit").addClass('text-success');
            $("#passwordHelpEdit").html('Password Cocok');

        } else {
            $("#passwordHelpEdit").attr("hidden", false);
            $("#passwordHelpEdit").removeClass('text-success');
            $("#passwordHelpEdit").addClass('text-danger');
            $("#passwordHelpEdit").html('Password Tidak Cocok');
        }
    });
</script>

@endsection
