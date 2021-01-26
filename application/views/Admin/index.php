<div class="wrapper">
  <!-- Sidebar  -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <a href="<?= base_url('assets/img/img_properties/') . $landing['img_navbar_brand']; ?>" class="enlarge">
        <img src="<?= base_url('assets/img/img_properties/') . $landing['img_navbar_brand']; ?>" alt="Navbar Brand" class="img-fluid rounded">
      </a>
    </div>

    <ul class="list-unstyled">
      <li>
        <a href="<?= base_url('admin'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dasbor</a>
      </li>
      <li>
        <a href="#"><i class="fas fa-fw fa-users"></i> Pengguna</a>
      </li>
      <li>
        <a href="#"><i class="fas fa-fw fa-user-tie"></i> Role</a>
      </li>
      <li>
        <a href="#"><i class="fas fa-fw fa-file-alt"></i> Portfolio</a>
      </li>
      <li>
        <a href="#"><i class="fas fa-fw fa-puzzle-piece"></i> Section</a>
      </li>
      <li>
        <a href="#"><i class="fab fa-fw fa-facebook"></i> Sosial Media</a>
      </li>
      <li>
        <a href="#"><i class="fas fa-fw fa-phone"></i> Kontak</a>
      </li>
      <li>
        <a href="#"><i class="fas fa-fw fa-stopwatch"></i> Log</a>
      </li>
    </ul>
  </nav>

  <!-- Page Content  -->
  <div id="content">

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
    
    <div class="container-fluid">
      <div class="container">
        <h2>Collapsible Sidebar Using Bootstrap 4</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h3>Lorem Ipsum Dolor</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    
  </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>