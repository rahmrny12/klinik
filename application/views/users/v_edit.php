<section class="content mt-5">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<div class="row justify-content-between mx-1 align-items-center">
					<h5 class="mt-2"><?= $title ?></h5>
					<a href="<?= base_url('users') ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
				</div>
			</div>
			<div class="card-body">
				<form action="<?= base_url('users/update') ?>" method="post">
					<input type="hidden" name="id" value="<?= $user['id'] ?>">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" value="<?= $user['username'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="nama_lengkap">Nama Lengkap</label>
						<input type="text" name="nama_lengkap" value="<?= $user['nama_lengkap'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" placeholder="Kosongkan jika tidak ingin merubah password." class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>