<section class="content mt-5">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<div class="row justify-content-between mx-1 align-items-center">
					<h5 class="mt-2"><?= $title ?></h5>
					<a href="<?= base_url('kunjungan/tambah') ?>" class="btn btn-success btn-sm float-right">Kunjungan Baru</a>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Tanggal</th>
								<th>Nama Pasien</th>
								<th>Umur</th>
								<th>Nama Dokter</th>
								<th>Rekam Medis</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($kunjungan as $data) : ?>
								<tr>
									<td class="text-center"><?= $no++ ?></td>
									<td><?= $data['tgl_berobat'] ?></td>
									<td><?= $data['nama_pasien'] ?></td>
									<td><?= $data['umur'] ?></td>
									<td><?= $data['nama_dokter'] ?></td>
									<td>
										<a href="<?= base_url('kunjungan/rekam/') . $data['id_berobat'] ?>" class="btn btn-info btn-sm">Detail</a>
									</td>
									<td>
										<a href="<?= base_url('kunjungan/edit/') . $data['id_berobat'] ?>" class="btn btn-warning btn-sm">Edit</a>
										<a href="<?= base_url('kunjungan/hapus/') . $data['id_berobat'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>