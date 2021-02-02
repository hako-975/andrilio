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
					<h3><i class="fas fa-fw fa-file-alt"></i> Ubah Heading 1</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('portfolio/updateHeading1/'); ?>">
						<div class="form-group">
							<label for="heading_1">Heading 1</label>
							<input type="text" id="heading_1" class="form-control <?= (form_error('heading_1')) ? 'is-invalid' : ''; ?>" name="heading_1" required value="<?= (set_value('heading_1')) ? set_value('heading_1') : $portfolio['heading_1']; ?>">
						</div>
					  	<div class="form-group">
					  		<button type="submit" name="btnUpdateHeading1" class="btn btn-red-brown"><i class="fas fa-fw fa-save"></i> Simpan</button>
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
