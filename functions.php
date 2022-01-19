<?php 
$koneksi = mysqli_connect("localhost", "root", "", "db_ukk");

function query($query) {
	global $koneksi;

	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data) {
	global $koneksi;

	// Ambil data tiap element dalam form
	$nisn = htmlspecialchars($data['nisn']);
	$nama = htmlspecialchars($data['nama']);
	$kelas = htmlspecialchars($data['kelas']);
	$jurusan = htmlspecialchars($data['jurusan']);

	// query data 
	$query = "INSERT INTO siswa VALUES 
			('', '$nisn', '$nama', '$kelas', '$jurusan')
				";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function hapus($id) {
	global $koneksi;

	mysqli_query($koneksi, "DELETE FROM siswa WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

function ubah($data) {
	global $koneksi;


	// Ambil data dari tiap form
	$id = $data["id"];
	$nisn = htmlspecialchars($data["nisn"]);
	$nama = htmlspecialchars($data["nama"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	// Query ubah data
	$query = "UPDATE siswa SET 
				nisn = '$nisn',
				nama = '$nama',
				kelas = '$kelas',
				jurusan = '$jurusan'

				WHERE id = $id
				";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function cari($keyword) {
	$query = "SELECT * FROM siswa WHERE 
			nisn LIKE '%$keyword%' OR
			nama LIKE '%$keyword%' OR
			kelas LIKE '%$keyword%' OR
			jurusan LIKE '%$keyword%'
		";

	return query($query);	
}
?>