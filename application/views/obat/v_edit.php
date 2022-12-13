<section class="content mt-5">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<div class="row justify-content-between mx-1 align-items-center">
					<h5 class="mt-2"><?= $title ?></h5>
					<a href="<?= base_url('obat') ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
				</div>
			</div>
			<div class="card-body">
				<form action="<?= base_url('obat/update') ?>" method="post">
					<input type="hidden" name="id_obat" value="<?= $obat['id_obat'] ?>">
					<div class="form-group">
						<label for="nama_obat">Nama Obat</label>
						<input type="text" name="nama_obat" value="<?= $obat['nama_obat'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>