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
					<h3><i class="fas fa-fw fa-stopwatch"></i> Log</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="table_id">
							<thead>
								<tr>
									<th>No</th>
									<th style="width: 12rem">Isi Log</th>
									<th>Tanggal Log</th>
									<th>Pengguna</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($log as $dl): ?>
								<?php 
									$username = $this->db->get_where('user', ['id_user' => $dl['id_user']])->row_array();
								?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $dl['isi_log']; ?></td>
										<td><?= date('d-m-Y, H:i:s', $dl['date_log']); ?></td>
										<td>
											<?php if ($username != null): ?>
												<?= $username['username']; ?>
											<?php else: ?>
												Pengguna telah dihapus
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