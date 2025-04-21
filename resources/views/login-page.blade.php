<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
	<meta name="author" content="Dreams technologies - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Bharat Distribution</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

	<!-- Feather CSS -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/icons/feather/feather.css') }}">

	<!-- Tabler Icon CSS -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/tabler-icons/tabler-icons.css') }}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Main CSS -->
	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #f8f9fa;
			height: 100vh;
		}

		.login-left {
			background: linear-gradient(to bottom, #f97316, #7c2d12);
			color: white;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 30px;
		}

		.login-left img {
			max-width: 100%;
		}

		.login-right {
			padding: 40px;
		}

		.form-control:focus {
			box-shadow: none;
			border-color: #f97316;
		}

		.btn-orange {
			background-color: #f97316;
			color: white;
		}

		.btn-orange:hover {
			background-color: #ea580c;
		}

		.social-btn img {
			height: 20px;
			margin-right: 8px;
		}
	</style>
</head>

<body class="bg-white">

	<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
				<div class="row">
					<!-- <div class="col-lg-5">
						<div
							class="login-background position-relative d-lg-flex align-items-center justify-content-center d-none flex-wrap vh-100">
							<div class="bg-overlay-img">
								<img src="{{ asset('assets/img/bg/bg-01.png') }}" class="bg1">
								<img src="{{ asset('assets/img/bg/bg-02.png') }}" class="bg2">
								<img src="{{ asset('assets/img/bg/bg-03.png') }}" class="bg3">
							</div>
							<div class="authentication-card w-100">
								<div class="authen-overlay-item border w-100">
									<h1 class="text-white display-1">Empowering people <br> through seamless HR <br>
										management.</h1>
									<div class="my-4 mx-auto authen-overlay-img">
										<img src="{{ asset('assets/img/bg/authentication-bg-01.png') }}" alt="Img">
									</div>
									<div>
										<p class="text-white fs-20 fw-semibold text-center">Efficiently manage your
											workforce, streamline <br> operations effortlessly.</p>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- Left Panel -->
					<div class="col-md-6 login-left d-none d-md-flex flex-column justify-content-center text-center">
						<div style="box-shadow: 0 4px 12px rgba(15, 15, 15, 0.3); padding: 30px;">
							<h2 class="fw-bold">Empowering people<br>through seamless HR management.</h2>
							<img src="{{ asset('assets/img/bg/authentication-bg-01.png') }}" alt="Team Working"
								class="my-4 rounded">
							<h5>Efficiently manage your workforce,<br>streamline operations effortlessly.</h5>
						</div>
					</div>
					<!-- <div class="col-lg-7 col-md-12 col-sm-12">
						<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap">
							@if(session('error'))
								<p style="color: red">{{ session('error') }}</p>
							@endif

							@if(session('success'))
								<p style="color: green">{{ session('success') }}</p>
							@endif
							<div class="col-md-7 mx-auto vh-100">

								<form action="{{ route('login') }}" method="POST"
									class="vh-100 d-flex align-items-center justify-content-center">
									@csrf
									<div class="container" style="max-width: 400px;">
										<div class="text-center mb-4">
											<img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid mb-3"
												alt="Logo" style="max-height: 80px;">
											<h2 class="mb-2">Sign In</h2>
											<p class="mb-0">Please enter your details to sign in</p>
										</div>

										<div class="mb-3">
											<label for="email" class="form-label">Email Address</label>
											<div class="input-group">
												<span class="input-group-text"><i class="bi bi-envelope"></i></span>
												<input type="text" name="email" class="form-control" id="email"
													placeholder="Enter your email">
											</div>
										</div>

										<div class="mb-3">
											<label for="password" class="form-label">Password</label>
											<div class="input-group">
												<span class="input-group-text"><i class="bi bi-lock"></i></span>
												<input type="password" name="password" class="form-control"
													id="password" placeholder="Enter your password">
											</div>
										</div>

										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="remember_me">
												<label class="form-check-label" for="remember_me">Remember Me</label>
											</div>
											<a href="forgot-password.html" class="text-danger">Forgot Password?</a>
										</div>

										<div class="mb-3">
											<button type="submit" class="btn btn-primary w-100">Sign In</button>
										</div>

										<div class="text-center mb-3">
											<p>Don’t have an account? <a href="register.html">Create Account</a></p>
										</div>

										<div class="text-center mb-2">
											<span>Or</span>
										</div>

										<div class="d-flex justify-content-between">
											<a href="#" class="btn btn-outline-primary w-100 me-1">
												<img src="{{ asset('assets/img/icons/facebook-logo.svg') }}"
													alt="Facebook" style="height: 20px;">
											</a>
											<a href="#" class="btn btn-outline-danger w-100 me-1">
												<img src="{{ asset('assets/img/icons/google-logo.svg') }}" alt="Google"
													style="height: 20px;">
											</a>
											<a href="#" class="btn btn-dark w-100">
												<img src="{{ asset('assets/img/icons/apple-logo.svg') }}" alt="Apple"
													style="height: 20px;">
											</a>
										</div>

										<div class="text-center mt-4">
											<p class="text-muted mb-0">&copy; 2024 - Smarthr</p>
										</div>
									</div>
								</form>

							</div>

						</div> -->

					<!-- Right Panel -->
					<div class="col-md-6 login-right d-flex flex-column justify-content-center">
						<div class="w-100" style="max-width: 400px; margin: auto;">
							<div class="text-center mb-4">
								<img src="{{ asset('assets/img/logo.svg') }}" 
								alt="SmartHR Logo"
									style="height: 50px;">
								<h3 class="mt-3">Sign In</h3>
								<p class="text-muted">Please enter your details to sign in</p>
							</div>

							<form action="{{ route('login') }}" method="POST">
							@csrf
								<div class="mb-3">
									<label>Email Address</label>
									<div class="input-group">
										<input type="email" class="form-control" name="email"  placeholder="Enter email" required>
										<span class="input-group-text"><i class="bi bi-envelope"></i></span>
									</div>

								</div>
								<div class="mb-3">
									<label>Password</label>
									<div class="input-group">
										<input type="password" class="form-control" name="password" placeholder="Enter password" required>
										<span class="input-group-text"><i class="bi bi-eye-slash"></i></span>
									</div>
								</div>
								<div class="mb-3 d-flex justify-content-between align-items-center">
									<div>
										<input type="checkbox" id="rememberMe">
										<label for="rememberMe">Remember Me</label>
									</div>
									<a href="#" class="text-danger small">Forgot Password?</a>
								</div>
								<button class="btn btn-orange w-100 mb-3">Sign In</button>
								<p class="text-center">Don’t have an account? <a href="#">Create Account</a></p>
								<hr>
								<div class="d-flex justify-content-center gap-2">
									<button class="btn btn-light flex-fill social-btn"><img
											src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="FB">
										Facebook</button>
									<button class="btn btn-light flex-fill social-btn"><img
											src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google">
										Google</button>
									<button class="btn btn-dark flex-fill social-btn"><img
											src="https://cdn-icons-png.flaticon.com/512/0/747.png" alt="Apple">
										Apple</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
	</div>
	</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

	<!-- Feather Icon JS -->
	<script src="{{ asset('assets/js/feather.min.js') }}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('assets/js/script.js') }}"></script>
	<!-- Bootstrap Icons (optional) -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>