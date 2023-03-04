<!DOCTYPE html>
<html lang="en">

<head>

	<title>Gradient Able bootstrap admin template by codedthemes</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Codedthemes" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('admin/assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">




</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="../assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<div class="input-group mb-3">
							<span class="input-group-text"><i class="feather icon-user"></i></span>
							<input type="text" class="form-control" placeholder="Username">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"><i class="feather icon-mail"></i></span>
							<input type="email" class="form-control" placeholder="Email address">
						</div>
						<div class="input-group mb-4">
							<span class="input-group-text"><i class="feather icon-lock"></i></span>
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group text-left mt-2">
							<div class="checkbox checkbox-primary d-inline">
								<input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
								<label for="checkbox-fill-2" class="cr">Send me the <a href="#"> Newsletter</a> weekly.</label>
							</div>
						</div>
						<button class="btn btn-primary btn-block mt-2 mb-4">Sign up</button>
						<p class="mb-2">Already have an account? <a href="{{ route('login') }}" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('admin/assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/menu-setting.js') }}"></script>

</body>

</html>