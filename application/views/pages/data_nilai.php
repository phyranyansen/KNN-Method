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
                        <li class="breadcrumb-item active">Data Master</li>
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
                                        <!-- <a href="#" class="dropdown-item" data-toggle="modal"
                                            data-target="#modal-upload">
                                            <i class="bi bi-upload mr-2"></i> Upload Data
                                          
                                        </a> -->
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
                                        <th>NPM Mhs</th>
                                        <th>Nama Mhs</th>
                                        <th>Matkul</th>
                                        <th>Nilai</th>
                                        <th>Grade</th>
                                        <th>Dosen NIP</th>
                                        <th>Nama Dosen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($nilai as $row) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['NPM'] ?></td>
                                        <td><?= $row['mhs'] ?></td>
                                        <td><?= $row['Nama_Matkul'] ?></td>
                                        <td><?= $row['Nilai'] ?></td>
                                        <td><?= $row['Grade'] ?></td>
                                        <td><?= $row['NIP'] ?></td>
                                        <td><?= $row['dosen'] ?></td>
                                        <td style="width: 100px;">
                                            <div class="btn btn-info" id="btedit" data-id2='<?= $row['Id_Nilai']?>'>
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="btn btn-danger" id="btdelete1"
                                                data-id1='<?= $row['Id_Nilai']?>'>
                                                <i class="fa fa-trash"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NPM Mhs</th>
                                        <th>Nama Mhs</th>
                                        <th>Matkul</th>
                                        <th>Nilai</th>
                                        <th>Grade</th>
                                        <th>Dosen NIP</th>
                                        <th>Nama Dosen</th>
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
                        <label for="matkul">Matkul</label>
                        <select name="matkul" class="form-control select2bs4" style="width: 100%;" id="matkul">
                            <?php foreach($matkul as $row) { ?>
                            <option value="<?= $row['Id_Matkul'] ?>"><?= $row['Nama_Matkul'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="npm">NPM</label>
                        <select name="npm" class="form-control select2bs4" style="width: 100%;" id="npm">
                            <?php foreach($mhs as $row) { ?>
                            <option value="<?= $row['NPM'] ?>"><?= $row['NPM'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="nip">NIP</label>
                        <select name="nip" class="form-control select2bs4" style="width: 100%;" id="nip">
                            <?php foreach($dosen as $row) { ?>
                            <option value="<?= $row['Nip'] ?>"><?= $row['Nip'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="nilai">Nilai</label>
                        <input type="text" name="nilai" class="form-control" id="nilai" placeholder="3.00" onkeypress="return isNumber(event)" >
                    </div>
                    <div class="form-group col-md-12">
                        <label for="grade">Grade</label>
                        <input type="text" name="grade" class="form-control" id="grade" placeholder="A+">
                    </div>

                    <div class=" modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn_register" class="btn btn-primary btn-sm">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- modal update -->

<div class="modal fade" id="update">
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" style="font-weight: 100;">Edit Form</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" id="form-edit">
                <div class="modal-body">
                    <input type="hidden" name="id_nilai" class="form-control" id="get_id_nilai" placeholder="FT">
                    <div class="form-group col-md-12">
                        <label for="matkul">Matkul</label>
                        <select name="matkul" class="form-control select2bs4" style="width: 100%;" id="get_id_matkul">
                            <?php foreach($matkul as $row) { ?>
                            <option value="<?= $row['Id_Matkul'] ?>"><?= $row['Nama_Matkul'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="npm">NPM</label>
                        <select name="npm" class="form-control select2bs4" style="width: 100%;" id="get_npm">
                            <?php foreach($mhs as $row) { ?>
                            <option value="<?= $row['NPM'] ?>"><?= $row['NPM'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="nip">NIP</label>
                        <select name="nip" class="form-control select2bs4" style="width: 100%;" id="get_nip">
                            <?php foreach($dosen as $row) { ?>
                            <option value="<?= $row['Nip'] ?>"><?= $row['Nip'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="nilai">Nilai</label>
                        <input type="text" name="nilai" class="form-control" id="get_nilai" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="grade">Grade</label>
                        <input type="text" name="grade" class="form-control" id="get_grade" placeholder="">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn_update" class="btn btn-primary btn-sm">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
$(document).ready(function() {
    Insert_record();
    delete_record();
    get_record();
    update_record();
    delete_semua();
})

//Delete all

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
        url: "<?= base_url('delete-matkul');?>",
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

//get record

function get_record() {
    $(document).on('click', '#btedit', function() {
        var ID1 = $(this).attr('data-id2');
        console.log(ID1);
        $.ajax({
            url: '<?= base_url('where-nl');?>',
            method: 'post',
            data: {
                id_nilai: ID1
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                $('#get_id_nilai').val(data[0]);
                $('#get_id_matkul').val(data[1]);
                $('#get_npm').val(data[2]);
                $('#get_nip').val(data[3]);
                $('#get_nilai').val(data[4]);
                $('#get_grade').val(data[5]);
                $('#update').modal('show');
            }
        })
    })
}

// Update Record

function update_record() {

    $('#form-edit').submit(function(e) {
        var Updateid_matkul = $('#get_id_matkul').val();
        var Updateid_nilai = $('#get_id_nilai').val();
        var Updatenpm = $('#get_npm').val();
        var Updatenip = $('#get_nip').val();
        var Updatenilai = $('#get_nilai').val();
        var Updategrade = $('#get_grade').val();
        console.log(Updateid_matkul);

        if (Updateid_nilai == "" || Updatenilai == "") {
            $('#up-message').html('please Fill in the Blanks');
            $('#update').modal('show');
        } else {
            $.ajax({
                url: '<?= base_url('edit-nl');?>',
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    timer_reload()
                    Swal.fire('Sukses', 'Data telah diedit!', 'success');
                }
            });

            e.preventDefault();
        }
    })
}

// Delete Function

function delete_record() {
    $(document).on('click', '#btdelete1', function() {
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
                    url: '<?= base_url('delete-nl');?>',
                    method: 'post',
                    data: {
                        id_nilai: Delete_ID
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
        var id_matkul = $('#id_matkul').val();
        var npm = $('#npm').val();
        var nip = $('#nip').val();
        var nilai = $('#nilai').val();
        var grade = $('#grade').val();
        if (id_matkul == "" || npm == "" || nip=="" || nilai=="" || grade=="") {
            Swal.fire('Error', 'Please Fill in the Blanks', 'error');
        } else {
            $.ajax({
                url: '<?= base_url('tambah-nl');?>',
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

function timer_reload() {
    setTimeout(function() {
        window.location.href =
            "<?= base_url('nilai                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ') ?>";
    }, 1700);
}
</script>