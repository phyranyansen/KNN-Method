
<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
    <br>
    <!-- <br> -->
<div class="row mb-2">
<div class="col-sm-6">
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
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
                    <form action="#" id="save-session">
                        <div class="card-header"  style="background-color:whitesmoke;">
                        <h5>
                            KNN-Method Proccess
                            <span class="float-right">
                                                <a class="nav-link" data-toggle="dropdown" href="#">
                                                <i class="bi bi-three-dots-vertical" style="color:grey"></i>
                                                </a>
                                                
                                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                                    <span class="dropdown-item dropdown-header">Menu</span>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-distance">
                                                    <i class="bi bi-calculator mr-2"></i> Ubah Nilai K
                                                    <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item dropdown-footer"></a>
                                                    </div>
                                          </span>
                        </h5>
                    </span>
                    <span><small>Proses Implementasi Algoritma K-Nearest Neighbor Untuk Memprediksi Kelulusan Mahasiswa</small></span>
                        </div>
                        <div class="card-body table-responsive">
                           
                        <div class="w-100">
                        <div class="wrapper-nav">
                            <nav class="tabbable">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" data-bs-target="#tab1" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><span id="alert-header">Dataset</span></a>
                                    <a class="nav-item nav-link" id="nav-entitas-tab" data-toggle="tab" data-bs-target="#tab2" href="#nav-entitas" role="tab" aria-controls="nav-entitas" aria-selected="false"><span id="alert-entitas">Initial Proccess</span></a>
                                    <a class="nav-item nav-link" id="nav-dokumen-tab" data-toggle="tab" href="#nav-dokumen" role="tab" aria-controls="nav-dokumen" aria-selected="false"><span id="alert-dokumen">Prediksi</span></a>
                                    <a class="nav-item nav-link" id="nav-kesimpulan-tab" data-toggle="tab" href="#nav-kesimpulan" role="tab" aria-controls="nav-kesimpulan" aria-selected="false"><span id="alert-kesimpulan">Kesimpulan</span></a>
                                
                                  </div>
                            </nav>
                        </div>
                        <div class="tab-content p-3" id="nav-tabContent">
                                <!-- tab header -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <table id="pengujian" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <td colspan="9"><span style="font-weight: bold;">Data Training</span>
                                                     
                                                        <small>
                                                        <br> Keterangan Lulus: <br>
                                                            <span style="font-weight: bold;"> 1</span> = Lulus Tepat Waktu, 
                                                            <span style="font-weight: bold;"> 2</span> = Lulus Tidak Tepat Waktu
                                                        </small> 
                                                    </td>
                                                    </tr>
                                                    <tr style="background-color: coral">
                                                    <th>No.</th>
                                                    <th>NPM</th>
                                                    <th>IPK</th>
                                                    <th>Status Bekerja</th>
                                                    <th>Cuti Semester</th>
                                                    <th>Jumlah MK Mengulang</th>
                                                    <th>Jumlah Organisasi</th>
                                                    <th>Keterangan Lulus</th>
                                                    <th>Keterangan</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                    $no=1;
                                                    foreach($training as $row) { ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $row['NPM'] ?></td>
                                                        <td><?= $row['IPK'] ?></td>
                                                        <td><?= $row['status_bekerja'] ?></td>
                                                        <td><?= $row['cuti_semester'] ?></td>
                                                        <td><?= $row['jumlah_mk_diulang'] ?></td>
                                                        <td><?= $row['jumlah_organisasi'] ?></td>
                                                        <td><?= $row['ket_lulus'] ?></td>
                                                        <td><?php  
                                                            if($row['ket_lulus']==1){
                                                                echo '<span>Lulus Tepat Waktu</span>';
                                                            } else {
                                                                echo '<span style="color:red">Lulus Tidak Tepat Waktu</span>';
                                                            }
                                                        ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                    </table> 
                                                <hr>
                                                <table id="pengujian1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th colspan="8"><span style="font-weight: bold;">Data Testing </span></th>
                                                </tr>
                                                <tr style="background-color: coral">
                                                <th>No.</th>
                                                <th>NPM</th>
                                                <th>IPK</th>
                                                <th>Status Bekerja</th>
                                                <th>Cuti Semester</th>
                                                <th>Jumlah MK Mengulang</th>
                                                <th>Jumlah Organisasi</th>
                                                <th>Keterangan Lulus</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                $no=1;
                                                foreach($testing as $row) { ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['NPM'] ?></td>
                                                    <td><?= $row['IPK'] ?></td>
                                                    <td><?= $row['status_bekerja'] ?></td>
                                                    <td><?= $row['cuti_semester'] ?></td>
                                                    <td><?= $row['jumlah_mk_diulang'] ?></td>
                                                    <td><?= $row['jumlah_organisasi'] ?></td>
                                                    <td style="font-weight: bold; text-align: center; color:red">?</td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                                </table> 
                                                </div>
                                                <?php if(!empty($testing)) { ?>
                                                <!-- tab entitas -->
                                                <div class="tab-pane fade" id="nav-entitas" role="tabpanel" aria-labelledby="nav-entitas-tab">
                                                    <table id="pengujian2" class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <td colspan="7"><span style="font-weight: bold;">Normalisasi  </span>
                                                         <br> <small>
                                                            Menghitung Normalisasi !
                                                            </small> 
                                                        </td>
                                                        </tr>
                                                        <tr  style="background-color: coral">
                                                        <th>No.</th>
                                                        <th>NPM</th>
                                                        <th>IPK</th>
                                                        <th>Status Bekerja</th>
                                                        <th>Cuti Semester</th>
                                                        <th>Jumlah MK Mengulang</th>
                                                        <th>Jumlah Organisasi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no=1;
                                                            foreach($normalisasi as $row) {
                                                             ?>
                                                            <tr>
                                                                <td><?= $no++;?></td>
                                                                <td><?= $row['NPM'] ?></td>
                                                                <td><?= $row['IPK'] ?></td>
                                                                <td><?= $row['status_bekerja'] ?></td>
                                                                <td><?= $row['cuti_semester'] ?></td>
                                                                <td><?= $row['jumlah_mk_diulang'] ?></td>
                                                                <td><?= $row['jumlah_organisasi'] ?></td>
                                                            </tr>
                                                        
                                                            <?php  } ?>
                                                        </tbody>
                                                        </table>
                                                        <hr>
                                                </div>

                                <!-- tab dokumen -->
                                <div class="tab-pane fade" id="nav-dokumen" role="tabpanel" aria-labelledby="nav-dokumen-tab">
                                <table id="pengujian3" class="table table-bordered table-striped">
                                      <thead>
                                         <tr>
                                           <td colspan="<?= count($testing)+9*2 ?>"><span style="font-weight: bold;">Euclidean Distance :</span> 
                                       
                                          <br>
                                            <small>
                                            Menghitung nilai K atau nilai tetangga terdekat 
                                        </small> 
                                        </td>
                                           </tr>
                                           <tr style="background-color: cadetblue;">
                                             <th>No.</th>
                                             <?php for($i=1; $i<=count($testing); $i++){ ?>
                                            <th>Distance <?=$i?></th>
                                            <th>K = <?= $this->session->userdata('nilai_K') ?></th>
                                            <?php } ?>
                                           </tr>
                                           </thead>
                                           <tbody>
                                        <?php
                                        $no = 0;
                                        $n = 1;
                                        $i = 0;
                                        $jum_lulus=[];
                                        $jum_tidak=[];
                                        $lulus_count=0;
                                        $tidak_count=0;
                                        $hasil_lulus=[];
                                        $hasil_tidak=[];
                                        
                                        $nilai_K = $this->session->userdata('nilai_K');
                                        foreach ($normalisasi as $row => $key) {  ?>
                                            <tr>
                                                <td><?= $n++; ?></td>
                                                <?php
                                                $data = [];
                                                $cek_k =[];
                                                for ($k = 0; $k < count($testing); $k++) {
                                                    if (!empty($distance[$k][$i])) {
                                                        $data[] = $distance[$k]; ?>
                                                <td><?php
                                                   $nearest = null;
                                                   $urut    = $data[$k];
                                                   sort($urut);
                                                   $get = 1;
                                                   foreach ($urut as $sort => $sort_x) {
                                                       if ($get == $nilai_K) {
                                                           $nearest = $sort_x;
                                                       }
                                                       $get++;
                                                   }

                                               
                                                   $ds = $distance[$k][$row];
                                                   if ($ds <= $nearest) {
                                                       if ($key['ket_lulus'] == 1) {
                                                           $jum_lulus[$k][]=$key['ket_lulus'];
                                                       } else {
                                                           $jum_tidak[$k][]=$key['ket_lulus'];
                                                       }
                                                       
                                                      
                                                    echo '<span style="background-color:yellow; font-weight:bold;">'. $distance[$k][$row].'</span>';
                                                   }else{
                                                    echo  $distance[$k][$row]; 
                                                   }
                                                
                                               ?></td>
                                                <td><?php

                                                            $nearest = null;
                                                            $urut    = $data[$k];
                                                          
                                                            sort($urut);
                                                            $get = 1;
                                                            foreach ($urut as $sort => $sort_x) {
                                                                if ($get == $nilai_K) {
                                                                    $nearest = $sort_x;
                                                                }
                                                                $get++;
                                                            }

                                                        
                                                            $ds = $distance[$k][$row];
                                                            if ($ds <= $nearest) {
                                                                if ($key['ket_lulus'] == 1) {
                                                                    $jum_lulus[$k][]=$key['ket_lulus'];
                                                                    $hasil_lulus[$k][] =$key['ket_lulus'];
                                                                    $lulus_count = $lulus_count + $key['ket_lulus'];
                                                                } else {
                                                                    $hasil_tidak[$k][] =$key['ket_lulus'];
                                                                    $jum_tidak[$k][]=$key['ket_lulus'];
                                                                    $tidak_count = $tidak_count + $key['ket_lulus'];
                                                                }
                                                                
                                                                echo  '<span style="background-color:yellow; font-weight:bold">'.$key['ket_lulus'].'</span>';
                                                                                                                                                                                        
                                                                }
                                                            
                                                            
                                                        
                                                            ?>
                                                        </td>
                                                <?php }
                                                } ?>
                                            </tr>
                                        <?php  } 
                                        
                                        ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                </div>

                                <!-- tab dokumen -->
                                <div class="tab-pane fade" id="nav-kesimpulan" role="tabpanel" aria-labelledby="nav-kesimpulan-tab">
                                <table id="kesimpulan" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <td colspan="<?= count($testing)+9*2 ?>"><span style="font-weight: bold;">Kesimpulan :</span><br>
                                                    <small>
                                                    Kesimpulan dari hasil prediksi ini ditentukan oleh banyaknya jumlah nilai K <strong>Lulus Tepat Waktu (1)</strong>  / <strong> Tidak Lulus Tepat Waktu (2)</strong> ,
                                                         yang paling banyak muncul berdasarkan Euclidean Distance !
                                                    </small> 
                                                </td>
                                                </tr>
                                                <tr style="background-color: cadetblue;">
                                                <th>No.</th>
                                                <th>NPM</th>
                                                <th>IPK</th> 
                                                <th>Status Bekerja</th>
                                                <th>Cuti Semester</th>
                                                <th>Jumlah MK Mengulang</th>
                                                <th>Jumlah Organisasi</th>
                                                <th>Keterangan Lulus</th>
                                                <th>Hasil Nilai K = <?= $this->session->userdata('nilai_K'); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                $no=1;
                                                $j=0;
                                                $prosentase_lulus = 0;
                                                $prosentase_tidak = 0;
                                                foreach($testing as $val => $row) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['NPM'] ?></td>
                                                    <td><?= $row['IPK'] ?></td>
                                                    <td><?= $row['status_bekerja'] ?></td>
                                                    <td><?= $row['cuti_semester'] ?></td>
                                                    <td><?= $row['jumlah_mk_diulang'] ?></td>
                                                    <td><?= $row['jumlah_organisasi'] ?></td>
                                                    <td>
                                                   <?php
                                                    
                                                        if(!empty($hasil_lulus[$val]) && !empty($hasil_tidak[$val])){
                                                          
                                                            if(count($hasil_lulus[$val]) > count($hasil_tidak[$val])){
                                                                 echo 'Lulus Tepat Waktu';
                                                                 $prosentase_lulus++;
                                                            }else{
                                                                 echo '<span style="color:red">Lulus Tidak Tepat Waktu</span>';
                                                                 $prosentase_tidak++;
                                                            }
                                                        }elseif(empty($hasil_lulus[$val])){
                                                            $show_lulus = 0;
                                                            if($show_lulus > count($hasil_tidak[$val])){
                                                                    echo 'Lulus Tepat Waktu';
                                                                    $prosentase_lulus++;
                                                                }else{
                                                                    echo '<span style="color:red">Lulus Tidak Tepat Waktu</span>';
                                                                    $prosentase_tidak++;
                                                            }
                                                        }elseif(empty($hasil_tidak[$val]))
                                                        {
                                                            $show_tidak = 0;
                                                            if(count($hasil_lulus[$val]) > $show_tidak){
                                                                    echo 'Lulus Tepat Waktu';
                                                                    $prosentase_lulus++;
                                                                }else{
                                                                echo '<span style="color:red">Lulus Tidak Tepat Waktu</span>';
                                                                $prosentase_tidak++;
                                                            }
                                                        }else{
                                                            $show_lulus = 0;
                                                            $show_tidak = 0;
                                                            $prosentase_lulus=0;
                                                            $prosentase_tidak=0;
                                                            echo '<span style="color:blue">Error Data Found!</span>';
                                                        }

                                                        ?>
                                                    </td>
                                                    <td>
                                                    <?php
                                                    if(!empty($hasil_lulus[$val]) && !empty($hasil_tidak[$val])){
                                                        echo 'Nilai (1) = <strong>'. count($hasil_lulus[$val]). '</strong><br> Nilai (2) = <strong>'. count($hasil_tidak[$val]).'</strong';
                                                    }elseif(empty($hasil_lulus[$val])){
                                                        $show_lulus = 0;
                                                        echo 'Nilai (1) = <strong>'. $show_lulus. '</strong><br> Nilai (2) = <strong>'. count($hasil_tidak[$val]).'</strong';
                                                    }elseif(empty($hasil_tidak[$val]))
                                                    {
                                                        $show_tidak = 0;
                                                        echo 'Nilai (1) = <strong>'. count($hasil_lulus[$val]). '</strong><br> Nilai (2) = <strong>'. $show_tidak.'</strong';
                                                   
                                                    }else{
                                                        $show_lulus = 0;
                                                        $show_tidak = 0;
                                                       
                                                        echo 'Nilai (1) = <strong>'. $show_lulus. '</strong><br> Nilai (2) = <strong>'. $show_tidak.'</strong';
                                                   
                                                    }
                                                    ?>
                                                    </td>
                                                </tr>
                                                <?php  } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="<?= count($testing)+9*2 ?>">
                                                        <div class="col-md-4">
                                                      <?php
                                                        $prosentase1 = ($prosentase_lulus/count($testing))*100;
                                                        $prosentase2 = ($prosentase_tidak/count($testing))*100;
                                                        echo '<br><strong> Jumlah Mahasiswa = '. count($testing).'</strong><br>';
                                                        echo 'Jumlah Lulus Tepat Waktu = '.$prosentase_lulus .'<br>';
                                                        echo 'Jumlah Lulus Tidak Tepat Waktu = '.$prosentase_tidak;
                                                    
                                                      ?>

                                                        </div>
                                                  </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="9">
                                                        <div class="col-md-4">
                                                            <div class="progress-group">
                                                             Persentase Lulus Tepat Waktu
                                                              <span class="float-right"><b><?= $prosentase1 ?></b>%</span>
                                                              <div class="progress progress-sm">
                                                              <div class="progress-bar bg-primary" style="width: <?= $prosentase1 ?>%"></div>
                                                              </div>
                                                              </div>
                                                              
                                                            </div>
                                                           <div class="col-md-4">
                                                            <div class="progress-group">
                                                                Persentase Lulus Tidak Tepat Waktu
                                                                <span class="float-right"><b><?= $prosentase2 ?></b>%</span>
                                                                <div class="progress progress-sm">
                                                                <div class="progress-bar bg-danger" style="width: <?= $prosentase2 ?>%"></div>
                                                                </div>
                                                                </div>
                                                           </div>

                                                    </td>
                                                </tr>
                                            </tfoot>
                                         </table> 
                                </div>

                                <?php } ?>
                            </div>
                    </div>
                         
                            
                            
                        </div>
                    </form>
          
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="modal fade" id="modal-distance">
<div class="modal-dialog modal-default">
<div class="modal-content">
<div class="modal-header">
    <p class="modal-title" style="font-weight: 100;">Change K-Value</p>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="#" id="form-nilai_k">
<div class="modal-body">
            <div class="form-group col-md-12">
                    <label for="excel">Nila K</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="number" name="nilai_K" min="1" placeholder="Enter K-Value" value="<?= $this->session->userdata('nilai_K') ?>" class="form-control" id="nilai_K">
                        </div>
                    </div>
                </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary btn-sm">Save</button>
    </div>
</form>
</div>
</div>
</div>

<script>
 $(document).ready(function() {

	$('#form-nilai_k').submit(function(e) {
            //header form
            var nilai                    = $('#nilai_K').val();

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success btn-sm',
                  cancelButton: 'btn btn-secondary btn-sm'
                },
                buttonsStyling: true
              });

              if(nilai!="")
              {
                  $.ajax({
                     url: "<?= base_url('change-k');?>",
                     type: "POST",
                     data:new FormData(this), 
                     processData:false,
                     contentType:false,
                     cache: false,
                     success: function(data){
                      swalWithBootstrapButtons.fire('Sukses', 'Nilai K telah diubah!', 'success');
                      timer_reload();
                      },
                     error : function(data) {
                      // showLoading();
                            swalWithBootstrapButtons.fire('Oops', 'Something when wrong!', 'error');
                           }
                        });   

              }else{
                swalWithBootstrapButtons.fire('Error', 'Silahkan mengisi nilai K!', 'error');
              }
                   
               e.preventDefault(); 
            });
        }); 

    function timer_reload()
    {
      setTimeout(function(){
            window.location.reload(1);
          }, 1700);
    }

  
</script>