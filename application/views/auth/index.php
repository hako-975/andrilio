<div class="container">
	<div class="row my-2">
		<div class="col-lg">
			<h2>Masuk</h2>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-lg-6">
			<form action="<?= base_url('auth/index'); ?>" method="post">
				<div class="form-group">
					<label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
					<input type="text" id="username" class="form-control <?= (form_error('username')) ? 'is-invalid' : ''; ?>" value="<?= set_value('username'); ?>" name="username" required autocomplete="off">
					<div class="invalid-feedback">
                      <?= form_error('username'); ?>
                    </div>
				</div>
				<div class="form-group">
					<label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
					<input type="password" id="password" class="form-control <?= (form_error('password')) ? 'is-invalid' : ''; ?>" value="<?= set_value('password'); ?>" name="password" required>
					<div class="invalid-feedback">
                      <?= form_error('password'); ?>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg text-left">
						<a href="<?= base_url('auth/forgotPassword'); ?>">Lupa Password</a>
					</div>
					<div class="col-lg text-right">
						<button type="submit" name="btnLogin" class="btn btn-primary"><i class="fas fa-fw fa-sign-in-alt"></i> Masuk</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>