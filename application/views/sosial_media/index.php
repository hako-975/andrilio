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
					<h3><i class="fab fa-fw fa-facebook"></i> Sosial Media</h3>
				</div>
				<div class="col-lg header-button">
					<a class="btn btn-red-brown" href="<?= base_url('sosialMedia/insertSosialMedia'); ?>"><i class="fas fa-fw fa-plus"></i> Tambah Sosial Media</a>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="table_id">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Sosial Media</th>
									<th>Icon Sosial Media</th>
									<th>Link Sosial Media</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($sosialMedia as $dsm): ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $dsm['nama_sosial_media']; ?></td>
										<td class="text-center"><?= $dsm['icon_sosial_media']; ?></td>
										<td><a href="<?= $dsm['link_sosial_media']; ?>" target="_blank"><?= $dsm['link_sosial_media']; ?></a></td>
											<td>
												<a href="<?= base_url('sosialMedia/updateSosialMedia/' . $dsm['id_sosial_media']); ?>" class="btn btn-sm btn-success m-1"><i class="fas fa-fw fa-edit"></i></a>
												<?php if ($dataUser['id_role'] == '1'): ?>
													<a href="<?= base_url('sosialMedia/deleteSosialMedia/') . $dsm['id_sosial_media']; ?>" class="btn btn-sm btn-danger m-1 btn-delete" data-name="<?= $dsm['nama_sosial_media']; ?>"><i class="fas fa-fw fa-trash"></i></a>
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
