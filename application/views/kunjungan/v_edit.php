<section class="content mt-5">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<div class="row justify-content-between mx-1 align-items-center">
					<h5 class="mt-2"><?= $title ?></h5>
					<a href="<?= base_url('kunjungan') ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
				</div>
			</div>
			<div class="card-body">
				<form action="<?= base_url('kunjungan/update') ?>" method="post">
					<input type="hidden" name="id_berobat" value="<?= $kunjungan['id_berobat'] ?>">
					<div class="form-group">
						<label for="tgl_berobat">Tanggal Berobat</label>
						<input type="date" name="tgl_berobat" value="<?= $kunjungan['tgl_berobat'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="id_pasien">Pasien</label>
						<select name="id_pasien" class="form-control">
							<option value="">-- Pilih --</option>
							<?php foreach ($pasien as $data) : ?>
								<?php
								if ($data['id_pasien'] == $kunjungan['id_pasien']) {
									$selected = "selected";
								} else {
									$selected = "";
								}
								?>
								<option value="<?= $data['id_pasien'] ?>" <?= $selected ?>><?= $data['nama_pasien'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="id_dokter">Dokter Tujuan</label>
						<select name="id_dokter" class="form-control">
							<option value="">-- Pilih --</option>
							<?php foreach ($dokter as $data) : ?>
								<?php
								if ($data['id_dokter'] == $kunjungan['id_dokter']) {
									$selected = "selected";
								} else {
									$selected = "";
								}
								?>
								<option value="<?= $data['id_dokter'] ?>" <?= $selected ?>><?= $data['nama_dokter'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>