<style>
	body {
		background-color: #FFF5F5;
		color: #CC8177;
	}
</style>

<div class="container">
	<div class="row my-2">
		<div class="col-lg">
			<h2>Ganti Password</h2>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-lg-6">
			<form method="post" action="<?= base_url('auth/changePassword'); ?>">
				<div class="form-group">
					<h5><i class="fas fa-fw fa-sync"></i>  Ganti Password Untuk <?= $this->session->userdata('reset_email'); ?></h5>
				</div>
				<div class="form-group">
			    	<label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
					<div class="input-group" id="show_hide_password">
						<input class="form-control" required id="password" type="password"  name="password">
					  	<div class="input-group-append">
							<a class="box-shadow-2 btn btn-red-brown border text-white"><i id="icon_eye1" class="fas fa-fw fa-eye-slash" aria-hidden="true"></i></a>
						</div>
					</div>
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
		    		<p id="text" style="display: none;" class="alert alert-danger mt-2 p-1"><small>Caps lock is ON.</small></p>
				</div>
				<div class="form-group">
			    	<label for="password_verify"><i class="fas fa-fw fa-lock"></i> Verifikasi Password</label>
					<div class="input-group" id="show_hide_password_verify">
						<input class="form-control" required id="password_verify" type="password"  name="password_verify">
					  	<div class="input-group-append">
							<a class="box-shadow-2 btn btn-red-brown border text-white"><i id="icon_eye2" class="fas fa-fw fa-eye-slash" aria-hidden="true"></i></a>
						</div>
					</div>
					<?= form_error('password_verify', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
		    		<p id="text2" style="display: none;" class="alert alert-danger mt-2 p-1"><small>Caps lock is ON.</small></p>
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-red-brown"><i class="fas fa-fw fa-paper-plane"></i> Ganti Password</button>
				</div>
			</form>
		</div>
	</div>
</div>