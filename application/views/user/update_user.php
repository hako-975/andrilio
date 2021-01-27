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
					<a class="btn btn-primary" href="<?= base_url('user/index'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<h3><i class="fas fa-fw fa-users"></i> Ubah Pengguna - <?= $user['username']; ?></h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('user/updateUser/' . $user['id_user']); ?>">
						<div class="form-group">
							<label for="id_role"><i class="fas fa-fw fa-user-tie"></i> Role</label>
							<select class="custom-select" name="id_role" id="id_role">
							  	<option value="<?= $user['id_role']; ?>"><?= $user['nama_role']; ?></option>
								<?php foreach ($role as $dr): ?>
									<?php if ($dr['id_role'] != $user['id_role']): ?>
									  <option value="<?= $dr['id_role']; ?>"><?= $dr['nama_role']; ?></option>
									<?php endif ?>
								<?php endforeach ?>
							</select>
							<?= form_error('id_role', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group form-check">
							<?php if ($user['is_active'] == 1): ?>
							    <input type="checkbox" class="form-check-input" name="is_active" checked id="is_active" value="1">
							<?php else: ?>
							    <input type="checkbox" class="form-check-input" name="is_active" id="is_active"  value="1">
							<?php endif ?>
						    <label class="form-check-label" for="is_active"> Aktif?</label>
					  	</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnUpdateUser" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
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