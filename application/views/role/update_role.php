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
					<a class="btn btn-primary" href="<?= base_url('role/index'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<h3><i class="fas fa-fw fa-users"></i> Ubah Role - <?= $role['nama_role']; ?></h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('role/updateRole/' . $role['id_role']); ?>">
						<div class="form-group">
							<label for="nama_role">Nama Role</label>
							<input type="text" id="nama_role" class="form-control <?= (form_error('nama_role')) ? 'is-invalid' : ''; ?>" name="nama_role" required value="<?= (set_value('nama_role')) ? set_value('nama_role') : $role['nama_role']; ?>">
						</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnUpdateRole" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
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