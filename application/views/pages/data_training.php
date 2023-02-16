<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <br><br>
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Uji</li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="animated fadeIn oncenter">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style="background-color:whitesmoke;">
                            <h5>
                                <?= $title ?>
                                <span class="float-right">
                                    <a class="nav-link" data-toggle="dropdown" href="#">
                                        <i class="bi bi-three-dots-vertical" style="color:grey"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                        <span class="dropdown-item dropdown-header">Menu</span>
                                        <div class="dropdown-divider"></div>

                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-add">
                                            <i class="bi bi-plus-circle mr-2"></i> Tambah Data
                                            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item" data-toggle="modal"
                                            data-target="#modal-upload">
                                            <i class="bi bi-upload mr-2"></i> Upload Data
                                            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                                        </a>
                                        <a href="#" class="dropdown-item" id="delete_all">
                                            <i class="bi bi-trash mr-2"></i> Hapus Semua
                                            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item dropdown-footer"></a>
                                    </div>
                                </span>
                            </h5>
                        </div>
                        <div class="card-body">

                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NPM</th>
                                        <th>IPK</th>
                                        <th>Status Bekerja</th>
                                        <th>Cuti Semester</th>
                                        <th>Jumlah MK Mengulang</th>
                                        <th>Jumlah Organisasi</th>
                                        <th>Keterangan Lulus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($training as $row) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['NPM'] ?></td>
                                        <td><?= $row['IPK'] ?></td>
                                        <td><?= $row['status_bekerja'] ?></td>
                                        <td><?= $row['cuti_semester'] ?></td>
                                        <td><?= $row['jumlah_mk_diulang'] ?></td>
                                        <td><?= $row['jumlah_organisasi'] ?></td>
                                        <td><?= $row['ket_lulus'] ?></td>
                                        <td style="width: 100px;">
                                            <div class="btn btn-info" id="training_btn" data-id2='<?= $row['Id_training']?>'>
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="btn btn-danger" id="delete_training"
                                                data-id1='<?= $row['Id_training']?>'>
                                                <i class="fa fa-trash"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NPM</th>
                                        <th>IPK</th>
                                        <th>Status Bekerja</th>
                                        <th>Cuti Semester</th>
                                        <th>Jumlah MK Mengulang</th>
                                        <th>Jumlah Organisasi</th>
                                        <th>Keterangan Lulus</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

<!-- modal upload -->
<div class="modal fade" id="modal-upload">
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" style="font-weight: 100;">Upload Form</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" id="form-upload">
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="excel">File</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="excel" class="custom-file-input" id="excel">
                                <label class="custom-file-label" for="exampleInputFile">Choose file (xlsx, xls)</label>
                                <input type="hidden" value="data_training" name="data_input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="upload" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal tambah -->
<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" style="font-weight: 100;">Tambah Form</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" id="form-add">
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="excel">NPM</label>
                        <input type="text" name="npm" class="form-control" id="npm" placeholder="13.0000.00..">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="excel">IPK</label>
                        <input type="text" name="ipk" class="form-control" id="ipk" placeholder="3.00"  onkeypress="return isNumber(event)">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="excel">Status Bekerja</label>
                        <select name="status_bekerja" class="form-control select2bs4" style="width: 100%;"
                            id="status_bekerja" aria-placeholder="Ya / Tidak">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="number">Cuti Semester</label>
                        <select name="cuti_semester" class="form-control select2bs4" style="width: 100%;"
                            id="cuti_semester" aria-placeholder="Ya / Tidak">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="excel">Mata Kuliah diulang</label>
                        <input type="number" min_length="0" value="0" name="jumlah_mk_diulang" class="form-control" id="jumlah_mk_diulang"
                            placeholder="0">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="excel">Jumlah Organisasi</label>
                        <input type="number" min_length="0" value="0" name="jumlah_organisasi" class="form-control" id="jumlah_organisasi"
                            placeholder="0">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">Keterangan Lulus</label>
                        <select name="ket_lulus" class="form-control" id="get_ket_lulus" style="width: 100%;" aria-placeholder="Ya / Tidak">
                            <option value="1">Tepat Waktu</option>
                            <option value="2">Tidak Tepat Waktu</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal update -->
<div class="modal fade" id="update">
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" style="font-weight: 100;">UpdateForm</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" id="form-edit">
                <div class="modal-body">
                    <input type="hidden" name="id_training" class="form-control" id="get_id_training" placeholder="13.0000.00..">
                    <div class="form-group col-md-12">
                        <label for="excel">NPM</label>
                        <input type="text" name="npm" class="form-control" id="get_npm" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="ipk">IPK</label>
                        <input type="text" name="ipk" class="form-control" id="get_ipk" placeholder="3.00" onkeypress="return isNumber(event)" >
                    </div>
                    <div class="form-group col-md-12">
                        <label for="sts">Status Bekerja</label>
                        <select name="status_bekerja" class="form-control" style="width: 100%;" id="get_status_bekerja">
                        <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">Cuti Semester</label>
                        <select name="cuti_semester" class="form-control" style="width: 100%;"
                            id="get_cuti_semester" aria-placeholder="Ya / Tidak">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="excel">Mata Kuliah diulang</label>
                        <input type="number" min_length="0"  name="jumlah_mk_diulang" class="form-control" id="get_jumlah_mk_diulang"
                            placeholder="0">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="excel">Jumlah Organisasi</label>
                        <input type="number" min_length="0"  name="jumlah_organisasi" class="form-control" id="get_jumlah_organisasi"
                            placeholder="0">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">Keterangan Lulus</label>
                        <select name="ket_lulus" class="form-control" id="get_ket_lulus" style="width: 100%;" aria-placeholder="Ya / Tidak">
                            <option value="1">Tepat Waktu</option>
                            <option value="2">Tidak Tepat Waktu</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_update" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    upload_record();
    Insert_record();
    delete_record();
    get_record();
    update_record();
    delete_semua();
})

