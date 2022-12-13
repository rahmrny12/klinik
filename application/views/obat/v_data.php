<section class="content mt-5">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<div class="row justify-content-between mx-1 align-items-center">
					<h5 class="mt-2"><?= $title ?></h5>
					<a href="<?= base_url('obat/tambah') ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Obat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($obat as $data) : ?>
								<tr>
									<td class="text-center"><?= $no++ ?></td>
									<td><?= $data['nama_obat'] ?></td>
									<td>
										<a href="<?= base_url('obat/edit/') . $data['id_obat'] ?>" class="btn btn-warning btn-sm">Edit</a>
										<a href="<?= base_url('obat/hapus/') . $data['id_obat'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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