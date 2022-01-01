<script src="dist/sweetalert2.all.min.js"></script>
<?php

//koneksi ke databse
include 'koneksi.php';


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function register($data){
	global $conn;

	
    $nama_pengguna = mysqli_real_escape_string($conn, $data["nama_pengguna"]);
	$username_pengguna = strtolower(stripslashes($data["username_pengguna"]));
	$password_pengguna = mysqli_real_escape_string($conn, $data["password_pengguna"]);
    $email_pengguna = mysqli_real_escape_string($conn, $data["email_pengguna"]);
	$password2 = mysqli_real_escape_string($conn, $data["password_pengguna"]);
    //$nohp_pengguna = mysqli_real_escape_string($conn, $data["nohp_pengguna"]);
	//$role = mysqli_real_escape_string($conn, $data["role"]);

	$result = mysqli_query($conn, "SELECT username_pengguna FROM pengguna WHERE 
    username_pengguna = '$username_pengguna'");

if(mysqli_fetch_assoc($result)){
	echo "<script>
				alert('username sudah terdaftar');
		  </script>";	  
		  return false;
}
//cek konfirmasi password
if ($password_pengguna !== $password2){
	echo "<script>
				alert('password tidak sesuai');
		  </script>";	  
		  return false;
}

	//if( isset($_POST['register']) ){
	//$nama_pengguna 			= $_POST['nama_pengguna'];
	//$username_pengguna    	= $_POST['username_pengguna'];
	//$password_pengguna      = $_POST['password_pengguna'];
	
	
  
	//if( mail( $nama_pengguna, $b='username_pengguna', $password_pengguna) ){
	//echo 'Akun sudah terdaftar';

	//}
   //}


//	if(mysqli_fetch_assoc($result)){


	//	echo "<script>
		//Swal.fire(
			//'Akun Sudah Terdaftar!',
			//'Anda sudah registrasi silahkan login',
			//'error'
		
		//  )
		//	  </script>";	  
			 
			 // return false;
			 // header("Location: login.php");
	//}

	// enkripsi password

	$password_pengguna = password_hash($password_pengguna, PASSWORD_DEFAULT);


	// tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO pengguna VALUES
    ('','$nama_pengguna','$username_pengguna','$password_pengguna',
    '$email_pengguna', '','','')");

	return mysqli_affected_rows($conn);
}
?>
