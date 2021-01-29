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
      			<div class="col">
      				<h2><i class="fas fa-fw fa-user"></i> Profil</h2>
      			</div>
      			<div class="col-end">
      				<a class="btn btn-success" href="<?= base_url('admin/updateProfile'); ?>"><i class="fas fa-fw fa-edit"></i></a>
      			</div>
      		</div>
      		<div class="row my-2">
	          	<div class="col-lg">
		            <div class="card">
		              <ul class="list-group list-group-flush">
		                <li class="list-group-item">Username : <?= $dataUser['username']; ?></li>
		                <li class="list-group-item">Email : <?= $dataUser['email']; ?></li>
		                <li class="list-group-item">Role : <?= $dataUser['nama_role']; ?></li>
		                <li class="list-group-item">Tanggal dibuat : <?= date('d-m-Y, H:i', $dataUser['date_created']); ?></li>
		                <li class="list-group-item">Status Aktif : <?= ($dataUser['is_active']) ? 'Aktif' : 'Tidak Aktif'; ?></li>
		              </ul>
		            </div>
	          	</div>
	        </div>
	        <div class="row my-2">
	         	<div class="col-lg">
	         		<a href="<?= base_url('admin/changePassword'); ?>" class="btn btn-danger"><i class="fas fa-fw fa-lock"></i> Ganti Password</a>
	         	</div>
	         </div> 
      	</div>
    </div>
  </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>