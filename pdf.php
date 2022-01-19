<?php 
require 'vendor/autoload.php';
require 'functions.php';

$siswa = query("SELECT * FROM siswa");

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		img {
			width: 70px;
		}

		tr, h1 {
			text-align: center;
		}

		h1 {
			text-decoration: underline;
		}

		table {
			position: relative;
			left: 10%;
		}
	</style>
	<title>Daftar Siswa</title>

</head>
<body>

<h1>Daftar Siswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No</th>
				<th>NISN</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Jurusan</th>
			</tr>';

		$i = 1;
		foreach($siswa as $row) {
			$html .= '<tr>
						<td>'. $i++ .'</td>
						<td>
							'. $row["nisn"] .'
						</td>
						<td>
							'. $row["nama"] .'
						</td>
						<td>
							'. $row["kelas"] .'
						</td>
						<td>
							'. $row["jurusan"] .'
						</td>
					 </tr>
					';
			}

$html .= '</table>				
	
</body>
</html>';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Data siswa.pdf");
?>