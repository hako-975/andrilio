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
					<h3><i class="fas fa-fw fa-file-alt"></i> Ubah Foto Profil</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('portfolio/updateImgProfile/'); ?>" enctype="multipart/form-data">
						<input type="hidden" name="dump_validation" value="1">
						<div class="form-group">
							<a href="<?= base_url('assets/img/img_profil/') . $portfolio['img_profile']; ?>" class="enlarge" id="check_enlarge_photo">
								<img class="img-fluid img-w-150" id="check_photo" src="<?= base_url('assets/img/img_profil/') . $portfolio['img_profile']; ?>" alt="<?= $portfolio['img_profile']; ?>">
							</a>
						</div>
						<div class="form-group">
							<small>Pilih gambar baru untuk mengubah</small>
	                      	<input id="img_profile" name="img_profile" type="file">
						</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnUpdateImgProfile" class="btn btn-red-brown"><i class="fas fa-fw fa-save"></i> Simpan</button>
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
