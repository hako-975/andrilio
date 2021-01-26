<div class="container">
	<div class="row my-2">
		<div class="col-lg">
			<h2>Lupa Password</h2>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-lg-6">
			<form method="post" action="<?= base_url('auth/forgotPassword'); ?>">
				<div class="form-group">
					<label for="email"><i class="fas fa-fw fa-envelope"></i> Email</label>
					<input required type="email" value="<?= set_value('email'); ?>" class="form-control <?= (form_error('username')) ? 'is-invalid' : ''; ?>" id="email" name="email">
					<div class="invalid-feedback">
                      <?= form_error('username'); ?>
                    </div>
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-paper-plane"></i> Reset Password</button>
				</div>
			    <div class="form-group">
					<a class="text-decoration-none" href="<?= base_url('auth/index'); ?>"> Masuk</a>
				</div>
			</form>
		</div>
	</div>
</div>