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
					<a class="btn btn-red-brown" href="<?= base_url('sosialMedia/index'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<h3><i class="fab fa-fw fa-facebook"></i> Ubah Sosial Media - <?= $sosialMedia['nama_sosial_media']; ?></h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('sosialMedia/updateSosialMedia/' . $sosialMedia['id_sosial_media']); ?>">
						<div class="form-group">
							<label for="nama_sosial_media"><i class="fab fa-fw fa-facebook"></i> Nama Sosial Media</label>
							<input type="text" id="nama_sosial_media" class="form-control <?= (form_error('nama_sosial_media')) ? 'is-invalid' : ''; ?>" name="nama_sosial_media" required value="<?= (set_value('nama_sosial_media')) ? set_value('nama_sosial_media') : $sosialMedia['nama_sosial_media']; ?>">
							<?= form_error('nama_sosial_media', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="icon_sosial_media"><i class="fab fa-fw fa-facebook"></i> Icon Sosial Media</label>
							<textarea placeholder="contoh: <i class='fab fa-fw fa-facebook'></i>" id="icon_sosial_media" class="form-control <?= (form_error('icon_sosial_media')) ? 'is-invalid' : ''; ?>" name="icon_sosial_media" required><?= (set_value('icon_sosial_media')) ? set_value('icon_sosial_media') : $sosialMedia['icon_sosial_media']; ?></textarea>
							<?= form_error('icon_sosial_media', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="link_sosial_media"><i class="fas fa-fw fa-link"></i> Link Sosial Media</label>
							<input placeholder="sertakan 'https://' atau 'http://'" type="text" id="link_sosial_media" class="form-control <?= (form_error('link_sosial_media')) ? 'is-invalid' : ''; ?>" name="link_sosial_media" required value="<?= (set_value('link_sosial_media')) ? set_value('link_sosial_media') : $sosialMedia['link_sosial_media']; ?>">
							<?= form_error('link_sosial_media', '<small class="text-danger">', '</small>'); ?>
						</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnInsertSosialMedia" class="btn btn-red-brown"><i class="fas fa-fw fa-save"></i> Simpan</button>
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