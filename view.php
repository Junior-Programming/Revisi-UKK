<?php 
require 'functions.php';

$siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title style="display: none;">CETAK</title>

	<style>
		div {
			text-align: center;
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body>

	<h1 style="text-align: center; text-decoration: underline;">Daftar Siswa</h1>

	<div class="card-body">
		<table class="table table-bordered table-striped" border="1" cellpadding="1" cellspacing="0">
			<tr>
				<th>No</th>
				<th>NISN</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Jurusan</th>
			</tr>
			<?php $no = 1; ?>
			<?php while($data = mysqli_fetch_array($siswa)) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td> <?= $data['nisn']; ?> </td>
				<td> <?= $data['nama']; ?> </td>
				<td> <?= $data['kelas']; ?> </td>
				<td> <?= $data['jurusan']; ?> </td>
			</tr>
			<?php $no++; ?>
			<?php endwhile; ?>
		</table>

		<script>
			window.print();
		</script>
	</div>
	
</body>
</html>