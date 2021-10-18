@extends('layouts.layout')

@section('judulpage','Surat Izin Kerja')
@section('judulkonten','Surat Izin Kerja')
@push('modal')
{{-- Modal Tambah Surat Izin Kerja --}}
<div class="modal fade" id="AddIzinModal" tabindex="-1" aria-labelledby="AddIzinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddIzinModalLabel">Tambah Surat Izin Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="save_msgList"></ul>

                <div class="form-group mb-3">
                    <label for="">Tempat :</label>
                    <input type="text" required class="tempat_tulis_surat form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal :</label>
                    <input type="date" required class="tanggal_tulis_surat form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Hal :</label>
                    <input type="text" required class="hal_izin form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kepada :</label>
                    <input type="text" required class="kepada_orang_instansi form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Instansi/Perusahaan :</label>
                    <input type="text" required class="nama_instansi form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat Instansi/Perusahaan :</label>
                    <input type="text" required class="alamat_instansi form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama :</label>
                    <input type="text" required class="nama_user_izin form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat :</label>
                    <input type="text" required class="alamat_user_izin form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jabatan :</label>
                    <input type="text" required class="jabatan_user_izin form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai Izin :</label>
                    <input type="date" required class="tanggal_mulai_izin form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Selesai Izin :</label>
                    <input type="date" class="tanggal_selesai_izin form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alasan Izin :</label>
                    <input type="text" required class="alasan_izin form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_izinkerja">Save</button>
            </div>

        </div>
    </div>
</div>
{{-- End Modal Tambah Surat Izin Kerja --}}

