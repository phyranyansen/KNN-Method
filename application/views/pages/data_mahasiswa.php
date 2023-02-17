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
                                        <th>NPM</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Jurusan</th>
                                        <th>Fakultas</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($mahasiswa as $row) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['NPM'] ?></td>
                                        <td><?= $row['Nama'] ?></td>
                                        <td><?= $row['jenis_kelamin'] ?></td>
                                        <td><?= $row['Alamat'] ?></td>
                                        <td><?= $row['Nama_Jurusan'] ?></td>
                                        <td><?= $row['Nama_Fakultas'] ?></td>
                                        <td><?php if($row['Status']<1){ ?><i class="bi bi-check-lg"  style="color:green"></i>  Aktif <?php } else {?> <i class="bi bi-x-lg" style="color:red"></i> Tidak Aktif <?php }?></td>
                                        <td style="width: fit-content;">
                                            <div class="btn btn-info btn-sm" id="btedit" data-id2='<?= $row['NPM']?>'>
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="btn btn-danger btn-sm" id="btdelete" data-id1='<?= $row['NPM']?>'>
                                                <i class="fa fa-trash"></i>
                                            </div>
                                            <small>
                                                <input type="checkbox" name="my-checkbox" data-bootstrap-switch checked>
                                            </small>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NPM</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Jurusan</th>
                                        <th>Fakultas</th>
                                        <th>Status</th>
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
                                <input type="hidden" value="data_testing" name="data_input">
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

<!-- modal delete -->

<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-dark">Delete Record</h3>
            </div>
            <div class="modal-body">
                <p> Do You Want to Delete the Record ?</p>
                <button type="button" id="btdelete_record" class="btn btn-success" data-id1=' '>Delete Now </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
            </div>
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
            <form action="#" id="form-upload">
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="date">Nama Mahasiswa</label>
                        <input type="text" class="form-control my-2" value="nama" placeholder="Nama Mahasiswa" id="nama">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">NPM</label>
                        <input type="text" class="form-control my-2" value="npm" placeholder="NPM" id="npm">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" style="width: 100%;" id="jenis_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">alamat</label>
                        <input type="text" class="form-control my-2" placeholder="Alamat" id="alamat">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">Jurusan</label>
                        <select name="jurusan" class="form-control" style="width: 100%;" id="jurusan">
                            <option value="1">Sisfor</option>
                            <option value="2">Elektro</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" id="btn_register" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<td></td>
<td></td>
<td></td>
<!-- modal edit -->

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
                    <div class="form-group col-md-12">
                        <label for="date">Nama Mahasiswa</label>
                        <input type="text" class="form-control my-2" placeholder="Nama Mahasiswa" id="get_nama">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">NPM</label>
                        <input type="text" class="form-control my-2" placeholder="NPM" id="get_npm">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" style="width: 100%;" id="get_jenis_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">alamat</label>
                        <input type="text" class="form-control my-2" placeholder="Alamat" id="get_alamat">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="date">Jurusan</label>
                        <select name="jurusan" class="form-control" style="width: 100%;" id="get_jurusan">
                            <option value="1">Sisfor</option>
                            <option value="2">Elektro</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" id="btn_update" class="btn btn-primary btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
$(document).ready(function() {

    get_record();
    Insert_record();
    delete_record();
    update_record();
    delete_semua();
    upload_record();
})



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
        url: "<?= base_url('delete-mahasiswa');?>",
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



//pengeluaran    
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
                url: "<?= base_url('upload-mahasiswa');?>",
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
}

//get record

function get_record() {
    $(document).on('click', '#btedit', function() {
        var ID1 = $(this).attr('data-id2');
        console.log(ID1);
        $.ajax({
            url: '<?= base_url('where-mhs');?>',
            method: 'post',
            data: {
                npm1: ID1
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                $('#get_npm').val(data[0]);
                $('#get_nama').val(data[1]);
                $('#get_jenis_kelamin').val(data[2]);
                $('#get_alamat').val(data[3]);
                $('#get_jurusan').val(data[4]);
                $('#update').modal('show');
            }
        })
    })
}

function update_record() {

    $(document).on('click', '#btn_update', function() {
        var Updatenpm = $('#get_npm').val();
        var Updatenama = $('#get_nama').val();
        var Updatejenis_kelamin = $('#get_jenis_kelamin').val();
        var Updatealamat = $('#get_alamat').val();
        var Updatejurusan = $('#get_jurusan').val();

        if (Updatenpm == "" || Updatenama == "") {
            $('#up-message').html('please Fill in the Blanks');
            $('#update').modal('show');
        } else {
            $.ajax({
                url: '<?= base_url('edit-mhs');?>',
                method: 'post',
                data: {
                    U_npm: Updatenpm,
                    U_nama: Updatenama,
                    U_jenis_kelamin: Updatejenis_kelamin,
                    U_alamat: Updatealamat,
                    U_jurusan: Updatejurusan
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
    $(document).on('click', '#btdelete', function() {

        var Delete_ID = $(this).attr('data-id1');

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
                    url: '<?= base_url('delete-mhs');?>',
                    method: 'post',
                    data: {
                        npm: Delete_ID
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
        var npm = $('#npm').val();
        var nama = $('#nama').val();
        var jenis_kelamin = $('#jenis_kelamin').val();
        var alamat = $('#alamat').val();
        var jurusan = $('#jurusan').val();

        if (npm == "" || nama == "" || jenis_kelamin == "" || alamat == "") {
            $('#message').html('Please Fill in the Blanks ');
        } else {
            $.ajax({
                url: '<?= base_url('tambah-mhs');?>',
                method: 'post',
                data: {
                    npm: npm,
                    nama: nama,
                    jenis_kelamin: jenis_kelamin,
                    alamat: alamat,
                    jurusan: jurusan
                },
                success: function(data) {
                    Swal.fire('Sukses', 'Data Ditambah !', 'success');
                    timer_reload();
                }
            })
        }

    })
    $(document).on('click', '#btn_close', function() {
        $('form').trigger('reset');
        $('#message').html('');
    })
}

//Get Particular Record

function timer_reload() {
    setTimeout(function() {
        window.location.href = "<?= base_url('mahasiswa') ?>";
    }, 1700);
}
</script>