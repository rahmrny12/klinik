<section class="content mt-5">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<div class="row justify-content-between mx-1 align-items-center">
					<h5 class="mt-2"><?= $title ?></h5>
					<a href="<?= base_url('pasien') ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
				</div>
			</div>
			<div class="card-body">
				<form action="<?= base_url('pasien/update') ?>" method="post">
					<input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien'] ?>">
					<div class="form-group">
						<label for="nama_pasien">Nama Pasien</label>
						<input type="text" name="nama_pasien" value="<?= $pasien['nama_pasien'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control">
							<option value="<?= $pasien['jenis_kelamin'] ?>"><?= $pasien['jenis_kelamin'] ?></option>
							<option value="L">L</option>
							<option value="P">P</option>
						</select>
					</div>
					<div class="form-group">
						<label for="umur">Umur</label>
						<input type="text" name="umur" value="<?= $pasien['umur'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>