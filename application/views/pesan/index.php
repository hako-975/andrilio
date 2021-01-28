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
					<h3><i class="fas fa-fw fa-envelope"></i> Pesan</h3>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-lg">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="table_id">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Pengirim</th>
									<th>Email Pengirim</th>
									<th>WhatsApp Pengirim</th>
									<th>Isi Pesan</th>
									<?php if ($dataUser['id_role'] == '1'): ?>
										<th>Aksi</th>
									<?php endif ?>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($pesan as $pd): ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $pd['nama_pengirim']; ?></td>
										<td><a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $pd['email_pengirim']; ?>"><?= $pd['email_pengirim']; ?></a></td>
										<td><a target="_blank" href="https://api.whatsapp.com/send/?phone=<?= $pd['wa_pengirim']; ?>"><?= $pd['wa_pengirim']; ?></a></td>
										<td><?= $pd['pesan_pengirim']; ?></td>
										<?php if ($dataUser['id_role'] == '1'): ?>
										<td>
											<a class="btn btn-sm m-1 btn-danger btn-delete" data-name="Pesan <?= $pd['nama_pengirim']; ?> | <?= $pd['pesan_pengirim']; ?>" href=""><i class="fas fa-fw fa-trash"></i></a>
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