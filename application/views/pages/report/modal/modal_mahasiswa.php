
    <!-- modal report penerimaan -->
<div class="modal fade" id="modal-RP_MHS">
<div class="modal-dialog modal-default">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title">Report Params </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<!-- target="_blank" -->
<form action="#" id="params-mhs" >
<div class="modal-body">
        <div class="form-group col-md-12">
            <label for="date">Mahasiswa</label>
                <select name="mhs" class="form-control select2bs4" style="width: 100%;" id="mhs">
                    <option value="%">Semua</option>
                    <?php foreach($mhs as $row) { ?>
                     <option value="<?= $row['NPM'] ?>"><?= $row['NPM'] ?></option>
                     <?php } ?>
                </select>
        </div>
        <div class="form-group col-md-12">
            <label for="date">Jurusan</label>
                <select name="jurusan" class="form-control select2bs4" style="width: 100%;" id="jurusan">
                    <option value="%">Semua</option>
                    <?php foreach($jurusan as $row) { ?>
                     <option value="<?= $row['Nama_Jurusan'] ?>"><?= $row['Nama_Jurusan'] ?></option>
                     <?php } ?>
                </select>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="show">View</button>
    </div>
</form>
</div>
</div>
</div>


<script>
    $(document).ready(function() {
	$('#params-mhs').submit(function(e) {
            //header form
            // var item                    = $('#item').val();

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success btn-sm',
                  cancelButton: 'btn btn-secondary btn-sm'
                },
                buttonsStyling: true
              });

                $.ajax({
                   url: "<?= base_url('report-mhs');?>",
                   type: "POST",
                   data:new FormData(this), 
                   processData:false,
                   contentType:false,
                   cache: false,
                   success: function(data){
                    showloading_mhs();
                    },
                   error : function(data) {
                    // showLoading();
                          swalWithBootstrapButtons.fire('Oops', 'Something when wrong!', 'error');
                         }
                      });   
                   
               e.preventDefault(); 
            });
        }); 




        function showloading_mhs()
        {
            let timerInterval
            Swal.fire({
            title: 'Loading...',
            html: 'Harap tunggu!',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval);
                window.location.href = '<?= base_url('mhs-preview') ?>';
            }
            }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
            })
        }
        

    //     document.getElementById("show")
    //     .addEventListener('click', (event) => {
    //        loading();
    //     });


   
    // function timer_reload()
    // {
    //   setTimeout(function(){
    //         window.location.reload(1);
    //       }, 1400);
    // }

  </script>