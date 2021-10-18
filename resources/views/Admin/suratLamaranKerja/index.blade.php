@extends('layouts.layout')

@section('judulpage','Surat Lamaran Kerja')
@section('judulkonten','Surat Lamaran Kerja')
@push('modal')
{{-- Modal Tambah Surat Lamaran Kerja --}}
<div class="modal fade" id="AddLamaranModal" tabindex="-1" aria-labelledby="AddLamaranModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddLamaranModalLabel">Tambah Surat Lamaran Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="save_msgList"></ul>

                <div class="form-group mb-3">
                    <label for="">Tempat :</label>
                    <input type="text" required class="tempat_tulis_lamaran form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal :</label>
                    <input type="date" required class="tanggal_tulis_lamaran form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kepada :</label>
                    <input type="text" required class="kepada_lamaran_instansi form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Instansi/Perusahaan :</label>
                    <input type="text" required class="nama_instansi_lamaran form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat Instansi/Perusahaan :</label>
                    <input type="text" required class="alamat_instansi_lamaran form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama :</label>
                    <input type="text" required class="nama_user_lamar form-control">
                </div>
                <div class="form-group mb-3">
                    <label for=""> Tempat Lahir:</label>
                    <input type="text" required class="tempat_lahir form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lahir:</label>
                    <input type="date" required class="tanggal_lahir form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat :</label>
                    <input type="text" required class="alamat_user_lamar form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nomor HP :</label>
                    <input type="number" required class="nomor_user_lamar form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 1 :</label>
                    <input type="text" class="berkas_satu form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 2 :</label>
                    <input type="text" class="berkas_dua form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 3 :</label>
                    <input type="text" class="berkas_tiga form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 4 :</label>
                    <input type="text" class="berkas_empat form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 5 :</label>
                    <input type="text" class="berkas_lima form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_lamarkerja">Save</button>
            </div>

        </div>
    </div>
</div>
{{-- End Modal Tambah Surat Lamaran Kerja --}}

