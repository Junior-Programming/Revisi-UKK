<?php 
require 'functions.php';

$siswa = query("SELECT * FROM siswa");

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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>My Web</title>
</head>
<body>

	<header>
		<a href="#" class="logo">Moon</a>

		<ul>
			<li>
				<a href="index.php" class="active">Home</a>
			</li>
			<li>
				<a href="#">Work</a>
			</li>
			<li>
				<a href="login.php">Admin</a>
			</li>
			<li>
				<a href="contack.php">Contack</a>
			</li>
		</ul>
	</header>

	<section>
		<img src="images/stars.png" id="stars">
		<img src="images/moon.png" id="moon">
		<img src="images/mountains_behind.png" id="mountains_behind">
		<h2 id="text">My Work</h2>
		<a href="#sec" id="btn">Explore</a>
		<img src="images/mountains_front.png" id="mountains_front">
	</section>

	<div class="sec" id="sec">
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
            <button class="btn btn-warning" onclick="window.print()" style="float: right; position: relative; right: 60px; cursor: pointer">View</button>
        </form>


        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr class="text-center">
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
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
                </tr>
                <?php $no++ ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    </div>
    <!-- Ahkir Card Tabel -->

	<script>
		let stars = document.getElementById('stars');
		let moon = document.getElementById('moon');
		let mountains_behind = document.getElementById('mountains_behind');
		let text = document.getElementById('text');
		let btn = document.getElementById('btn');
		let mountains_front = document.getElementById('mountains_front');
		let header = document.querySelector('header');

		window.addEventListener('scroll', function() {
			let value = window.scrollY;
			stars.style.left = value * 0.25 + 'px';
			moon.style.top = value * 1.05 + 'px';
			mountains_behind.style.top = value * 0.5 + 'px';
			mountains_front.style.top = value * 0 + 'px';
			text.style.marginRight = value * 4 + 'px';
			text.style.marginTop = value * 1.3 + 'px';
			btn.style.marginTop = value * 1.3 + 'px';
			header.style.top = value * 0.5 + 'px';
		})
	</script>
	
</body>
</html>