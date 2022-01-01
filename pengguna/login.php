<?php

session_start();

if (isset($_SESSION["login"])){
  header("Location: index.php");
exit;
}

require 'functions.php';
include 'koneksi.php';

if (isset($_POST["login"])){
include "koneksi.php";

	$username_pengguna = $_POST["username_pengguna"];
	$password_pengguna = $_POST["password_pengguna"];
  
	$result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username_pengguna = '$username_pengguna'");
	$row 	= mysqli_num_rows($result); 
	//cek username
	if(mysqli_num_rows($result) === 1){
		
	  // cek password
	  $row = mysqli_fetch_assoc($result);
	  if (password_verify($password_pengguna, $row["password_pengguna"])){

	// set session
		$_SESSION["login"] = true;
		$_SESSION["username_pengguna"] = $username_pengguna;
		$_SESSION["role"] = $row["role"];
		  if (isset($_POST['remember'])) {
		  // buat cookie
  
		  setcookie('imp_info', $row['imp_info'], time() + (60*60*2));
		  setcookie('key', hash('sha256', $row['username_pengguna']), time() + (60*60*2));
		  }
		  
		header("Location: ../index.php");
		exit;
	  }
	}
  
	$error = true;
  
  }  

if (isset($_COOKIE['imp_info']) && isset($_COOKIE['key'])) {
    $imp_info = $_COOKIE['imp_info'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username_pengguna FROM pengguna WHERE id_pengguna=$imp_info");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username_pengguna'])) {
        $_SESSION['login'] = true;
		$_SESSION["username_pengguna"] = $row['username_pengguna'];
	    $_SESSION["role"] = $row["role"];
    }
}




?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Pengguna Ruang Berproses</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php 
if(isset($error)) :?>
<p style="color:red; font-style:italic;">username / password salah</p>
<?php endif;?>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="img/avatar.png">
				<h1 class="title">Selamat Datang</h1>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nama Pengguna</h5>
           		   		<input type="text" name="username_pengguna" id="username_pengguna"class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Kata Sandi</h5>
           		    	<input type="password" name="password_pengguna" id="password_pengguna" class="input" required>
            	   </div>
            	</div>
            	<!--<a href="#">Lupa Password?</a>-->
            	<input type="checkbox" name="remember" id="remember">
            	<label for="remember">Remember me</label>
            	<input type="submit" name="login" class="btn" value="Masuk" >
				
				<script src="dist/sweetalert2.all.min.js"></script>
				
				<a href="register.php">Belum memiliki akun? Daftar Sekarang!</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>