
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
<li class="breadcrumb-item active">Report</li>
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
                          
                        </h5>
                        </div>
                        <div class="card-body">
                             
                            <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th style="width: 10px;">No.</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th style="text-align: center;">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; foreach($report as $row) { ?>
                            <tr>
                            <td style="width: 10px;"><?= $no++; ?></td>
                            <td><?= $row['kode_report'] ?></td>
                            <td><?= $row['nama_report'] ?></td>
                            <td><?= $row['keterangan'] ?></td>
                            <td style="text-align: center;">
                                <div class="btn btn-info" data-toggle="modal" data-target="#modal-<?= $row['kode_report'] ?>">
                                    <i class="fa fa-print"></i>
                                </div>
                            </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                            <th style="width: 10px;">No.</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th style="text-align: center;">Show</th>
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
