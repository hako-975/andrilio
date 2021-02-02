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
					<h3><i class="fas fa-fw fa-file-alt"></i> Ubah Tata Letak Galeri</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('portfolio/updateGaleri/'); ?>">
						<div class="form-group">
							<label for="kolom_galeri">Jumlah Kolom</label>
							<input type="number" min="0" id="kolom_galeri" class="form-control <?= (form_error('kolom_galeri')) ? 'is-invalid' : ''; ?>" name="kolom_galeri" required value="<?= (set_value('kolom_galeri')) ? set_value('kolom_galeri') : $galeri['kolom_galeri']; ?>">
							<small>Masukkan angka nol untuk seperti <a class="text-primary" href="https://masonry.desandro.com/">Masonry</a></small>
						</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnUpdateGaleri" class="btn btn-red-brown"><i class="fas fa-fw fa-save"></i> Simpan</button>
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
