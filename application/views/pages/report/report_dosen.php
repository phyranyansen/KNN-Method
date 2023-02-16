
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
                    LAPORAN DATA DOSEN
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; font-weight: 600;">
                    JURUSAN <?= $label; ?>

                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; font-weight: 600;">
                    FAKULTAS TEKNIK ELEKTRO & TEKNOLOGI INFORMASI
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
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Fakultas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if($dsn!=null)
                {
                foreach ($dsn as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['Nip'] ?></td>
                        <td><?= $row['Nama'] ?></td>
                        <td><?= $row['Jenis_Kelamin'] ?></td>
                        <td><?= $row['Alamat'] ?></td>
                        <td><?= $row['Nama_Jurusan'] ?></td>
                        <td><?= $row['Nama_Fakultas'] ?></td>
                    </tr>
                <?php }}else{
                    echo "<tr style='text-align:center; color:red'><td colspan='7'>Data Tidak Ditemukan!</td></tr>";
                } ?>                
                
            </tbody>
        </table>
        
    </div>
</div>