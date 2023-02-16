
<style type="text/css">
    .table {
        width: 100%;
        border-spacing: 0;
        /* border-collapse: collapse; */
        border-color: #000;
        margin-left: auto;
        margin-right: auto;
        white-space: nowrap;
        /* padding-right: 5%; */

    }

    .table tr:first-child th,
    .table tr:first-child td {
        border-top: 1px solid #000;
        /* border-bottom: none; */


    }

    .table tr th:first-child,
    .table tr td:first-child {
        border-left: 1px solid #000;
    }

    .table tr th,
    .table tr td {
        border-right: 1px solid #000;
        border-bottom: 1px solid #000;
        padding: 4px;
        vertical-align: top;
        width: 1px;
        font-size: small;
        white-space: nowrap;


    }
 
/* body {
  padding: .5in;
} */
    .watermark{
    color:grey;
    /* background-color:rgba(255, 0, 0, 0.5); */
    height:50px;
    width:250px;
    display:flex;
    align-items:center;
    justify-content:center;
    position:fixed;
    bottom:5px;
    right:5px;
    }
</style>

<div class="col-xl-auto">
    <!-- <center> -->
    <div id="printableArea">
        <table style="border: none; text-align:center; font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td>
                <div class="watermark">
                Report From KNN-Method Site
                </div>
                </td>
            </tr>
            <tr></tr>
        </table>
   
        <center>
            <table align="center" style="border: none; text-align:center; font-family: Arial, Helvetica, sans-serif;" class="center">
                <tr>
                    <td style="font-size: 20px; font-weight: bold;">
                    LAPORAN HASIL ANALISIS PREDIKSI <br> KELULUSAN MAHASISWA ALGORITMA K-NEAREST NEIGHBOR
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 20px; font-weight: bold;">
                    <?php if($this->session->userdata('npm')=='%'){
                        echo 'MAHASISWA (SEMUA)';
                    }else{
                        echo 'MAHASISWA ('. $this->session->userdata('npm') .')';

                    } ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; font-weight: 600;">
                    JURUSAN SISTEM INFORMASI
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; font-weight: 600;">
                    <?= $universitas['Nama_Universitas']; ?> <?= date('Y') ?>
                    </td>
                </tr>
            </table>
        </center>
       
        <table border="1" id="data-table" class="table table-bordered" style="margin-top: 1%;">
            <thead style="background-color: whitesmoke; position: relative;">
                <tr>
                    <td colspan="<?= count($testing) + 8; ?>" style="text-align: left;"><span style="font-weight: bold;">Data Testing </span></td>
                </tr>
                <tr>
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
                $no = 1;
                foreach ($testing as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['NPM'] ?></td>
                        <td><?= $row['IPK'] ?></td>
                        <td><?= $row['cuti_semester'] ?></td>
                        <td><?= $row['status_bekerja'] ?></td>
                        <td><?= $row['jumlah_mk_diulang'] ?></td>
                        <td><?= $row['jumlah_organisasi'] ?></td>
                        <td>?</td>
                    </tr>
                <?php } ?>
                <tr style="background-color: whitesmoke;">
                    <td colspan="<?= count($testing) + 8; ?>" style="text-align: left;"><span style="font-weight: bold;">Data Training </span></td>
                </tr>
                <?php
                $no = 1;
                foreach ($training as $row) {
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
                            if ($row['ket_lulus'] == 1) {
                                echo '<span>Lulus Tepat Waktu</span>';
                            } else {
                                echo '<span style="color:red">Lulus Tidak Tepat Waktu</span>';
                            }
                            ?>
                        </td>
                    </tr>
                <?php  } ?>
                <tr style="background-color: whitesmoke;">
                    <td colspan="<?= count($testing) + 8; ?>" style="text-align: left;"><span style="font-weight: bold;">Normalisasi </span> </td>
                </tr>
                <?php
               if(!empty($testing)) {
                $no = 1;
                foreach ($normalisasi as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['NPM'] ?></td>
                        <td><?= $row['IPK'] ?></td>
                        <td><?= $row['status_bekerja'] ?></td>
                        <td><?= $row['cuti_semester'] ?></td>
                        <td><?= $row['jumlah_mk_diulang'] ?></td>
                        <td><?= $row['jumlah_organisasi'] ?></td>
                        <td></td>
                    </tr>
                <?php  } ?>
                
                
            </tbody>
        </table>
        <table border="1" id="data-table" class="table table-bordered" style="margin-top: 1%; table-layout: auto;">
            <thead>
                <tr style="background-color: whitesmoke;">
                        <th colspan="<?= count($testing) +9*2; ?>"><span style="font-weight: bold;">Euclidean Distance (Menghitung Nilai Tetangga Terdekat)</span> </th>
                    </tr>
                    <tr>
                        <th>No.</th>
                        <?php for ($i = 1; $i <= count($testing); $i++) { ?>
                            <th>Distance <?= $i ?></th>
                            <th style="width: fit-content;">K = <?= $this->session->userdata('nilai_K') ?></th>
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
                $lulus_count=[];
                $tidak_count=[];
                $hasil_lulus=[];
                $hasil_tidak=[];
                $nilai_K = $this->session->userdata('nilai_K');
                foreach ($normalisasi as $row => $key) {  ?>
                    <tr style="table-layout:fixed">
                        <td><?= $n++; ?></td>
                        <?php
                        $data = [];
                        for ($k = 0; $k < count($testing); $k++) {
                            if (!empty($distance[$k][$i])) {
                                $data[] = $distance[$k]; ?>
                        <td><?= $distance[$k][$row]; ?></td>
                        <td>
                                    <?php

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
                                            $jum_lulus[$k][]    =$key['ket_lulus'];
                                            $hasil_lulus[$k][]  =$key['ket_lulus'];
                                        } else {
                                            $jum_tidak[$k][]    =$key['ket_lulus'];
                                            $hasil_tidak[$k][]  =$key['ket_lulus'];
                                        }
                                        
                                        echo $key['ket_lulus']."\t";
                                       
                                       
                                     
                                    }

                                
                                    ?>
                                </td>
                        <?php }
                        } ?>
                    </tr>
                <?php  } ?>
                <tr>
                    <td colspan="<?= count($testing) +9*2; ?>" style="border-top: 1px solid #000;"><span style="font-weight: bold;">Kesimpulan :</span><br>
                        <small>
                            Kesimpulan dari hasil prediksi ini ditentukan oleh banyaknya jumlah nilai K Lulus/Tidak Lulus, yang paling banyak muncul berdasarkan Euclidean Distance !
                        </small>
                    </td>
                </tr>
                <tr>
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
                <?php
                $no = 1;
                $j = 0;
                foreach ($testing as $val => $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['NPM'] ?></td>
                        <td><?= $row['IPK'] ?></td>
                        <td><?= $row['cuti_semester'] ?></td>
                        <td><?= $row['status_bekerja'] ?></td>
                        <td><?= $row['jumlah_mk_diulang'] ?></td>
                        <td><?= $row['jumlah_organisasi'] ?></td>
                        <td>
                        <?php
                                                        if(!empty($hasil_lulus[$val]) && !empty($hasil_tidak[$val])){
                                                            // $show_lulus = count($jum_lulus[$val]);
                                                            // $show_tidak = count($jum_tidak[$val]);
                                                            if(count($hasil_lulus[$val]) > count($hasil_tidak[$val])){
                                                            echo 'Lulus Tepat Waktu';
                                                            }else{
                                                            echo '<span style="color:red">Lulus Tidak Tepat Waktu</span>';
                                                            }
                                                        }elseif(empty($hasil_lulus[$val])){
                                                            $show_lulus = 0;
                                                            if($show_lulus > count($hasil_tidak[$val])){
                                                                echo 'Lulus Tepat Waktu';
                                                                }else{
                                                                echo '<span style="color:red">Lulus Tidak Tepat Waktu</span>';
                                                            }
                                                        }elseif(empty($hasil_tidak[$val]))
                                                        {
                                                            $show_tidak = 0;
                                                            if(count($hasil_lulus[$val]) > $show_tidak){
                                                                echo 'Lulus Tepat Waktu';
                                                                }else{
                                                                echo '<span style="color:red">Lulus Tidak Tepat Waktu</span>';
                                                            }
                                                        }else{
                                                            $show_lulus = 0;
                                                            $show_tidak = 0;
                                                           
                                                            echo '<span style="color:blue">Error Data Found!</span>';
                                                        }

                                                        ?>
                        </td>
                        <td colspan="1">
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
                <?php }else{ ?>
                    <tr>
                        <td colspan="9" style="text-align: center; ">
                            <p>Data Testing Tidak Tersedia!</p>
                        </td>
                    </tr>
            <?php  } ?>
            </tbody>
               
        </table>
    </div>
</div>