<nav id="sidebar">
  <div class="sidebar-header">
    <a href="<?= base_url('assets/img/img_properties/') . $portfolio['img_navbar_brand']; ?>" class="enlarge">
      <img src="<?= base_url('assets/img/img_properties/') . $portfolio['img_navbar_brand']; ?>" alt="Navbar Brand" class="img-fluid rounded">
    </a>
  </div>

  <ul class="list-unstyled">
    <li>
      <a href="<?= base_url('admin'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i> Dasbor</a>
    </li>
    <?php if ($dataUser['id_role'] == '1'): ?>
      <li>
        <a href="<?= base_url('role'); ?>"><i class="fas fa-fw fa-user-tie"></i> Role</a>
      </li>
    <?php endif ?>
    <li>
      <a href="<?= base_url('user'); ?>"><i class="fas fa-fw fa-users"></i> Pengguna</a>
    </li>
    <li>
      <a href="<?= base_url('portfolio'); ?>"><i class="fas fa-fw fa-file-alt"></i> Portfolio</a>
    </li>
    <li>
      <a href="<?= base_url('section'); ?>"><i class="fas fa-fw fa-puzzle-piece"></i> Section</a>
    </li>
    <li>
      <a href="<?= base_url('sosialMedia'); ?>"><i class="fab fa-fw fa-facebook"></i> Sosial Media</a>
    </li>
    <li>
      <a href="#"><i class="fas fa-fw fa-phone"></i> Kontak</a>
    </li>
    <li>
      <a href="#"><i class="fas fa-fw fa-stopwatch"></i> Log</a>
    </li>
  </ul>
</nav>