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
					<a class="btn btn-red-brown" href="<?= base_url('admin/profile'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<h3><i class="fas fa-fw fa-user"></i> Ubah Profil</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form action="<?= base_url('admin/updateProfile'); ?>" method="post">
						<div class="form-group">
							<label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
							<input type="text" id="username" class="form-control <?= (form_error('username')) ? 'is-invalid' : ''; ?>" value="<?= (set_value('username')) ? set_value('username') : $dataUser['username']; ?>" name="username" required>
							<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="email"><i class="fas fa-fw fa-envelope"></i> Email</label>
							<input type="email" id="email" class="form-control <?= (form_error('email')) ? 'is-invalid' : ''; ?>" value="<?= (set_value('email')) ? set_value('email') : $dataUser['email']; ?>" name="email" required>
							<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-red-brown"><i class="fas fa-fw fa-save"></i> Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>