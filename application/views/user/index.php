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
					<h3><i class="fas fa-fw fa-users"></i> Pengguna</h3>
				</div>
				<?php if ($dataUser['id_role'] == '1'): ?>
					<div class="col-lg header-button">
						<a class="btn btn-primary" href="<?= base_url('user/insertUser'); ?>"><i class="fas fa-fw fa-plus"></i> Tambah Pengguna</a>
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
									<th>Username</th>
									<th>Email</th>
									<th>Role</th>
									<th>Tanggal dibuat</th>
									<th>Aktif</th>
									<?php if ($dataUser['id_role'] == '1'): ?>
										<th>Aksi</th>
									<?php endif ?>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($user as $du): ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $du['username']; ?></td>
										<td><?= $du['email']; ?></td>
										<td><?= $du['nama_role']; ?></td>
										<td><?= date('d-m-Y, H:i', $du['date_created']); ?></td>
										<?php if ($du['is_active'] == 1) : ?>
											<td><i class="text-success fas fa-fw fa-check"></i></td>
										<?php else: ?>
											<td><i class="text-danger fas fa-fw fa-times"></i></td>
										<?php endif ?>
										<?php if ($dataUser['id_role'] == '1'): ?>
											<td>
												<a href="<?= base_url('user/updateUser/' . $du['id_user']); ?>" class="btn btn-sm btn-success m-1"><i class="fas fa-fw fa-edit"></i></a>
												<?php if ($du['id_role'] != '1'): ?>
													<a href="<?= base_url('user/deleteUser/') . $du['id_user']; ?>" class="btn btn-sm btn-danger m-1 btn-delete" data-name="<?= $du['username']; ?>"><i class="fas fa-fw fa-trash"></i></a>
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