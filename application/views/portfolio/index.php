<div class="wrapper">
  <!-- Sidebar  -->
  <?php require dirname(__FILE__) . '/../templates/admin/sidebar.php'; ?>

  <!-- Page Content  -->
  <div id="content">

    <!-- Navbar -->
    <?php require dirname(__FILE__) . '/../templates/admin/navbar.php'; ?>
    
    <style>
		.jumbotron {
			background-image: url(<?= base_url('assets/img/img_jumbotron/') . $portfolio['img_jumbotron']; ?>);
			background-size: cover;
			background-repeat: no-repeat;
		}

		section.striped:nth-of-type(odd) > .container > .row > .col-lg > hr {
		    display: block;
		    border: 0px;
			background-image: url(<?= base_url('assets/img/img_properties/hr-pink.png'); ?>);
			background-repeat: no-repeat;
		    height: 2rem;
			width: 13.7rem; 
			margin: auto;
		}

		section.striped:nth-of-type(even) > .container > .row > .col-lg > hr {
		    display: block;
		    border: 0px;
			background-image: url(<?= base_url('assets/img/img_properties/hr-red-brown.png'); ?>);
			background-repeat: no-repeat;
		    height: 2rem;
			width: 13.7rem; 
			margin: auto;
		}

		section.striped:nth-of-type(even) {
			color: #CC8177 !important;
		  	background-color: rgb(255,245,245);
		}

		section.striped:nth-of-type(odd) {
			color: #FFF5F5 !important;
		  	background-color: rgb(204,129,119);
		}
	</style>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 py-3 col-6 ml-3 border border-dark border-bottom-0" style="border-top-left-radius: 1rem !important; border-top-right-radius: 1rem !important;">
				<div class="row justify-content-center">
					<div class="col-1 m-auto">
						<img src="<?= base_url('assets/img/img_properties/') . $portfolio['img_favicon']; ?>" alt="icon" style="width: 20px">
					</div>
					<div class="col mt-2">
						<h5 class="font-weight-normal text-truncate portfolio-title"><?= $portfolio['title']; ?></h5>
					</div>
					<a style="right: 0; top: 0;" href="<?= base_url('portfolio/updateTitleAndImgFavicon'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
				</div>
			</div>
		</div>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-expand-md navbar-dark bg-pink sticky-top mb-n4" style="box-shadow: none;">
			<div class="container">
				<div class="row mx-lg-2">
					<div class="col border border-dark rounded">
						<a class="navbar-brand" href="<?= base_url(); ?>"><img class="img-fluid img-w-150 rounded my-auto" src="<?= base_url('assets/img/img_properties/') . $portfolio['img_navbar_brand']; ?>" alt="img-navbar-brand"></a>
						<a style="right: -5px; top: 0;" href="<?= base_url('portfolio/updateImgNavbarBrand'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
					</div>
				</div>
				<button class="navbar-toggler bg-red-brown" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto my-2">
						<li class="nav-item">
							<a class="text-red-brown nav-link page-scroll mx-2" href="#page-top">Beranda</a>
						</li>
						<div class="row mx-lg-2">
							<div class="col border border-dark rounded">
								<?php foreach ($section as $ds): ?>
									<li class="nav-item lg-inline-block-sm-block">
										<a class="lg-inline-block-sm-block text-red-brown nav-link page-scroll mx-2" href="#<?= $ds['nama_section']; ?>"><?= ucwords(strtolower($ds['nama_section'])); ?></a>
									</li>
								<?php endforeach ?>
								<a style="right: -10px; top: 0;" href="<?= base_url('section/index'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
							</div>
						</div>
						<li class="nav-item">
							<a class="text-red-brown nav-link page-scroll mx-2" href="#galeri">Galeri</a>
						</li>
						<li class="nav-item">
							<a class="text-red-brown nav-link page-scroll mx-2" href="#kontak">Kontak</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Begin page content -->
		<main role="main" class="flex-shrink-0 mt-4">
			<div class="row">
				<div class="col border border-dark rounded">
					<div class="jumbotron jumbotron-fluid">
						<div class="container text-center">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-10 border border-dark rounded">
									<a href="<?= base_url('assets/img/img_profil/') . $portfolio['img_profile']; ?>" class="enlarge">
										<img class="img-fluid rounded-circle img-300" src="<?= base_url('assets/img/img_profil/') . $portfolio['img_profile']; ?>" alt="img-profile">
									</a>
									<a style="right: 0px; top: 0;" href="<?= base_url('portfolio/updateImgProfile'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
								</div>
							</div>
							<div class="row my-1 justify-content-center">
								<div class="col-lg-4 col-10 border border-dark rounded">
									<h1 class="heading_1 text-red-brown mt-3"><?= $portfolio['heading_1']; ?></h1>
									<a style="right: 0px; top: 0;" href="<?= base_url('portfolio/updateHeading1'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
								</div>
							</div>
							<div class="row my-1 justify-content-center">
								<div class="col-lg-4 col-10 border border-dark rounded">
									<h3 class="heading_2 text-red-brown"><?= $portfolio['heading_2']; ?></h3>
									<a style="right: 0px; top: 0;" href="<?= base_url('portfolio/updateHeading2'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
								</div>
							</div>
						</div>
					</div>
					<a style="right: 0px; top: 0;" href="<?= base_url('portfolio/updateImgJumbotron'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
				</div>
			</div>


			<?php foreach ($section as $ds): ?>
				<section class="<?= $ds['nama_section']; ?> striped" id="<?= $ds['nama_section']; ?>">
					<div class="container">
						<div class="row my-3">
							<div class="col-lg text-center">
								<h3><?= ucwords(strtolower($ds['nama_section'])); ?></h3>
								<hr class="text-center">
							</div>
						</div>
						<div class="row my-3">
							<div class="col-lg">
								<?= $ds['konten_section']; ?>
							</div>
						</div>
					</div>
				</section>
			<?php endforeach ?>

			<section class="galeri striped" id="galeri">
				<div class="container">
					<div class="row my-3">
						<div class="col-lg text-center">
							<h3>Galeri</h3>
							<hr class="text-center">
						</div>
					</div>
					<div class="row">
						<div class="col border border-dark">
							<div class="row m-3">
								<?php if ($galeri[0]['kolom_galeri'] == 0): ?>
									<div class="card-columns">
								<?php endif ?>
									<?php foreach ($galeri as $dg): ?>
										<?php if ($dg['kolom_galeri'] == 0): ?>
											<div class="card m-3">
										<?php else: ?>
											<?php $col = 12 / $dg['kolom_galeri']; ?>
											<div class="col-<?= $col; ?> my-2">
										<?php endif ?>
												<a href="<?= base_url('assets/img/img_galeri/') . $dg['img_galeri']; ?>" class="enlarge">
													<img class="img-fluid rounded mx-auto" src="<?= base_url('assets/img/img_galeri/') . $dg['img_galeri']; ?>" alt="<?= $dg['img_galeri']; ?>">
												</a>
											</div>
									<?php endforeach ?>
								<?php if ($galeri[0]['kolom_galeri'] == 0): ?>
									</div>
								<?php endif ?>
							</div>
							<a style="right: -5px; top: 0;" href="<?= base_url('portfolio/updateGaleri'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
						</div>
					</div>
				</div>
			</section>

			<section class="kontak striped" id="kontak">
				<div class="container">
					<div class="row my-3">
						<div class="col-lg text-center">
							<h3>Kontak</h3>
							<hr class="text-center">
						</div>
					</div>
					<div class="row my-3">
						<div class="col-lg-4 my-2">
							<div class="row my-1 justify-content-center">
								<div class="col border border-dark rounded">
									<div class="card">
									  <div class="card-header bg-red-brown text-pink">
									    <?= $kontak['judul_kontak']; ?>
									  </div>
									  <ul class="list-group list-group-flush text-red-brown">
									    <li class="list-group-item">No. Telepon : <?= $kontak['no_telepon_kontak']; ?></li>
									    <li class="list-group-item">Alamat : <?= $kontak['alamat_kontak']; ?></li>
									  </ul>
									</div>
									<a style="right: -5px; top: 0;" href="<?= base_url('portfolio/updateKontak'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg my-2 bg-red-brown p-4 mx-3 rounded text-pink">
							<h4>Kirim Aku Sebuah Pesan</h4>
							<form action="<?= base_url('landing/sendMessage'); ?>" method="post">
								<div class="form-group">
									<label for="nama_pengirim"><i class="fas fa-fw fa-user"></i> Nama</label>
									<input type="text" id="nama_pengirim" class="form-control" name="nama_pengirim" required value="<?= set_value('nama_pengirim'); ?>">
								</div>
								<?= form_error('nama_pengirim', '<small class="text-danger">', '</small>'); ?>
								<div class="form-group">
									<label for="email_pengirim"><i class="fas fa-fw fa-envelope"></i> Email</label>
									<input type="text" id="email_pengirim" class="form-control" name="email_pengirim" required value="<?= set_value('email_pengirim'); ?>">
								</div>
								<?= form_error('email_pengirim', '<small class="text-danger">', '</small>'); ?>
								<div class="form-group">
									<label for="wa_pengirim"><i class="fab fa-fw fa-whatsapp"></i> WhatsApp</label>
									<input type="number" id="wa_pengirim" class="form-control" name="wa_pengirim" required value="<?= set_value('wa_pengirim'); ?>">
								</div>
								<?= form_error('wa_pengirim', '<small class="text-danger">', '</small>'); ?>
								<div class="form-group">
									<label for="pesan_pengirim"><i class="fas fa-fw fa-file-signature"></i> Pesan</label>
									<textarea id="pesan_pengirim" class="form-control" name="pesan_pengirim" required value="<?= set_value('pesan_pengirim'); ?>"></textarea>
								</div>
								<?= form_error('pesan_pengirim', '<small class="text-danger">', '</small>'); ?>
								<div class="form-group text-right">
									<button type="submit" class="btn btn-pink"><i class="fas fa-fw fa-paper-plane"></i> Kirim</button>
								</div>
							</form>
						</div>
					</div>	
				</div>
			</section>
		</main>

		<footer class="footer mt-auto pt-4 pb-2 bg-red-brown">
			<div class="container">
				<div class="row my-3">
					<div class="col-lg footer-copyright">
						<div class="row">
							<div class="col border border-dark">
								<h5 class="text-pink"><?= $portfolio['footer']; ?></h5>
								<a style="right: -5px; top: 0;" href="<?= base_url('portfolio/updateFooter'); ?>" class="btn position-absolute"><i class="fas fa-fw fa-edit"></i></a>

							</div>
						</div>
						<a class="text-decoration-none text-pink" href="<?= base_url('auth'); ?>"><i class="fas fa-fw fa-laptop-code"></i> Developer Room</a>
					</div>
					<div class="col-lg footer-sosial-media">
						<?php foreach ($sosial_media as $dsm): ?>
							<a class="text-decoration-none mx-2 text-pink" target="_blank" href="<?= $dsm['link_sosial_media']; ?>"><?= $dsm['icon_sosial_media']; ?></a>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</footer>

		<a class="scroll-to-top rounded" href="#page-top">
		  <i class="fas fa-angle-up"></i>
		</a>
	</div>

  </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>



