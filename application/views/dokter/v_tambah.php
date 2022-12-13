<section class="content mt-5">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<div class="row justify-content-between mx-1 align-items-center">
					<h5 class="mt-2"><?= $title ?></h5>
					<a href="<?= base_url('dokter') ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
				</div>
			</div>
			<div class="card-body">
				<form action="<?= base_url('dokter/insert') ?>" method="post">
					<div class="form-group">
						<label for="nama_dokter">Nama Dokter</label>
						<input type="text" name="nama_dokter" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>