<?php include("server.php") ?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>Login</title>
		<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
		<!-- Font Awesome icons (free version)-->
		<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="css/styles.css" rel="stylesheet" />
	</head>
	<body>

		<!-- <form action="registration.php" method="post">

			<div class="form-outline mb-4">
				<input type="email" id="form2Example1" class="form-control" />
				<label class="form-label" for="form2Example1">Email address</label>
			</div>


			<div class="form-outline mb-4">
				<input type="password" id="form2Example2" class="form-control" />
				<label class="form-label" for="form2Example2">Password</label>
			</div>


			<div class="row mb-4">
				<div class="col d-flex justify-content-center">

				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
					<label class="form-check-label" for="form2Example31"> Remember me </label>
				</div>
				</div>

				<div class="col">

					<a href="#!">Forgot password?</a>
				</div>
			</div>


			<button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>


			<div class="text-center">
				<p>Not a member? <a href="registration.php">Register</a></p>
			</div>
		</form> -->
		<?php include("nav.php") ?>
		<section class="vh-100 gradient-custom">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<div class="card bg-dark text-white" style="border-radius: 1rem;">
							<div class="card-body p-5 text-center">

								<div class="mb-md-5 mt-md-4 pb-5">

									<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
									<p class="text-white-50 mb-5">Please enter your login and password!</p>
									<form action="login.php" method="post">
										<div class="form-outline form-white mb-4">
											<input type="email" id="typeEmailX" class="form-control form-control-lg" />
											<label class="form-label" for="typeEmailX">Email</label>
										</div>

										<div class="form-outline form-white mb-4">
											<input type="password" id="typePasswordX" class="form-control form-control-lg" />
											<label class="form-label" for="typePasswordX">Password</label>
										</div>

										<p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

										<button class="btn btn-outline-light btn-lg px-5" type="submit" name="login_user">Login</button>
									</form>
								</div>

								<div>
									<p class="mb-0">Don't have an account? <a href="registration.php" class="text-white-50 fw-bold">Sign Up</a>
									</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</body>
</html>