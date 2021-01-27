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
					<h3><i class="fas fa-fw fa-puzzle-piece"></i> Section</h3>
				</div>
				<?php if ($dataUser['id_role'] == '1'): ?>
					<div class="col-lg header-button">
						<a class="btn btn-primary" href="<?= base_url('section/insertSection'); ?>"><i class="fas fa-fw fa-plus"></i> Tambah Section</a>
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
									<th>Nama Section</th>
									<th>Konten Section</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($section as $ds): ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $ds['nama_section']; ?></td>
										<td><?= htmlspecialchars_decode($ds['konten_section']); ?></td>
											<td>
												<a href="<?= base_url('section/updateSection/' . $ds['id_section']); ?>" class="btn btn-sm btn-success m-1"><i class="fas fa-fw fa-edit"></i></a>
												<?php if ($dataUser['id_role'] == '1'): ?>
													<a href="<?= base_url('section/deleteSection/') . $ds['id_section']; ?>" class="btn btn-sm btn-danger m-1 btn-delete" data-name="<?= $ds['nama_section']; ?>"><i class="fas fa-fw fa-trash"></i></a>
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