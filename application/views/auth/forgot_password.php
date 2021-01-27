<style>
	body {
		background-color: #FFF5F5;
		color: #CC8177;
	}
</style>

<div class="container">
	<div class="row my-2">
		<div class="col-lg-6 p-3 mx-5">
			<h2>Lupa Password</h2>
			<form method="post" action="<?= base_url('auth/forgotPassword'); ?>">
				<div class="form-group">
					<label for="email"><i class="fas fa-fw fa-envelope"></i> Email</label>
					<input required type="email" value="<?= set_value('email'); ?>" class="form-control rounded-pill <?= (form_error('email')) ? 'is-invalid' : ''; ?>" id="email" name="email">
					<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="row">
				    <div class="col my-auto">
						<a class="text-red-brown" href="<?= base_url('auth/index'); ?>"> Masuk</a>
					</div>
					<div class="col text-right">
						<button type="submit" class="btn btn-red-brown rounded-pill"><i class="fas fa-fw fa-paper-plane"></i> Reset Password</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>