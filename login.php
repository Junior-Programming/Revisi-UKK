<?php 
require 'functions.php';

/*// Chek connection
if (mysqli_connect_error()) {
	echo "Koneksi databsse Gagal : " . mysqli_connect_error();
} else {
	echo "Berhasil Terkoneksi!";
}*/

// 

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($username) && !empty($password)) {
		$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

		$result = mysqli_num_rows($data);

		if ($result) {
			echo "<script>
					alert('Login Berhasil!');
					document.location.href = 'beranda.php';
			      </script>";
		} else {
			echo "<script>
					alert('Username / Password Salah!')
					alert('Login Gagal!');
			      </script>";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name="login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>