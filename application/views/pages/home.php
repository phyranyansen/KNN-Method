
<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
    <br><br>
<div class="row mb-2">
<div class="col-sm-6">
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Home</li>
</ol>
</div>
</div>
</div>
</section>
<div class="content">
        <div class="animated fadeIn oncenter">
            <div class="row m-2">
                <div class="col-lg-12">
                    <div class="row">
                          <div class="col-lg-3 col-6">
                              <div class="small-box bg-info">
                                  <div class="inner">
                              <h3><?= $testing; ?></h3>
                              <p>Data Testing</p>
                              </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                          <div class="col-lg-3 col-6">
                              <div class="small-box bg-success">
                                  <div class="inner">
                              <h3><?= $training; ?></h3>
                              <p>Data Training</p>
                              </div>
                                <div class="icon">
                                    <i class="ion bi bi-card-checklist"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                          <div class="col-lg-3 col-6">
                              <div class="small-box bg-warning">
                                  <div class="inner">
                              <h3><?= $dsn; ?></h3>
                              <p>Data Dosen</p>
                              </div>
                                <div class="icon">
                                    <i class="ion bi bi-people-fill"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                          <div class="col-lg-3 col-6">
                              <div class="small-box bg-info">
                                  <div class="inner">
                              <h3><?= $mhs; ?></h3>
                              <p>Data Mahasiswa</p>
                              </div>
                                <div class="icon">
                                    <i class="ion bi bi-mortarboard-fill"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                          
                        </div>
                    </div>
                   
                </div>
                <div class="d-flex align-items-end row m-3">
                      <div class="col-md-8">
                          <h5 class="card-title">Welcome, <span class="text-primary"><?= $this->session->userdata('username') ?></span>! 🎉</h5>
                          <p class="mb-4">
                         Selamat datang di <span class="fw-bold">KNN-Method</span>. Aplikasi Web Ini Merupakan Aplikasi Tugas Akhir / Skripsi  "<span style="font-weight:bold">Implementasi Algoritma K-Nearest Neighbor 
                         Untuk Memprediksi Kelulusan Mahasiswa Jurusan  Sistem Informasi di <?= $universitas['Nama_Universitas'] ?></span>".
                          </p>
                          <a href="<?= base_url('information-center'); ?>" class="btn btn-sm btn-outline-primary">Information Center</a>
                        
                      </div>
                      <div class="col-md-4 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="<?= base_url().'assets/img/illustrations/man-with-laptop-light.png';?>"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
            </div>
        </div>
</div>