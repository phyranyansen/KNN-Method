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

                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-user">
                                            <i class="bi bi-plus-circle mr-2"></i> Tambah Data
                                            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <!-- <a href="#" class="dropdown-item" data-toggle="modal"
                                            data-target="#modal-upload">
                                            <i class="bi bi-upload mr-2"></i> Upload Data
                                          
                                        </a> -->
                                        <!-- <a href="#" class="dropdown-item" id="delete_all">
                                            <i class="bi bi-trash mr-2"></i> Hapus Semua
                                        </a> -->
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
                                        <th>NIP</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($user as $row) { ?>
                                    <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?php if($row['NPM']==null){ echo '-';} echo $row['NPM']; ?></td>
                                    <td><?php if($row['NIP']==null){ echo '-';} echo $row['NIP']; ?></td>
                                    <td><?= $row['Username'] ?></td>
                                    <td><?= $row['Password'] ?></td>
                                    <td><?php if($row['Status']==0)
                                     { echo '<span style="color:red"><small>Not Activated!</small></span>'; }
                                     else{ echo '<span style="color:green"><small>Activated <i class="fa fa-check"></i></small></span>'; } ?></td>
                                    
                                        <td style="width: 100px;">
                                            <div class="btn btn-info" id="btedit" data-id2='<?= $row['Id_login']?>'>
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="btn btn-danger" id="btdelete1" data-id1='<?= $row['Id_login']?>'>
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
                                        <th>NIP</th>
                                        <th>Username</th>
                                        <th>Password</th>
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


<div class="modal fade" id="modal-user">
<div class="modal-dialog modal-default">
<div class="modal-content">
<div class="modal-header">
    <p class="modal-title" style="font-weight: 100;">User Form</p>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="#" id="form-user">
<div class="modal-body">
            <div class="form-group col-md-12">
                    <label for="excel">Username</label>
                    <input type="text" name="username" placeholder="Username" class="form-control" id="username">
                    <p><?php echo validation_errors(); ?></p>
                </div>
            <div class="form-group col-md-12">
                    <label for="excel">Password</label>
                    <input type="text" name="password" placeholder="Password" class="form-control" id="password">
                    <p><?php echo validation_errors(); ?></p>
                </div>
            <div class="form-group col-md-12">
                    <label for="excel">Confirm Password</label>
                    <input type="text" name="confpassword" placeholder="Confirm Password" class="form-control" id="confpassword">
                    <p><?php echo validation_errors(); ?></p>
                </div>
                <div class="form-group col-md-12">
                    <label for="date">NPM</label>
                    <select name="npm" class="form-control select2bs4" aria-placeholder="NPM" style="width: 100%;" id="npm">
                    <option></option>
                   <?php foreach($mhs as $row) { ?> 
                        <option value="<?= $row['NPM'] ?>"><?= $row['NPM'] ?></option>
                        <?php } ?>
                </select>
            </div>
                <div class="form-group col-md-12">
                    <label for="date">NIP</label>
                    <select name="nip" class="form-control select2bs4" aria-placeholder="NIP" style="width: 100%;" id="nip">
                    <option></option>
                    <?php foreach($dosen as $row) { ?>
                        <option value="<?= $row['Nip'] ?>"><?= $row['Nip'] ?></option>
                        <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-12">
                    <label for="date">Status</label>
                    <select name="status" class="form-control select2bs4" aria-placeholder="Status Akun" style="width: 100%;" id="status">
                    <option value="1">Activated</option>
                    <option value="0">Not Activated</option>
            </select>
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

<!-- modal update -->

<div class="modal fade" id="update">
<div class="modal-dialog modal-default">
<div class="modal-content">
<div class="modal-header">
    <p class="modal-title" style="font-weight: 100;">User Form</p>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="#" id="form-user">
<div class="modal-body">
            <div class="form-group col-md-12">
                    <label for="excel">Username</label>
                    <input type="hidden" name="id_login" id="id_login">
                    <input type="text" name="username" placeholder="Username" class="form-control" id="username">
                    <p><?php echo validation_errors(); ?></p>
                </div>
            <div class="form-group col-md-12">
                    <label for="excel">Password</label>
                    <input type="text" name="password" placeholder="Password" class="form-control" id="password">
                    <p><?php echo validation_errors(); ?></p>
                </div>
                <div class="form-group col-md-12">
                    <label for="date">NPM</label>
                    <select name="npm" class="form-control select2bs4" aria-placeholder="NPM" style="width: 100%;" id="npm">
                    <option></option>
                   <?php foreach($mhs as $row) { ?> 
                        <option value="<?= $row['NPM'] ?>"><?= $row['NPM'] ?></option>
                        <?php } ?>
                </select>
            </div>
                <div class="form-group col-md-12">
                    <label for="date">NIP</label>
                    <select name="nip" class="form-control select2bs4" aria-placeholder="NIP" style="width: 100%;" id="nip">
                    <option></option>
                    <?php foreach($dosen as $row) { ?>
                        <option value="<?= $row['Nip'] ?>"><?= $row['Nip'] ?></option>
                        <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-12">
                    <label for="date">Status</label>
                    <select name="status" class="form-control select2bs4" aria-placeholder="Status Akun" style="width: 100%;" id="status">
                    <option value="1">Activated</option>
                    <option value="0">Not Activated</option>
            </select>
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

<script>
$(document).ready(function() {
    delete_record();
    get_record();
    update_record();
})

$(document).ready(function() {
	$('#form-user').submit(function(e) {
            //header form
            var username       = $('#username').val();
            var password       = $('#password').val();
            var confpassword   = $('#confpassword').val();
            var status         = $('#status').val();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success btn-sm',
                  cancelButton: 'btn btn-secondary btn-sm'
                },
                buttonsStyling: true
              });

         
        if(username!="" || password!="" || status!="")
            {
                $.ajax({
                   url: "<?= base_url('add-user');?>",
                   type: "POST",
                   data:new FormData(this), 
                   processData:false,
                   contentType:false,
                   cache: false,
                   success: function(data){
                    var msg = JSON.parse(data);
                    // swalWithBootstrapButtons.fire('Sukses', 'Upload file berhasil!', 'success');
                    // timer_reload();
                         if(msg.statusCode==200)
                        {
                          // alert(msg.Username);
                         Swal.fire('Sukses!', msg.pesan, 'success');
                             timer_reload();
                        }else{
                         Swal.fire('Failed,', msg.pesan, 'info');

                        }
                    
                    },
                   error : function(data) {
                          swalWithBootstrapButtons.fire('Oops', 'Something when wrong!', 'error');
                         }
                      });   
                   
            } else {
              Swal.fire('Failed', 'Form belum terisi dengan benar!', 'error');
          
                
             }
               e.preventDefault(); 
            });
        }); 

     

