<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <button type="button" id="sidebarCollapse" class="btn btn-primary m-1">
      <i class="fas fa-align-justify"></i>
    </button>
    
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle arrow-dropdown-disabled" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-user"></i> <?= $dataUser['username']; ?>
      </button>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="<?= base_url('admin/profile'); ?>"><i class="fas fa-fw fa-user"></i> Profil</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item btn-logout" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-fw fa-sign-out-alt"></i> Keluar</a>
      </div>
    </div>
  </div>
</nav>