{{-- Modal Edit Surat Lamaran Kerja --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit & Update Surat Lamaran Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul id="update_msgList"></ul>

                <input type="hidden" id="suratlamaran_id" />

                <div class="form-group mb-3">
                    <label for="">Tempat :</label>
                    <input type="text" id="tempat_tulis_lamaran" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal :</label>
                    <input type="date" id="tanggal_tulis_lamaran" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kepada :</label>
                    <input type="text" id="kepada_lamaran_instansi" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Instansi/Perusahaan :</label>
                    <input type="text" id="nama_instansi_lamaran" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat Instansi/Perusahaan :</label>
                    <input type="text" id="alamat_instansi_lamaran" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama :</label>
                    <input type="text" id="nama_user_lamar" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for=""> Tempat Lahir:</label>
                    <input type="text" id="tempat_lahir" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lahir:</label>
                    <input type="date" id="tanggal_lahir" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat :</label>
                    <input type="text" id="alamat_user_lamar" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nomor HP :</label>
                    <input type="number" id="nomor_user_lamar" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 1 :</label>
                    <input type="text" id="berkas_satu" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 2 :</label>
                    <input type="text" id="berkas_dua" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 3 :</label>
                    <input type="text" id="berkas_tiga" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 4 :</label>
                    <input type="text" id="berkas_empat" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Berkas 5 :</label>
                    <input type="text" id="berkas_lima" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary update_suratlamaran">Update</button>
            </div>

        </div>
    </div>
</div>
{{-- End Modal Edit Surat Lamaran Kerjaa --}}
{{-- Delete Modal --}}
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Surat Lamaran Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Confirm to Delete Data ?</h4>
                <input type="hidden" id="deleteing_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary delete_suratlamaran">Yes Delete</button>
            </div>
        </div>
    </div>
</div>
{{-- End - Delete Modal --}}
@endpush


@section('isikonten')
<div class="col-12">
    <div class="card">
        <div class="card-body p-0">
            <div id="success_message"></div>

            <button class="btn btn-primary mt-3 ml-4" data-bs-toggle="modal" data-bs-target="#AddLamaranModal">Tambah
                Surat</button>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-md">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>

                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {

        fetchsuratlamaran();
        function fetchsuratlamaran() {
            $.ajax({
                type: "GET",
                url: "/fetch-surat-lamaran-kerja",
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('tbody').html("");
                    $.each(response.suratlamaran, function (key, item) {
                        $('tbody').append('<tr>\
                            <td class="text-center">' + item.id + '</td>\
                            <td>' + item.nama_user_lamar + '</td>\
                            <td>Surat Lamaran Kerja kepada ' + item.nama_instansi_lamaran + '</td>\
                            <td class="text-center"><a type="button" value="' + item.id + '" class="btn btn-warning cetakbtn btn-sm" href="/print-surat-lamaran/'+ item.id +'" target="_blank">Cetak</a>\
                            <button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button>\
                            <button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                        \</tr>');
                    });
                }
            });
        }

        $(document).on('click', '.add_lamarkerja', function (e) {
            e.preventDefault();
            // console.log('hallo');   
            $(this).text('Sending..');
            var data = {
                'tempat_tulis_lamaran': $('.tempat_tulis_lamaran').val(),
                'tanggal_tulis_lamaran': $('.tanggal_tulis_lamaran').val(),
                'kepada_lamaran_instansi': $('.kepada_lamaran_instansi').val(),
                'nama_instansi_lamaran': $('.nama_instansi_lamaran').val(),
                'alamat_instansi_lamaran': $('.alamat_instansi_lamaran').val(),
                'nama_user_lamar': $('.nama_user_lamar').val(),
                'tempat_lahir': $('.tempat_lahir').val(),
                'tanggal_lahir': $('.tanggal_lahir').val(),
                'alamat_user_lamar': $('.alamat_user_lamar').val(),
                'nomor_user_lamar': $('.nomor_user_lamar').val(),
                'berkas_satu': $('.berkas_satu').val(),
                'berkas_dua': $('.berkas_dua').val(),
                'berkas_tiga': $('.berkas_tiga').val(),
                'berkas_empat': $('.berkas_empat').val(),
                'berkas_lima': $('.berkas_lima').val(),
            }
            // console.log(data);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/surat-lamaran-kerja",
                data: data,
                dataType: "json",
                success: function (response) {
                    //console.log(response);
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $('.add_lamarkerja').text('Save');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#AddLamaranModal').find('input').val('');
                        $('.add_lamarkerja').text('Save');
                        $('#AddLamaranModal').modal('hide');
                        fetchsuratlamaran();
                    }
                }
            });
        });
   
        $(document).on('click', '.editbtn', function (e) {
            e.preventDefault();
            var suratlamaran_id = $(this).val();
            //alert(suratizin_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit-surat-lamaran-kerja/" + suratlamaran_id,
                success: function (response) {
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').modal('hide');
                    } else {
                        //console.log(response.suratlamaran.berkas_satu);
                        $('#tempat_tulis_lamaran').val(response.suratlamaran.tempat_tulis_lamaran);
                        $('#tanggal_tulis_lamaran').val(response.suratlamaran.tanggal_tulis_lamaran);
                        $('#kepada_lamaran_instansi').val(response.suratlamaran.kepada_lamaran_instansi);
                        $('#nama_instansi_lamaran').val(response.suratlamaran.nama_instansi_lamaran);
                        $('#alamat_instansi_lamaran').val(response.suratlamaran.alamat_instansi_lamaran);
                        $('#nama_user_lamar').val(response.suratlamaran.nama_user_lamar);
                        $('#tempat_lahir').val(response.suratlamaran.tempat_lahir);
                        $('#tanggal_lahir').val(response.suratlamaran.tanggal_lahir);
                        $('#alamat_user_lamar').val(response.suratlamaran.alamat_user_lamar);
                        $('#nomor_user_lamar').val(response.suratlamaran.nomor_user_lamar);
                        $('#berkas_satu').val(response.suratlamaran.berkas_satu);
                        $('#berkas_dua').val(response.suratlamaran.berkas_dua);
                        $('#berkas_tiga').val(response.suratlamaran.berkas_tiga);
                        $('#berkas_empat').val(response.suratlamaran.berkas_empat);
                        $('#berkas_lima').val(response.suratlamaran.berkas_lima);
                        $('#suratlamaran_id').val(suratlamaran_id);
                    }
                }
            });
            $('.btn-close').find('input').val('');
        }); 

        $(document).on('click', '.update_suratlamaran', function (e) {
            e.preventDefault();

            $(this).text('Updating..');
            var id = $('#suratlamaran_id').val();
            // alert(id);

            var data = {
                'tempat_tulis_lamaran': $('#tempat_tulis_lamaran').val(),
                'tanggal_tulis_lamaran': $('#tanggal_tulis_lamaran').val(),
                'kepada_lamaran_instansi': $('#kepada_lamaran_instansi').val(),
                'nama_instansi_lamaran': $('#nama_instansi_lamaran').val(),
                'alamat_instansi_lamaran': $('#alamat_instansi_lamaran').val(),
                'nama_user_lamar': $('#nama_user_lamar').val(),
                'tempat_lahir': $('#tempat_lahir').val(),
                'tanggal_lahir': $('#tanggal_lahir').val(),
                'alamat_user_lamar': $('#alamat_user_lamar').val(),
                'nomor_user_lamar': $('#nomor_user_lamar').val(),
                'berkas_satu': $('#berkas_satu').val(),
                'berkas_dua': $('#berkas_dua').val(),
                'berkas_tiga': $('#berkas_tiga').val(),
                'berkas_empat': $('#berkas_empat').val(),
                'berkas_lima': $('#berkas_lima').val(),
            }
            console.log(data);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/update-surat-lamaran-kerja/" + id,
                data: data,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_suratlamaran').text('Update');
                    } else {
                        $('#update_msgList').html("");

                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').find('input').val('');
                        $('.update_suratlamaran').text('Update');
                        $('#editModal').modal('hide');
                        fetchsuratlamaran();
                    }
                }
            });

        });

       
        $(document).on('click', '.deletebtn', function () {
            var suratlamaran_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(suratlamaran_id);
        });



        $(document).on('click', '.delete_suratlamaran', function (e) {
            e.preventDefault();

            $(this).text('Deleting..');
            var id = $('#deleteing_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/delete-surat-lamaran/" + id,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_suratlamaran').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_suratlamaran').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        fetchsuratlamaran();
                    }
                }
            });
        });

    });

</script>
@endpush