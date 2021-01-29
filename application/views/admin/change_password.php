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
					<a class="btn btn-primary" href="<?= base_url('admin/profile'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<h3><i class="fas fa-fw fa-lock"></i> Ganti Password</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form action="<?= base_url('admin/changePassword'); ?>" method="post">
				      	<div class="form-group">
					    	<label for="password_lama"><i class="fas fa-fw fa-lock"></i> Password Lama</label>
							<div class="input-group" id="show_hide_password_lama">
								<input class="form-control <?= (form_error('password_lama')) ? 'is-invalid' : ''; ?>" required id="password_lama" type="password" name="password_lama">
							  	<div class="input-group-append">
									<a class="box-shadow-2 btn btn-primary border text-white"><i id="icon_eye3" class="fas fa-fw fa-eye-slash" aria-hidden="true"></i></a>
								</div>
							</div>
							<?= form_error('password_lama', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<p id="text3" style="display: none;" class="alert alert-danger mt-2 p-1"><small>Caps lock is ON.</small></p>
						</div>
						<div class="form-group">
					    	<label for="password"><i class="fas fa-fw fa-lock"></i> Password Baru</label>
							<div class="input-group" id="show_hide_password">
								<input class="form-control <?= (form_error('password')) ? 'is-invalid' : ''; ?>" required id="password" type="password" name="password">
							  	<div class="input-group-append">
									<a class="box-shadow-2 btn btn-primary border text-white"><i id="icon_eye1" class="fas fa-fw fa-eye-slash" aria-hidden="true"></i></a>
								</div>
							</div>
							<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
				    		<p id="text" style="display: none;" class="alert alert-danger mt-2 p-1"><small>Caps lock is ON.</small></p>
						</div>
						<div class="form-group">
					    	<label for="password_verify"><i class="fas fa-fw fa-lock"></i> Verifikasi Password Baru</label>
							<div class="input-group" id="show_hide_password_verify">
								<input class="form-control <?= (form_error('password_verify')) ? 'is-invalid' : ''; ?>" required id="password_verify" type="password" name="password_verify">
							  	<div class="input-group-append">
									<a class="box-shadow-2 btn btn-primary border text-white"><i id="icon_eye2" class="fas fa-fw fa-eye-slash" aria-hidden="true"></i></a>
								</div>
							</div>
							<?= form_error('password_verify', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
				    		<p id="text2" style="display: none;" class="alert alert-danger mt-2 p-1"><small>Caps lock is ON.</small></p>
						</div>
						<div class="form-group">
							<button type="submit" name="btnChangePassword" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
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