
    <!-- modal report penerimaan -->
<div class="modal fade" id="modal-RP_KNN">
<div class="modal-dialog modal-default">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title">Report Params </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<!-- target="_blank" -->
<form action="#" id="params-pengujian" >
<div class="modal-body">
        <div class="form-group col-md-12">
            <label for="date">Nilai K</label>
            <input type="number" class="form-control" name="nilai_k" min="1" placeholder="Nilai K" value="<?= $this->session->userdata('nilai_K') ?>" id="nilai_k">
        </div>
        <div class="form-group col-md-12">
            <label for="date">Mahasiswa</label>
                <select name="npm" class="form-control select2bs4" style="width: 100%;" id="npm">
                    <option value="%">Semua</option>
                    <?php foreach($testing as $row) { ?>
                     <option value="<?= $row['NPM'] ?>"><?= $row['NPM'] ?></option>
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
	$('#params-pengujian').submit(function(e) {
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
                   url: "<?= base_url('aplication/report_pengujian');?>",
                   type: "POST",
                   data:new FormData(this), 
                   processData:false,
                   contentType:false,
                   cache: false,
                   success: function(data){
                    showloading();
                    },
                   error : function(data) {
                    // showLoading();
                          swalWithBootstrapButtons.fire('Oops', 'Something when wrong!', 'error');
                         }
                      });   
                   
               e.preventDefault(); 
            });
        }); 




        function showloading()
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
                window.location.href = '<?= base_url('report-preview') ?>';
            }
            }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
            })
        }
        

        document.getElementById("show")
        .addEventListener('click', (event) => {
           loading();
        });


   
    function timer_reload()
    {
      setTimeout(function(){
            window.location.reload(1);
          }, 1400);
    }

  </script>