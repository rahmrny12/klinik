<section class="content mt-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header text-light bg-success">
						Biodata Pasien
					</div>
					<div class="card-body">
						<table class="table table-sm">
							<tr>
								<th>Nama Pasien</th>
								<td>:</td>
								<td><?= $rekam['nama_pasien'] ?></td>
							</tr>
							<tr>
								<th>Jenis Kelamin</th>
								<td>:</td>
								<td><?= $rekam['jenis_kelamin'] ?></td>
							</tr>
							<tr>
								<th>Umur</th>
								<td>:</td>
								<td><?= $rekam['umur'] ?></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="card mt-4">
					<div class="card-header text-light bg-danger">
						Riwayat Berobat
					</div>
					<div class="card-body">
						<table class="table table-sm table-bordered table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Tanggal Berobat</th>
									<th>Keluhan</th>
									<th>Diagnosa</th>
									<th>Penatalaksanaan</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($riwayat as $data) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data['tgl_berobat'] ?></td>
										<td><?= $data['keluhan_pasien'] ?></td>
										<td><?= $data['hasil_diagnosa'] ?></td>
										<td><?= $data['penatalaksanaan'] ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header text-light bg-info">
						Rekam Medis
					</div>
					<div class="card-body">
						<form action="<?= base_url('kunjungan/insert_rekam') ?>" method="post">
							<input type="hidden" name="id_berobat" value="<?= $rekam['id_berobat'] ?>">
							<div class="form-group">
								<label for="keluhan">Keluhan</label>
								<textarea name="keluhan" class="form-control"><?= $rekam['keluhan_pasien'] ?></textarea>
							</div>
							<div class="form-group">
								<label for="diagnosa">Diagnosa</label>
								<textarea name="diagnosa" class="form-control"><?= $rekam['hasil_diagnosa'] ?></textarea>
							</div>
							<div class="form-group">
								<label for="penatalaksanaan">Penatalaksanaan</label>
								<select name="penatalaksanaan" class="form-control">
									<option value="<?= $rekam['penatalaksanaan'] ?>"><?= $rekam['penatalaksanaan'] ?></option>
									<option value="Rawat Jalan">Rawat Jalan</option>
									<option value="Rawat Inap">Rawat Inap</option>
									<option value="Rujuk">Rujuk</option>
									<option value="Lainnya">Lainnya</option>
								</select>
							</div>

							<button type="submit" class="btn-danger btn-sm">Simpan Data</button>
						</form>
					</div>
				</div>

				<div class="card mt-4">
					<div class="card-header text-light bg-warning">
						Resep Obat
					</div>
					<div class="card-body">
						<form action="<?= base_url('kunjungan/insert_resep') ?>" method="post">
							<input type="hidden" name="id_berobat" value="<?= $rekam['id_berobat'] ?>">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<select name="id_obat" class="form-control">
											<?php foreach ($obat as $data) : ?>
												<option value="<?= $data['id_obat'] ?>"><?= $data['nama_obat'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>

								<div class="col-md-4">
									<button type="submit" class="btn-success btn-sm">+</button>
								</div>
							</div>
						</form>

						<hr>

						<table class="table table-striped table-sm">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama Obat</th>
									<th>#</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach($resep as $data) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data['nama_obat'] ?></td>
										<td>
											<a href="<?= base_url('kunjungan/hapus_resep/') . $data['id_resep'] . '/' . $data['id_berobat'] ?>">x</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>