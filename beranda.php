<?php 
// Hubungkan ke database
require 'functions.php';

$siswa = query("SELECT * FROM siswa");

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href='beranda.php'
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href='beranda.php'
              </script>"; 
    }
}

if (isset($_POST["cari"])) {
    $siswa = cari($_POST['keyword']);
}

if (isset($_POST["cetak"])) {
    header("Location: cetak_exel.php");
}

if (isset($_POST['pdf'])) {
    header("location: pdf.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style1.css"> -->

    <title>Latihan UKK</title>
</head>

<body>

    <!-- <div class="loading"> -->
        <!-- <h2>2020</h2> -->
        <!-- <div class="bar"></div> -->
        <!-- <h2>2021</h2> -->
    <!-- </div> -->

    <h1 class="text-center mt-3">Latihan UKK</h1>
    <h1 class="text-center" style="text-decoration: underline;">By Ahmad Sopyan</h1>

    <!-- Awal Card Form-->
    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-primary text-white" style="font-size: 20px;">
                Form Input Data Siswa
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control" name="nisn" id="nisn"
                            placeholder="Input NISN anda disini . ." required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            placeholder="Input Nama anda disini . ." required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas"
                            placeholder="Input kelas anda disini . ." required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option></option>
                            <option value="Komputer">Komputer</option>
                            <option value="Otomotif">Otomotif</option>
                            <option value="Bangunan">Bangunan</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <button type="reset" class="btn btn-danger" name="reset">Kosongkan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Card Form-->


    <!-- Awal Card Tabel -->
    <div class="container" style="box-sizing: border-box;">
        <div class="card mt-3">
            <div class="card-header bg-success text-white text-center" style="font-size: 20px;">
            Daftar Mahasiswa
            </div>



        <br>

        <form action="" method="POST" style="position: relative; top: 10px; left: 22px;">
            <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian. . ." autocomplete="off">
            <button type="submit" name="cari" class="btn btn-info">Cari!</button>

            <!-- Exel -->
            <button class="btn btn-success" style="float: right; position: relative; right: 40px; cursor: pointer;" type="submit" name="cetak" target="_blank">Exel</button>

            <!-- Pdf -->
            <button class="btn btn-danger" style="float: right; position: relative; right: 50px; cursor: pointer;" href="pdf.php" name="pdf" target="_blank">Pdf</button>

            <!-- Print View -->
            <button class="btn btn-warning" style="float: right; position: relative; right: 60px; cursor: pointer">
                <a href="view.php" style="text-decoration: none; color: white;">View</a>
            </button>
        </form>


        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr class="text-center">
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <?php $no = 1; ?>
                    <?php foreach ($siswa as $row) : ?>
                </tr>
                <tr class="text-center">
                    <td><?= $no; ?></td>
                    <td><?= $row['nisn']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kelas']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin mengubah data ini ?');" class="btn btn-warning">Edit</a> 
                        |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghpus data ini ?');" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php $no++ ?>
                <?php endforeach; ?>
            </table>

            <button class="btn btn-danger"><a href="index.php" style="text-decoration: none; color: white;">Logout</a></button>
        </div>
    </div>
    </div>
    <!-- Ahkir Card Tabel -->


    <script src="js/bootstrap.min.js"></script>
</body>

</html>