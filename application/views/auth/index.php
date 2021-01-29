<style>
	body {
		background-color: #FFF5F5;
		color: #CC8177;
	}
</style>

<div class="container">
	<div class="row my-2">
		<div class="col-lg-6 p-3 mx-5">
			<h2>Masuk</h2>
			<form action="<?= base_url('auth/index'); ?>" method="post">
				<div class="form-group">
					<label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
					<input type="text" id="username" class="form-control rounded-pill <?= (form_error('username')) ? 'is-invalid' : ''; ?>" value="<?= set_value('username'); ?>" name="username" required autocomplete="off">
					<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
					<input type="password" id="password" class="form-control rounded-pill <?= (form_error('password')) ? 'is-invalid' : ''; ?>" value="<?= set_value('password'); ?>" name="password" required>
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="row">
					<div class="col my-auto text-left">
						<a class="text-red-brown" href="<?= base_url('auth/forgotPassword'); ?>">Lupa Password?</a>
					</div>
					<div class="col text-right">
						<button type="submit" name="btnLogin" class="btn btn-red-brown rounded-pill"><i class="fas fa-fw fa-sign-in-alt"></i> Masuk</button>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg">
						<a class="text-red-brown" href="<?= base_url('landing'); ?>">Bukan Developer? Klik disini</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
