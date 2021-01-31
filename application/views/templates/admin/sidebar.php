<nav id="sidebar">
  <div class="sidebar-header">
    <a href="<?= base_url('assets/img/img_properties/') . $portfolio['img_navbar_brand']; ?>" class="enlarge">
      <img src="<?= base_url('assets/img/img_properties/') . $portfolio['img_navbar_brand']; ?>" alt="Navbar Brand" class="img-fluid rounded">
    </a>
  </div>

  <ul class="list-unstyled">
    <?php if (
      $_SERVER['REQUEST_URI'] == '/andrilio/admin' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/admin/' ||
      $_SERVER['REQUEST_URI'] == '/andrilio/admin/index' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/admin/index/' 
    ): ?>
      <li class="active">
        <a class="text-red-brown" href="<?= base_url('admin'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dasbor</a>
      </li>
    <?php else: ?>
      <li>
        <a href="<?= base_url('admin'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dasbor</a>
      </li>
    <?php endif ?>
    
    <?php if ($dataUser['id_role'] == '1'): ?>
      <?php if (
        $_SERVER['REQUEST_URI'] == '/andrilio/role' || 
        $_SERVER['REQUEST_URI'] == '/andrilio/role/' ||
        $_SERVER['REQUEST_URI'] == '/andrilio/role/index' || 
        $_SERVER['REQUEST_URI'] == '/andrilio/role/index/' 
      ): ?>
        <li class="active">
          <a class="text-red-brown" href="<?= base_url('role'); ?>"><i class="fas fa-fw fa-user-tie"></i> Role</a>
        </li>
      <?php else: ?>
        <li>
          <a href="<?= base_url('role'); ?>"><i class="fas fa-fw fa-user-tie"></i> Role</a>
        </li>
      <?php endif ?>
    <?php endif ?>

    <?php if (
      $_SERVER['REQUEST_URI'] == '/andrilio/user' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/user/' ||
      $_SERVER['REQUEST_URI'] == '/andrilio/user/index' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/user/index/' 
    ): ?>
        <li class="active">
          <a class="text-red-brown" href="<?= base_url('user'); ?>"><i class="fas fa-fw fa-users"></i> Pengguna</a>
        </li>
      <?php else: ?>
        <li>
          <a href="<?= base_url('user'); ?>"><i class="fas fa-fw fa-users"></i> Pengguna</a>
        </li>
    <?php endif ?>

    <?php if (
      $_SERVER['REQUEST_URI'] == '/andrilio/portfolio' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/portfolio/' ||
      $_SERVER['REQUEST_URI'] == '/andrilio/portfolio/index' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/portfolio/index/' 
    ): ?>
      <li class="active">
        <a class="text-red-brown" href="<?= base_url('portfolio'); ?>"><i class="fas fa-fw fa-file-alt"></i> Portfolio</a>
      </li>
    <?php else: ?>
      <li>
        <a href="<?= base_url('portfolio'); ?>"><i class="fas fa-fw fa-file-alt"></i> Portfolio</a>
      </li>
    <?php endif ?>

    <?php if (
      $_SERVER['REQUEST_URI'] == '/andrilio/section' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/section/' ||
      $_SERVER['REQUEST_URI'] == '/andrilio/section/index' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/section/index/' 
    ): ?>
      <li class="active">
        <a class="text-red-brown" href="<?= base_url('section'); ?>"><i class="fas fa-fw fa-puzzle-piece"></i> Section</a>
      </li>
    <?php else: ?>
      <li>
        <a href="<?= base_url('section'); ?>"><i class="fas fa-fw fa-puzzle-piece"></i> Section</a>
      </li>
    <?php endif ?>


    <?php if (
      $_SERVER['REQUEST_URI'] == '/andrilio/galeri' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/galeri/' ||
      $_SERVER['REQUEST_URI'] == '/andrilio/galeri/index' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/galeri/index/' 
    ): ?>
      <li class="active">
        <a class="text-red-brown" href="<?= base_url('galeri'); ?>"><i class="fas fa-fw fa-image"></i> Galeri</a>
      </li>
    <?php else: ?>
      <li>
        <a href="<?= base_url('galeri'); ?>"><i class="fas fa-fw fa-image"></i> Galeri</a>
      </li>
    <?php endif ?>

    <?php if (
      $_SERVER['REQUEST_URI'] == '/andrilio/sosialMedia' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/sosialMedia/' ||
      $_SERVER['REQUEST_URI'] == '/andrilio/sosialMedia/index' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/sosialMedia/index/' 
    ): ?>
      <li class="active">
        <a class="text-red-brown" href="<?= base_url('sosialMedia'); ?>"><i class="fab fa-fw fa-facebook"></i> Sosial Media</a>
      </li>
    <?php else: ?>
      <li>
        <a href="<?= base_url('sosialMedia'); ?>"><i class="fab fa-fw fa-facebook"></i> Sosial Media</a>
      </li>
    <?php endif ?>

    <?php if (
      $_SERVER['REQUEST_URI'] == '/andrilio/pesan' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/pesan/' ||
      $_SERVER['REQUEST_URI'] == '/andrilio/pesan/index' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/pesan/index/' 
    ): ?>
      <li class="active">
        <a class="text-red-brown" href="<?= base_url('pesan'); ?>"><i class="fas fa-fw fa-envelope"></i> Pesan</a>
      </li>
    <?php else: ?>
      <li>
        <a href="<?= base_url('pesan'); ?>"><i class="fas fa-fw fa-envelope"></i> Pesan</a>
      </li>
    <?php endif ?>

    <?php if (
      $_SERVER['REQUEST_URI'] == '/andrilio/log' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/log/' ||
      $_SERVER['REQUEST_URI'] == '/andrilio/log/index' || 
      $_SERVER['REQUEST_URI'] == '/andrilio/log/index/' 
    ): ?>
      <li class="active">
        <a class="text-red-brown" href="<?= base_url('log'); ?>"><i class="fas fa-fw fa-stopwatch"></i> Log</a>
      </li>
    <?php else: ?>
      <li>
        <a href="<?= base_url('log'); ?>"><i class="fas fa-fw fa-stopwatch"></i> Log</a>
      </li>
    <?php endif ?>

  </ul>
</nav>