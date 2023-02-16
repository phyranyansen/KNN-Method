
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
                            <span style="float: right;">
                            <a href="<?= base_url('home') ?>" class="btn btn-outline-secondary btn-sm">
                                <i class="fa fa-home"></i>
                                Kembali
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modal-user">
                                <i class="fa fa-plus"></i>
                                Tambah
                            </a>
                        </span>
                        </h5>
                        </div>
                        <div class="card-body">
                            <div style="text-align: center;">
                               
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
                            <?php 
                            $no=1;
                            foreach($user as $row) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?php if($row['NPM']==null){ echo '-';} echo $row['NPM']; ?></td>
                                <td><?php if($row['NIP']==null){ echo '-';} echo $row['NIP']; ?></td>
                                <td><?= $row['Username'] ?></td>
                                <td><?= $row['Password'] ?></td>
                                <td><?php if($row['Status']==null){ echo '<span></span>';} echo $row['NIP']; ?></td>
                                <td style="width: 100px;">
                                <div class="btn btn-info" data-toggle="modal" data-target="#modal-RP_RECEIVING_RECORD">
                                    <i class="fa fa-edit"></i>
                                </div>
                                <div class="btn btn-danger" data-toggle="modal" data-target="#modal-RP_RECEIVING_RECORD">
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
                    <!-- <?php foreach($kategori as $row) { ?> -->
                        <option value=""></option>
                        <!-- <?php } ?> -->
                        <option value=""></option>
                </select>
            </div>
                <div class="form-group col-md-12">
                    <label for="date">NIP</label>
                    <select name="nip" class="form-control select2bs4" aria-placeholder="NIP" style="width: 100%;" id="nip">
                    <!-- <?php foreach($kategori as $row) { ?> -->
                        <option value=""></option>
                        <!-- <?php } ?> -->
                        <option value=""></option>
            </select>
        </div>
        <div class="form-group col-md-12">
                    <label for="date">Status</label>
                    <select name="status" class="form-control select2bs4" aria-placeholder="Status Akun" style="width: 100%;" id="status">
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
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



 function timer_reload()
    {
      setTimeout(function(){
        window.location.href = "<?= base_url('security') ?>";
          }, 1500);
    }


       
  </script>