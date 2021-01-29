		<!-- SweetAlert2 -->
		<div class="flashdata" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
		<div class="flashdata-success" data-flashdata="<?= $this->session->flashdata('message-success'); ?>"></div>
		<div class="flashdata-failed" data-flashdata="<?= $this->session->flashdata('message-failed'); ?>"></div>
		
		<!-- script -->
		<script src="<?= base_url('assets/vendor/jquery/jquery-3.5.1.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/datatables/js/dataTables.bootstrap4.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/fancybox/jquery.fancybox.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/fontawesome/js/all.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
		
		<script src="<?= base_url('assets/js/andrilio.js'); ?>"></script>
		
		<!-- configuration -->
		<script src="<?= base_url('assets/js/jquery-easing-config.js'); ?>"></script>
		<script src="<?= base_url('assets/js/datatables-config.js'); ?>"></script>
		<script src="<?= base_url('assets/js/popper-config.js'); ?>"></script>
		<script src="<?= base_url('assets/js/fancybox-config.js'); ?>"></script>
		<script src="<?= base_url('assets/js/sweetalert2-config.js'); ?>"></script>
	</body>
</html>