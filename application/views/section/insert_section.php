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
					<a class="btn btn-primary" href="<?= base_url('section/index'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<h3><i class="fas fa-fw fa-puzzle-piece"></i> Tambah Section</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('section/insertSection/'); ?>">
						<div class="form-group">
							<label for="nama_section">Nama Section</label>
							<input type="text" id="nama_section" class="form-control <?= (form_error('nama_section')) ? 'is-invalid' : ''; ?>" name="nama_section" required value="<?= set_value('nama_section'); ?>">
							<?= form_error('nama_section', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="konten_section">Nama Section</label>
							<textarea placeholder="Bisa menggunakan html" id="konten_section" class="form-control <?= (form_error('konten_section')) ? 'is-invalid' : ''; ?>" name="konten_section" required><?= set_value('konten_section'); ?></textarea>
							<?= form_error('konten_section', '<small class="text-danger">', '</small>'); ?>
						</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnInsertSection" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
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