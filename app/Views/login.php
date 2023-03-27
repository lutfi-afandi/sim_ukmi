<!DOCTYPE html>
<html lang="en">

<head>
	<title>Masuk Sistem</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<link rel="icon" href="<?php echo base_url(); ?>gambar/Logo_UKMI.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/css/style.css">
</head>

<body>
	<!-- Card LOGIN -->
	<div class="shadow">
		<div class="auth-wrapper">
			<div class="auth-content">
				<div class="card">
					<div class="row align-items-center text-center">
						<div class="col-md-12">
							<form method="POST" action="<?php echo site_url(); ?>/administrator/login/masuk" class="needs-validation" novalidate="">
								<div class="card-body">
									<img src="<?php echo base_url(); ?>gambar/Logo_UKMI.png" style="width:120px" alt="" class="img-fluid mb-4">
									<h4 class="mb-3 f-w-400">LOGIN SISTEM</h4>
									<div class="form-group mb-3">
										<label class="floating-label" for="Email">Username</label>
										<input type="text" class="form-control" id="Email" placeholder="" name="username" required>
									</div>
									<div class="form-group mb-4">
										<label class="floating-label" for="Password">Password</label>
										<input type="password" class="form-control" id="Password" placeholder="" name="password" required>
									</div>
									<div class="shadow">
										<button class="btn btn-block btn-primary mb-4">LOGIN</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ auth-signin ] end -->

	<!-- Required Js -->
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/vendor-all.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/ripple.js"></script>
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/pcoded.min.js"></script>
</body>

</html>