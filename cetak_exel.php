<?php 
require 'functions.php';

$siswa = query("SELECT * FROM siswa");

$query = "SELECT * FROM siswa";
$barang = mysqli_query($koneksi, $query);
$hitung = mysqli_num_rows($barang);

header("content-type:application/vnd-ms-excel ");
header("content-disposition:attachment;filename=Data-Siswa.xls"); 
?>

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