<script type="text/javascript">
	function add() {
		var content = '';
		content += '<hr>';
		content += `
			<div class="form-group">
	          	<input id="img_galeri[]" name="img_galeri[]" type="file">
			</div>
		`;
		content += '<a class="btn btn-danger" href="javascript:;" onclick="hapus(this)"><i class="fas fa-fw fa-times"></i> Hapus</a>';

		var x = document.createElement('div');
		x.innerHTML = content;
		document.getElementById('record').appendChild(x);
	}

	function hapus(element) {
		var x = document.getElementById('record');
		x.removeChild(element.parentNode);
	}
</script>
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
					<a class="btn btn-primary" href="<?= base_url('galeri/index'); ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<h3><i class="fas fa-fw fa-puzzle-piece"></i> Tambah Galeri</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg-6">
					<form method="post" action="<?= base_url('galeri/insertGaleri/'); ?>" enctype="multipart/form-data">
						<input type="hidden" name="dump_validation" value="1">
						<a class="btn btn-primary mb-4" href="javascript:add();"><i class="fas fa-fw fa-plus"></i> Tambah Galeri</a>
						<div class="form-group">
	                      	<input id="img_galeri[]" name="img_galeri[]" type="file">
						</div>
						<div id="record"></div>
					  	<div class="form-group">
					  		<hr>
					  		<button type="submit" name="btnInsertGaleri" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
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
