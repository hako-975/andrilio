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
					<h3><i class="fas fa-fw fa-file-alt"></i> Ubah Background Jumbotron</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('portfolio/updateImgJumbotron/'); ?>" enctype="multipart/form-data">
						<input type="hidden" name="dump_validation" value="1">
						<div class="form-group">
							<a href="<?= base_url('assets/img/img_jumbotron/') . $portfolio['img_jumbotron']; ?>" class="enlarge" id="check_enlarge_photo">
								<img class="img-fluid img-w-150" id="check_photo" src="<?= base_url('assets/img/img_jumbotron/') . $portfolio['img_jumbotron']; ?>" alt="<?= $portfolio['img_jumbotron']; ?>">
							</a>
						</div>
						<div class="form-group">
							<small>Pilih gambar baru untuk mengubah</small>
	                      	<input id="img_jumbotron" name="img_jumbotron" type="file">
						</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnUpdateImgJumbotron" class="btn btn-red-brown"><i class="fas fa-fw fa-save"></i> Simpan</button>
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
