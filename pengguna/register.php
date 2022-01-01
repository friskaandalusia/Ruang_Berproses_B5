<?php

require 'functions.php';

if(isset($_POST["register"])){
	if(register($_POST) > 0){
		echo "<script>
		  alert('User berhasil ditambahkan!');
			</script>"; 
		  header("Location: login.php");
		  exit;  
	  } else {
		echo mysqli_error($conn);
	  }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pengguna Ruang Berproses</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
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
			<form action="" method="post">
				<img src="img/avatar.png">
				<h1 class="title">Yuk Registrasi!</h1>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nama Lengkap</h5>
           		   		<input type="text" name="nama_pengguna" id="nama_pengguna" class="input">
           		   </div>
           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email_pengguna" id="email_pengguna"class="input">
           		   </div>
           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nama Pengguna</h5>
           		   		<input type="text" name="username_pengguna" id="username_pengguna"class="input">
           		   </div>
           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Kata Sandi</h5>
           		   		<input type="password" name="password_pengguna" id="password_pengguna" class="input">
           		   </div>
           		</div>
                   
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Ulangi Kata Sandi</h5>
           		    	<input type="password" name="password2" id="password2"class="input">
            	   </div>
				   
            	</div>
                <input type="submit" name="register" class="btn" value="Daftar Sekarang">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>