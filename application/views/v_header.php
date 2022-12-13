<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<title>Klinik Suntikan Moral</title>

	<style>
		.navbar {
			background-image: linear-gradient(to right, green, lightgreen);
		}

		.footer {
			margin-top: 200px;
		}

		.navbar-brand, .brand {
			font-family: 'Times New Roman', Times, serif
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="<?= base_url('dashboard') ?>">KLINIK SUNTIKAN MORAL</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link text-light dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
						Master Data
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?= base_url('users') ?>">Data User</a>
						<a class="dropdown-item" href="<?= base_url('dokter') ?>">Data Dokter</a>
						<a class="dropdown-item" href="<?= base_url('pasien') ?>">Data Pasien</a>
						<a class="dropdown-item" href="<?= base_url('obat') ?>">Data Obat</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="<?= base_url('kunjungan') ?>">Kunjungan/Berobat</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="<?= base_url('laporan') ?>">Laporan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="<?= base_url('auth/logout') ?>">Logout</a>
				</li>
			</ul>
		</div>
	</nav>