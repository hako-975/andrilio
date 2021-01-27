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
				<div class="col-lg-2 border border-dark">
					<?= $portfolio['title']; ?>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg text-center">
					<a href="<?= base_url('assets/img/img_profil/') . $portfolio['img_profile']; ?>">
						<img class="img-fluid rounded-circle img-300" src="<?= base_url('assets/img/img_profil/') . $portfolio['img_profile']; ?>" alt="img_profile">
					</a>
				</div>
			</div>
		</div>
	</div>
  </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>