<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Rendy">
	<meta name="generator" content="Klinik CI">
	<title>Login Klinik</title>


	<!-- Bootstrap core CSS -->
	<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Favicons -->
	<link rel="icon" href="<?= base_url() ?>assets/img/favicons/favicon.ico">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


	<!-- Custom styles for this template -->
	<link href="<?= base_url() ?>assets/custom/signin.css" rel="stylesheet">
</head>

<body class="text-center">

	<form class="form-signin" method="post" action="<?= base_url('auth/login_aksi') ?>">
		<h1 class="h3 mb-3 font-weight-normal">Login Klinik</h1>
		<?php if (validation_errors() != null) : ?>
			<div class="alert alert-danger">
				<?= validation_errors() ?>
			</div>
		<?php endif; ?>
		<label for="inputUsername" class="sr-only">Username</label>
		<input type="text" id="inputUsername" name="username" class="form-control" placeholder="Masukkan Username" autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Masukkan Password">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
		<p class="mt-5 mb-3 text-muted">&copy; Rendy 2022</p>
	</form>



</body>

</html>