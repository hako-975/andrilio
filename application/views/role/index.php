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
					<h3><i class="fas fa-fw fa-user-tie"></i> Role</h3>
				</div>
				<?php if ($dataUser['id_role'] == '1'): ?>
					<div class="col-lg header-button">
						<a class="btn btn-red-brown" href="<?= base_url('role/insertRole'); ?>"><i class="fas fa-fw fa-plus"></i> Tambah Role</a>
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
									<th>Nama Role</th>
									<?php if ($dataUser['id_role'] == '1'): ?>
										<th>Aksi</th>
									<?php endif ?>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($role as $dr): ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $dr['nama_role']; ?></td>
										<?php if ($dataUser['id_role'] == '1'): ?>
											<td>
												<?php if ($dr['id_role'] != '1'): ?>
													<a href="<?= base_url('role/updateRole/' . $dr['id_role']); ?>" class="btn btn-sm btn-success m-1"><i class="fas fa-fw fa-edit"></i></a>
													<a href="<?= base_url('role/deleteRole/') . $dr['id_role']; ?>" class="btn btn-sm btn-danger m-1 btn-delete" data-name="<?= $dr['nama_role']; ?>"><i class="fas fa-fw fa-trash"></i></a>
												<?php endif ?>
											</td>
										<?php endif ?>
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