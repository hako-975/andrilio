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
					<a class="btn btn-red-brown" href="<?= base_url('portfolio/index'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<h3><i class="fas fa-fw fa-file-alt"></i> Ubah Kontak</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('portfolio/updateKontak/'); ?>">
						<div class="form-group">
							<label for="judul_kontak">Judul Kontak</label>
							<input type="text" id="judul_kontak" class="form-control <?= (form_error('judul_kontak')) ? 'is-invalid' : ''; ?>" name="judul_kontak" required value="<?= (set_value('judul_kontak')) ? set_value('judul_kontak') : $kontak['judul_kontak']; ?>">
						</div>
						<div class="form-group">
							<label for="no_telepon_kontak">No. Telepon Kontak</label>
							<input type="number" id="no_telepon_kontak" class="form-control <?= (form_error('no_telepon_kontak')) ? 'is-invalid' : ''; ?>" name="no_telepon_kontak" required value="<?= (set_value('no_telepon_kontak')) ? set_value('no_telepon_kontak') : $kontak['no_telepon_kontak']; ?>">
						</div>
						<div class="form-group">
							<label for="alamat_kontak">Alamat Kontak</label>
							<textarea id="alamat_kontak" class="form-control <?= (form_error('alamat_kontak')) ? 'is-invalid' : ''; ?>" name="alamat_kontak" required><?= (set_value('alamat_kontak')) ? set_value('alamat_kontak') : $kontak['alamat_kontak']; ?></textarea>
						</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnUpdateKontak" class="btn btn-red-brown"><i class="fas fa-fw fa-save"></i> Simpan</button>
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
