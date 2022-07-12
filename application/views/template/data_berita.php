	<div class="container">
		<h1>Halaman Admin</h1>
	</div>

	<div class="container">
		<button type="button" class="btn btn-success" style="margin-bottom:10px;"><a href="<?= BASE_URL('Admin/insert') ?>" style="text-decoration:none; color: white;">Tambah Data</a> </button>
	</div>

	<div class="container">
		<table class="table table-hover" border="3px">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">ID Berita</th>
					<th scope="col">Penulis</th>
					<th scope="col">Judul</th>
					<th scope="col">Gambar</th>
					<th scope="col">Tgl</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($data as $berita) { ?>
					<tr>
						<th scope="row"><?= $no++  ?></th>
						<td><?= $berita["id_berita"] ?></td>
						<td><?= $berita["nama"] ?></td>
						<td><?= $berita["judul"] ?></td>
						<td><img src="<?= base_url() ?>assets/gambar/<?= $berita['gambar'] ?>" width="100" height="80"></td>
						<td><?= $berita["tgl"] ?></td>
						<td>
							<a href="<?= BASE_URL('Admin/edit/' . $berita['id_berita']) ?>" style="text-decoration:none; color: black;"><button type="button" class="btn btn-warning">Edit </button></a>
							<a href="<?= BASE_URL('Admin/delete_data/' . $berita['id_berita']) ?>" style="text-decoration:none; color: white;"><button type="button" class="btn btn-danger">Hapus </button></a>
						</td>
					</tr>
				<?php }  ?>
			</tbody>
		</table>
	</div>

	</body>

	</html>