{{-- Modal Edit Surat Izin Kerja --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit & Update Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul id="update_msgList"></ul>

                <input type="hidden" id="suratizin_id" />

                <div class="form-group mb-3">
                    <label for="">Tempat :</label>
                    <input type="text" id="tempat_tulis_surat" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal :</label>
                    <input type="date" id="tanggal_tulis_surat" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Hal :</label>
                    <input type="text" id="hal_izin" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kepada :</label>
                    <input type="text" id="kepada_orang_instansi" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Instansi/Perusahaan :</label>
                    <input type="text" id="nama_instansi" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat Instansi/Perusahaan :</label>
                    <input type="text" id="alamat_instansi" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama :</label>
                    <input type="text" id="nama_user_izin" required class=" form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat :</label>
                    <input type="text" id="alamat_user_izin" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jabatan :</label>
                    <input type="text" id="jabatan_user_izin" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai Izin :</label>
                    <input type="date" id="tanggal_mulai_izin" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Selesai Izin :</label>
                    <input type="date" id="tanggal_selesai_izin" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alasan Izin :</label>
                    <input type="text" id="alasan_izin" required class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary update_suratizin">Update</button>
            </div>

        </div>
    </div>
</div>
{{-- End Modal Edit Surat Izin Kerja --}}
{{-- Delete Modal --}}
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Surat Izin Kerja Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Confirm to Delete Data ?</h4>
                <input type="hidden" id="deleteing_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary delete_suratizin">Yes Delete</button>
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

            <button class="btn btn-primary mt-3 ml-4" data-bs-toggle="modal" data-bs-target="#AddIzinModal">Tambah
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

        fetchsuratizin();
        function fetchsuratizin() {
            $.ajax({
                type: "GET",
                url: "/fetch-surat-izin-kerja",
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('tbody').html("");
                    $.each(response.suratizin, function (key, item) {
                        $('tbody').append('<tr>\
                            <td class="text-center">' + item.id + '</td>\
                            <td>' + item.nama_user_izin + '</td>\
                            <td>Surat Izin Kerja kepada ' + item.nama_instansi + '</td>\
                            <td class="text-center"><a type="button" value="' + item.id + '" class="btn btn-warning cetakbtn btn-sm" href="/print-surat-izin/'+ item.id +'" target="_blank">Cetak</a>\
                            <button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button>\
                            <button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                        \</tr>');
                    });
                }
            });
        }

        $(document).on('click', '.add_izinkerja', function (e) {
            e.preventDefault();
            // console.log('hallo');   
            $(this).text('Sending..');
            var data = {
                'tempat_tulis_surat': $('.tempat_tulis_surat').val(),
                'tanggal_tulis_surat': $('.tanggal_tulis_surat').val(),
                'hal_izin': $('.hal_izin').val(),
                'kepada_orang_instansi': $('.kepada_orang_instansi').val(),
                'nama_instansi': $('.nama_instansi').val(),
                'alamat_instansi': $('.alamat_instansi').val(),
                'nama_user_izin': $('.nama_user_izin').val(),
                'alamat_user_izin': $('.alamat_user_izin').val(),
                'jabatan_user_izin': $('.jabatan_user_izin').val(),
                'tanggal_mulai_izin': $('.tanggal_mulai_izin').val(),
                'tanggal_selesai_izin': $('.tanggal_selesai_izin').val(),
                'alasan_izin': $('.alasan_izin').val(),
            }
            // console.log(data);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/surat-izin-kerja",
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
                        $('.add_izinkerja').text('Save');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#AddIzinModal').find('input').val('');
                        $('.add_izinkerja').text('Save');
                        $('#AddIzinModal').modal('hide');
                        fetchsuratizin();
                    }
                }
            });
        });
   
        $(document).on('click', '.editbtn', function (e) {
            e.preventDefault();
            var suratizin_id = $(this).val();
            //alert(suratizin_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit-surat-izin-kerja/" + suratizin_id,
                success: function (response) {
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').modal('hide');
                    } else {
                        //console.log(response.suratizin.tempat_tulis_izin);
                        $('#tempat_tulis_surat').val(response.suratizin.tempat_tulis_izin);
                        $('#tanggal_tulis_surat').val(response.suratizin.tanggal_tulis_izin);
                        $('#hal_izin').val(response.suratizin.hal_izin);
                        $('#kepada_orang_instansi').val(response.suratizin.kepada_orang_instansi);
                        $('#nama_instansi').val(response.suratizin.nama_instansi);
                        $('#alamat_instansi').val(response.suratizin.alamat_instansi);
                        $('#nama_user_izin').val(response.suratizin.nama_user_izin);
                        $('#alamat_user_izin').val(response.suratizin.alamat_user_izin);
                        $('#jabatan_user_izin').val(response.suratizin.jabatan_user_izin);
                        $('#tanggal_mulai_izin').val(response.suratizin.tanggal_mulai_izin);
                        $('#tanggal_selesai_izin').val(response.suratizin.tanggal_selesai_izin);
                        $('#alasan_izin').val(response.suratizin.alasan_izin);
                        $('#suratizin_id').val(suratizin_id);
                    }
                }
            });
            $('.btn-close').find('input').val('');
        }); 

        $(document).on('click', '.update_suratizin', function (e) {
            e.preventDefault();

            $(this).text('Updating..');
            var id = $('#suratizin_id').val();
            // alert(id);

            var data = {
                'tempat_tulis_surat': $('#tempat_tulis_surat').val(),
                'tanggal_tulis_surat': $('#tanggal_tulis_surat').val(),
                'hal_izin': $('#hal_izin').val(),
                'kepada_orang_instansi': $('#kepada_orang_instansi').val(),
                'nama_instansi': $('#nama_instansi').val(),
                'alamat_instansi': $('#alamat_instansi').val(),
                'nama_user_izin': $('#nama_user_izin').val(),
                'alamat_user_izin': $('#alamat_user_izin').val(),
                'jabatan_user_izin': $('#jabatan_user_izin').val(),
                'tanggal_mulai_izin': $('#tanggal_mulai_izin').val(),
                'tanggal_selesai_izin': $('#tanggal_selesai_izin').val(),
                'alasan_izin': $('#alasan_izin').val(),
            }
            console.log(data);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/update-surat-izin-kerja/" + id,
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
                        $('.update_suratizin').text('Update');
                    } else {
                        $('#update_msgList').html("");

                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').find('input').val('');
                        $('.update_suratizin').text('Update');
                        $('#editModal').modal('hide');
                        fetchsuratizin();
                    }
                }
            });

        });

       
        $(document).on('click', '.deletebtn', function () {
            var suratizin_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(suratizin_id);
        });



        $(document).on('click', '.delete_suratizin', function (e) {
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
                url: "/delete-surat-izin/" + id,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_suratizin').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_suratizin').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        fetchsuratizin();
                    }
                }
            });
        });

    });

</script>
@endpush