//get record

function get_record() {
    $(document).on('click', '#btedit', function() {
        var ID1 = $(this).attr('data-id2');
        console.log(ID1);
        $.ajax({
            url: '<?= base_url('aplication/where_user');?>',
            method: 'post',
            data: {
                id_login: ID1
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                $('#id_login').val(data[0]);
                $('#npm').val(data[1]);
                $('#nip').val(data[2]);
                $('#username').val(data[3]);
                $('#password').val(data[4]);
                $('#status').val(data[5]);
                $('#update').modal('show');
            }
        })
    })
}

// Update Record

function update_record() {

    $('#form-edit').submit(function(e) {
        // var Updateid_matkul = $('#get_id_matkul').val();
        // var Updateid_nilai = $('#get_id_nilai').val();
        // var Updatenpm = $('#get_npm').val();
        // var Updatenip = $('#get_nip').val();
        // var Updatenilai = $('#get_nilai').val();
        // var Updategrade = $('#get_grade').val();
        console.log(Updateid_matkul);

            $.ajax({
                url: '<?= base_url('aplication/edit_user');?>',
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
                    url: '<?= base_url('delete-user');?>',
                    method: 'post',
                    data: {
                        id_login: Delete_ID
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

function timer_reload()
    {
      setTimeout(function(){
        window.location.href = "<?= base_url('security') ?>";
          }, 1700);
    }
</script>