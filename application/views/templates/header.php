
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KNN-Method</title>
<link rel="icon" type="image/x-icon" href="<?= base_url().'assets/img/image-front.png'; ?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/fontawesome-free/css/all.min.css';?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- DataTables AdminLTE-->
 <link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/datatables-responsive/css/responsive.bootstrap4.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/datatables-buttons/css/buttons.bootstrap4.min.css';?>">
    <!-- DataTables AdminLTE-->
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/select2/css/select2.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/daterangepicker/daterangepicker.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/select2/css/select2.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/boostrap/plugins/daterangepicker/daterangepicker.css';?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<link rel="stylesheet" href="<?= base_url().'assets/boostrap/dist/css/adminlte.min.css?v=3.2.0';?>">
<style>
   .wraper {
  display: grid;
  grid-template-columns: 33% 34% 33%;
}

.row-form{
  display: grid;
  grid-template-columns: 12% 12% 12% 12% 12% 12% 12% 12%;
  padding: 4px;
}

.row-kemasan{
  display: grid;
  grid-template-columns: 50% 50%;
}

.row-kemasan-sub{
  display: grid;
  grid-template-columns: 24% 24% 24% 24%;
}

.row-kemasan-sub1{
  display: grid;
  grid-template-columns: 20% 20% 20% 20% 20%;
}



.icon-container {
  width: 38px;
  height:38px;
  position: relative;
}

/* img {
  height: 100%;
  width: 100%;
  border-radius: 50%;
} */

.status-circle {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: green;
  border: 2px solid white;
  bottom: 0;
  right: 0;
  position: absolute;
}
</style>
</head>
<body class="hold-transition ">

<div class="wrapper">
  
<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="<?= base_url().'assets/img/image-front.png'; ?>" alt="AdminLTELogo" height="60" width="60">
</div>
<nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#" title="Logout">
  Hi, <span style="margin-left: 3px;"><?= $this->session->userdata('username') ?></span> 
</a>
<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
<a href="<?= base_url('logout') ?>" class="dropdown-item">
<div class="media">
<!-- <img src="<?= base_url().'assets/boostrap/dist/img/avatar5.png';?>" alt="User Avatar" class="img-size-50 mr-3 img-circle"> -->
<div class="media-body">
<h3 class="dropdown-item-title">
  <center>
    <span class="text-sm text-muted"> <small><i class="fa fa-power-off mr-1"></i></small> Logout</span>
  </center>
</h3>

</div>
</div>

</a>
</div>
</li>

<!-- <li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button" title="Click to fullscreen window!">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li> -->

</ul>
</nav>

<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="javascript:void(0);">
<span class="brand-text font-weight-light">
<div class="row">
<span> Hi, <?= $this->session->userdata('username') ?></span>
</div>  
</a>

<div class="dropdown-menu dropdown-menu-sm ">
  <center>
    <a href="<?= base_url('logout') ?>" class="dropdown-item"><small><i class="fa fa-power-off" style="color:grey"></i></small> <span style="margin-left:5%; color:grey; font-size:small">Logout</span></a>
  </center>
</div>
</li>
</ul>
</nav>


<aside class="main-sidebar elevation-4 sidebar-light-info" style="position: fixed;">
<a href="<?= base_url(); ?>" class="brand-link">
<img src="<?= base_url().'assets/img/image-front.png'; ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-8" style="opacity: .8">
<span class="brand-text font-weight-light">KNN-METHOD</span>
</a>

<div class="sidebar">
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">

 <div class="icon-container">
    <img src="<?= base_url().'assets/boostrap/dist/img/avatar3.png';?>" class="img-circle elevation-10" alt="User Image">
  <div class='status-circle'>
  </div>
   
</div>
</div>
<div class="info">
<a href="avascript:void(0);" class="d-block"><?= $this->session->userdata('username') ?></a>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item">
<a href="<?= base_url('home'); ?>" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Home
</p>
</a>
</li>

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas bi bi-database-add"></i>
<p>
Data Master
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="<?= base_url('universitas'); ?>" class="nav-link">
<i class="nav-icon fas bi bi-buildings-fill"></i>
<p>Universitas</p>
</a>
</li>
<li class="nav-item">
<a href="<?= base_url('fakultas'); ?>" class="nav-link">
<i class="nav-icon fas bi bi-bank2"></i>
<p>Fakultas</p>
</a>
</li>
<li class="nav-item">
<a href="<?= base_url('dosen'); ?>" class="nav-link">
<i class="nav-icon fas bi bi-people-fill"></i>
<p>Dosen</p>
</a>
</li>
<li class="nav-item">
<a href="<?= base_url('mahasiswa'); ?>" class="nav-link">
<i class="nav-icon fas bi bi-mortarboard-fill"></i>
<p>Mahasiswa</p>
</a>
</li>
<li class="nav-item">
<a href="<?= base_url('jurusan'); ?>" class="nav-link">
<i class="nav-icon fas fa-list"></i>
<p>Jurusan</p>
</a>
</li>
<li class="nav-item">
<a href="<?= base_url('matkul'); ?>" class="nav-link">
<i class="nav-icon fas fa fa-book"></i>
<p>Matkul</p>
</a>
</li>
<li class="nav-item">
<a href="<?= base_url('nilai'); ?>" class="nav-link">
<i class="nav-icon fas fa fa-file"></i>
<p>Nilai</p>
</a>
</li>
<!-- <li class="nav-item">
<a href="<?= base_url('security'); ?>" class="nav-link">
<i class="nav-icon fas bi bi-file-earmark-lock2"></i>
<p>Security Access</p>
</a>
</li> -->
</ul>
</li>

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas bi bi-table"></i>
<p>
Data Uji
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="<?= base_url().'data-testing' ?>" class="nav-link">
<i class="nav-icon fas bi bi-card-checklist"></i>
<p>Data Testing</p>
</a>
</li>
<li class="nav-item">
<a href="<?= base_url().'data-training' ?>" class="nav-link">
<i class="nav-icon fas bi bi-card-list"></i>
<p>Data Training</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="<?= base_url('pengujian'); ?>" class="nav-link">
<i class="nav-icon fas bi bi-graph-down-arrow"></i>
<p>
Pengujian
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas bi bi-filetype-doc"></i>
<p>
Report
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="<?= base_url('report'); ?>" class="nav-link">
<i class="nav-icon fas bi bi-file-pdf"></i>
<p>Report List</p>
</a>
</li>
</ul>
</li>
</ul>
</nav>

</div>

</aside>