//get record

function get_record() {
    $(document).on('click', '#training_btn', function() {
        var ID1 = $(this).attr('data-id2');
        console.log(ID1);
        $.ajax({
            url: '<?= base_url('where-dtrain');?>',
            method: 'post',
            data: {
                id_training: ID1
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                $('#get_id_training').val(data[0]);
                $('#get_npm').val(data[1]);
                $('#get_ipk').val(data[2]);
                $('#get_status_bekerja').val(data[3]);
                $('#get_cuti_semester').val(data[4]);
                $('#get_jumlah_mk_diulang').val(data[5]);
                $('#get_jumlah_organisasi').val(data[6]);
                $('#get_ket_lulus').val(data[7]);
                $('#update').modal('show');
            }
        })
    })
}

// Update Record

function update_record() {
    $('#form-edit').submit(function(e) {
        var Updateid_testing = $('#get_id_training').val();
        var Updatenpm = $('#get_npm').val();
        var Updateipk = $('#get_ipk').val();
        // var Updatestatus_bekerja = $('#get_status_bekerja').val();
        // var Updatecuti_semester = $('#get_cuti_semester').val();
        // var Updatejumlah_mk_diulang = $('#get_jumlah_mk_diulang').val();
        // var Updatejumlah_organisasi = $('#get_jumlah_organisasi').val();
        // var Updateket_lulus         = $('#get_ket_lulus').val();

        console.log(Updateid_testing);

        if (Updateipk == "" || Updatenpm == "") {
            $('#up-message').html('please Fill in the Blanks');
            $('#update').modal('show');
        } else {
            $.ajax({
                url: '<?= base_url('edit-dtrain');?>',
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) { 
                    timer_reload();
                    Swal.fire('Sukses', 'Data telah diedit!', 'success');
                }
            })
        }
        e.preventDefault();
    })
}

// Delete Function

function delete_record() {
    $(document).on('click', '#delete_training', function() {
        var Delete_ID = $(this).attr('data-id1');
        console.log(Delete_ID);
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-primary m-2',
                cancelButton: 'btn btn-warning m-2'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?= base_url('delete-dtrain');?>',
                    method: 'post',
                    data: {
                        id_trainig: Delete_ID
                    },
                    success: function(data) {
                        console.log(data);
                    }
                })
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
                timer_reload();

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    })
}

function Insert_record() {
    $('#form-add').submit(function(e) {
        var npm = $('#npm').val();
        var ipk = $('#ipk').val();
        // var status_bekerja = $('#status_bekerja').val();
        // var cuti_semester = $('#cuti_semester').val();
        // var jumlah_mk_diulang = $('#jumlah_mk_diulang').val();
        // var jumlah_organisasi = $('#jumlah_organisasi').val();
        // var ket_lulus = $('#ket_lulus').val();

        if (npm == "" || ipk == "") {
            Swal.fire('Error', 'Please Fill in the Blanks', 'error');
        } else {
            $.ajax({
                url: '<?= base_url('tambah-dtrain');?>',
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    Swal.fire('Sukses', 'Data Ditambah !', 'success');
                    timer_reload();
                }
            })
        }
        e.preventDefault();
    })
}

function delete_semua() {
    $('#delete_all').click(function(e) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-primary m-2',
                cancelButton: 'btn btn-warning m-2'
            },
            buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                delete_all();
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
                timer_reload();

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    });
}

function delete_all() {
    $.ajax({
        url: "<?= base_url('delete-training-all');?>",
        type: "GET",
        success: function(data) {
            // var msg = JSON.parse(data);
            swalWithBootstrapButtons.fire('Sukses', 'Data telah dihapus!', 'success');
            timer_reload();
        },
        error: function(data) {
            swalWithBootstrapButtons.fire('Oops', 'Something when wrong!', 'error');
        }
    });
}


function upload_record() {
    $('#form-upload').submit(function(e) {
        //header form
        var excel = $('#excel').val();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success btn-sm',
                cancelButton: 'btn btn-secondary btn-sm'
            },
            buttonsStyling: true
        });


        if (excel != "") {
            $.ajax({
                url: "<?= base_url('upload-data');?>",
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    // var msg = JSON.parse(data);
                    swalWithBootstrapButtons.fire('Sukses', 'Upload file berhasil!',
                        'success');
                    timer_reload();
                    //  if(msg.statusCode==200)
                    // {
                    //   // alert(msg.Username);
                    //  Swal.fire('Sukses!', msg.pesan, 'success');
                    //      timer_reload();
                    // }else{
                    //  Swal.fire('Failed,', msg.pesan, 'info');

                    // }

                },
                error: function(data) {
                    swalWithBootstrapButtons.fire('Oops', 'Something when wrong!', 'error');
                }
            });

        } else {
            Swal.fire('Failed', 'Form belum terisi dengan benar!', 'error');


        }
        e.preventDefault();
    });
};

function timer_reload() {
    setTimeout(function() {
        window.location.href =
            "<?= base_url('data-training') ?>";
    }, 1700);
}


</script>