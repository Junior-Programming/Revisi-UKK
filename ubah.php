<?php 
require 'functions.php';

// Ambil data dari URL
$id = $_GET['id'];

// Query data berdasarkan id
$sis = query("SELECT * FROM siswa WHERE id = $id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
	if (ubah($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil diubah!');
			document.location.href = 'beranda.php'
		</script>
	";
	} else {
		echo "
		<script>
			alert('data Gagal diubah!');
			document.location.href = 'ubah.php'
		</script>
	";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Latihan UKK</title>
</head>

<body>
    <h1 class="text-center mt-3">Edit Data</h1>
    <!-- <h1 class="text-center">By Ahmad Sopyan</h1> -->

    <!-- Awal Card Form-->
    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Form Input Data Siswa
            </div>
            <div class="card-body">
                <form action="" method="POST">
                	<input type="hidden" name="id" value="<?= $sis["id"]; ?>">
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Input NISN anda disini . ." required value="<?= $sis["nisn"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Input Nama anda disini . ." required value="<?= $sis["nama"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Input kelas anda disini . ." required value="<?= $sis["kelas"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option></option>
                            <?php if($sis["jurusan"] == 'Komputer') : ?>
                            <option value="Komputer" selected>Komputer</option>
	                        <?php else : ?>
                            <option value="Komputer">Komputer</option>
                            <?php endif ?>

                            <?php if($sis["jurusan"] == 'Otomotif') : ?>
                            <option value="Otomotif" selected>Otomotif</option>
	                        <?php else : ?>
                            <option value="Otomotif">Otomotif</option>
                            <?php endif ?>

                            <?php if($sis["jurusan"] == 'Bangunan') : ?>
                            <option value="Bangunan" selected>Bangunan</option>
	                        <?php else : ?>
                            <option value="Bangunan">Bangunan</option>
                            <?php endif ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <button type="reset" class="btn btn-danger" name="reset">Kosongkan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Card Form-->

    <script src="js/bootstrap.min.js"></script>
</body>

</html>