<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h3 class="mt-5">Klinik Suntikan Moral</h3>
		<small>Jl. Pemuda Pancasila, Desa Beda-beda, Kec. Semboro, Jember, Jawa Timur</small>
		<hr>
		<h4 class="mb-4"><?= $title ?></h4>

		<table class="table table-striped table-bordered">
			<tr>
				<th>No.</th>
				<th>Tanggal Berobat</th>
				<th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Umur</th>
				<th>Dokter Rujukan</th>
				<th>Keluhan</th>
				<th>Diagnosa</th>
				<th>Penatalaksanaan</th>
			</tr>
			<?php
			$no = 1;
			foreach ($kunjungan as $data) : ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $data['tgl_berobat'] ?></td>
					<td><?= $data['nama_pasien'] ?></td>
					<td><?= $data['jenis_kelamin'] ?></td>
					<td><?= $data['umur'] ?></td>
					<td><?= $data['nama_dokter'] ?></td>
					<td><?= $data['keluhan_pasien'] ?></td>
					<td><?= $data['hasil_diagnosa'] ?></td>
					<td><?= $data['penatalaksanaan'] ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</body>

</html>