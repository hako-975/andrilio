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
				<div class="col-lg header-title">
					<h3><i class="fas fa-fw fa-puzzle-piece"></i> Galeri</h3>
				</div>
				<?php if ($dataUser['id_role'] == '1'): ?>
					<div class="col-lg header-button">
						<a class="btn btn-primary" href="<?= base_url('galeri/insertGaleri'); ?>"><i class="fas fa-fw fa-plus"></i> Tambah Galeri</a>
					</div>
				<?php endif ?>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="table_id">
							<thead>
								<tr>
									<th>No</th>
									<th>Galeri</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($galeri as $dg): ?>
									<tr>
										<td><?= $i++; ?></td>
										<td>
											<a href="<?= base_url('assets/img/img_galeri/') . $dg['img_galeri']; ?>" class="enlarge">
												<img class="img-fluid img-w-200" src="<?= base_url('assets/img/img_galeri/') . $dg['img_galeri']; ?>" alt="<?= $dg['img_galeri']; ?>">
											</a>
										</td>
										<td>
											<a href="<?= base_url('galeri/updateGaleri/' . $dg['id_galeri']); ?>" class="btn btn-sm btn-success m-1"><i class="fas fa-fw fa-edit"></i></a>
											<?php if ($dataUser['id_role'] == '1'): ?>
												<a href="<?= base_url('galeri/deleteGaleri/') . $dg['id_galeri']; ?>" class="btn btn-sm btn-danger m-1 btn-delete" data-name="<?= $dg['img_galeri']; ?>"><i class="fas fa-fw fa-trash"></i></a>
											<?php endif ?>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
