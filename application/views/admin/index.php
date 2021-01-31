<?php 
    $this->load->model('Admin_model', 'admo');
?>

<div class="wrapper">
  <!-- Sidebar  -->
  <?php require dirname(__FILE__) . '/../templates/admin/sidebar.php'; ?>

  <!-- Page Content  -->
  <div id="content">

    <!-- Navbar -->
    <?php require dirname(__FILE__) . '/../templates/admin/navbar.php'; ?>
    
    <div class="container-fluid">
      <div class="container">
        <div class="row my-2">
          <div class="col-lg">
            <h2><i class="fas fa-fw fa-tachometer-alt"></i> Dasbor</h2>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-lg-3 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Role</h5>
                <p class="card-text text-dark">Jumlah data: <span class="btn btn-sm btn-red-brown"><?= $this->admo->getCountRows('role'); ?></span></p>
                <a href="<?= base_url('role'); ?>" class="btn btn-red-brown"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">User</h5>
                <p class="card-text text-dark">Jumlah data: <span class="btn btn-sm btn-red-brown"><?= $this->admo->getCountRows('user'); ?></span></p>
                <a href="<?= base_url('user'); ?>" class="btn btn-red-brown"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Section</h5>
                <p class="card-text text-dark">Jumlah data: <span class="btn btn-sm btn-red-brown"><?= $this->admo->getCountRows('section'); ?></span></p>
                <a href="<?= base_url('section'); ?>" class="btn btn-red-brown"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Galeri</h5>
                <p class="card-text text-dark">Jumlah data: <span class="btn btn-sm btn-red-brown"><?= $this->admo->getCountRows('galeri'); ?></span></p>
                <a href="<?= base_url('galeri'); ?>" class="btn btn-red-brown"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Sosial Media</h5>
                <p class="card-text text-dark">Jumlah data: <span class="btn btn-sm btn-red-brown"><?= $this->admo->getCountRows('sosial_media'); ?></span></p>
                <a href="<?= base_url('sosial_media'); ?>" class="btn btn-red-brown"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pesan</h5>
                <p class="card-text text-dark">Jumlah data: <span class="btn btn-sm btn-red-brown"><?= $this->admo->getCountRows('pesan'); ?></span></p>
                <a href="<?= base_url('pesan'); ?>" class="btn btn-red-brown"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 my-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Log</h5>
                <p class="card-text text-dark">Jumlah data: <span class="btn btn-sm btn-red-brown"><?= $this->admo->getCountRows('log'); ?></span></p>
                <a href="<?= base_url('log'); ?>" class="btn btn-red-brown"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>