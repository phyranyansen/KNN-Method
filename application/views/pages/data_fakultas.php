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
                                        <th>Kode</th>
                                        <th>Nama Fakultas</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($fakultas as $row) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['Kode_Fakultas'] ?></td>
                                        <td><?= $row['Nama_Fakultas'] ?></td>
                                        <td style="width: 100px;">
                                            <div class="btn btn-info" id="btedit" data-id2='<?= $row['Id_Fakultas']?>'>
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="btn btn-danger" id="btdelete1"
                                                data-id1='<?= $row['Id_Fakultas']?>'>
                                                <i class="fa fa-trash"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode</th>
                                        <th>Nama Fakultas</th>
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
            <form action="#" id="form-upload">
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="excel">Kode Fakultas</label>
                        <input type="text" class="form-control" id="kode_fakultas" placeholder="FT">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="excel">Nama Fakultas</label>
                        <input type="text" class="form-control" id="nama_fakultas" placeholder="Fakultas">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn_register" class="btn btn-primary btn-sm">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- modal tambah -->
<div class="modal fade" id="update">
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" style="font-weight: 100;">Edit Form</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" id="form-upload">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="get_id_fakultas" placeholder="FT">
                    <div class="form-group col-md-12">
                        <label for="excel">Kode Fakultas</label>
                        <input type="text" class="form-control" id="get_kode_fakultas" placeholder="FT">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="excel">Nama Fakultas</label>
                        <input type="text" class="form-control" id="get_nama_fakultas" placeholder="Fakultas">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn_register" class="btn btn-primary btn-sm">Save</button>
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
        url: "<?= base_url('delete-fakultas');?>",
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
            url: '<?= base_url('where-fts');?>',
            method: 'post',
            data: {
                id_fakultas1: ID1
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                $('#get_id_fakultas').val(data[0]);
                $('#get_kode_fakultas').val(data[1]);
                $('#get_nama_fakultas').val(data[2]);
                $('#update').modal('show');
            }
        })
    })
}

// Update Record

function update_record() {

    $(document).on('click', '#btn_update', function() {
        var Updateid_fakultas = $('#get_id_fakultas').val();
        var Updatekode_fakultas = $('#get_kode_fakultas').val();
        var Updatenama_fakultas = $('#get_nama_fakultas').val();
        console.log(Updatekode_fakultas);

        if (Updatekode_fakultas == "" || Updatenama_fakultas == "") {
            $('#up-message').html('please Fill in the Blanks');
            $('#update').modal('show');
        } else {
            $.ajax({
                url: '<?= base_url('edit-fts');?>',
                method: 'post',
                data: {
                    U_id_fakultas: Updateid_fakultas,
                    U_kode_fakultas: Updatekode_fakultas,
                    U_nama_fakultas: Updatenama_fakultas,
                },
                success: function(data) {
                    $('#update').modal('show');
                    timer_reload()
                    Swal.fire('Sukses', 'Data telah diedit!', 'success');
                }
            })
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
                    url: '<?= base_url('delete-fts');?>',
                    method: 'post',
                    data: {
                        id_fakultas: Delete_ID
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
    $(document).on('click', '#btn_register', function() {
        var kode_fakultas1 = $('#kode_fakultas').val();
        var nama_fakultas1 = $('#nama_fakultas').val();

        if (kode_fakultas1 == "" || nama_fakultas1 == "") {
            Swal.fire('Error', 'Please Fill in the Blanks', 'error');
        } else {
            $.ajax({
                url: '<?= base_url('tambah-fts');?>',
                method: 'post',
                data: {
                    kode_fakultas: kode_fakultas1,
                    nama_fakultas: nama_fakultas1,
                },
                success: function(data) {
                    Swal.fire('Sukses', 'Data Ditambah !', 'success');
                    timer_reload();
                }
            })
        }

    })
}

function timer_reload() {
    setTimeout(function() {
        window.location.href = "<?= base_url('fakultas') ?>";
    }, 1700);
}
</script>