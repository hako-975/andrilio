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
</style>

<header>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-pink">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url(); ?>"><img class="img-fluid img-w-150 rounded my-auto" src="<?= base_url('assets/img/img_properties/') . $portfolio['img_navbar_brand']; ?>" alt="img-navbar-brand"></a>
			<button class="navbar-toggler bg-red-brown" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="text-red-brown nav-link page-scroll mx-2" href="#page-top">Beranda</a>
					</li>
					<?php foreach ($section as $ds): ?>
						<li class="nav-item">
							<a class="text-red-brown nav-link page-scroll mx-2" href="#<?= $ds['nama_section']; ?>"><?= ucwords(strtolower($ds['nama_section'])); ?></a>
						</li>
					<?php endforeach ?>
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
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0 mt-5">
	<div class="jumbotron jumbotron-fluid mt-4 mb-n1">
		<div class="container text-center">
			<a href="<?= base_url('assets/img/img_profil/') . $portfolio['img_profile']; ?>" class="enlarge">
				<img class="img-fluid rounded-circle img-300" src="<?= base_url('assets/img/img_profil/') . $portfolio['img_profile']; ?>" alt="img-profile">
			</a>
			<h1 class="heading_1 text-red-brown mt-3"><?= $portfolio['heading_1']; ?></h1>
			<h3 class="heading_2 text-red-brown"><?= $portfolio['heading_2']; ?></h3>
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
			<div class="row my-3">
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
					<div class="card">
					  <div class="card-header bg-red-brown text-pink">
					    <?= $kontak['judul_kontak']; ?>
					  </div>
					  <ul class="list-group list-group-flush text-red-brown">
					    <li class="list-group-item">No. Telepon : <?= $kontak['no_telepon_kontak']; ?></li>
					    <li class="list-group-item">Alamat : <?= $kontak['alamat_kontak']; ?></li>
					  </ul>
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
				<h5 class="text-pink"><?= $portfolio['footer']; ?></h5>
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
