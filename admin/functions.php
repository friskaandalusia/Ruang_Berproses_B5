<?php

//koneksi ke databse
$conn = mysqli_connect("localhost","root","","alcampcoba");



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

	$id_admin = mysqli_real_escape_string($conn, $data["id_admin"]);
	$nama_admin = mysqli_real_escape_string($conn, $data["nama_admin"]);
	$username_admin = strtolower(stripslashes($data["username_admin"]));
	$password_admin = mysqli_real_escape_string($conn, $data["password_admin"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$nohp_admin = mysqli_real_escape_string($conn, $data["nohp_admin"]);
	$alamat_admin = mysqli_real_escape_string($conn, $data["alamat_admin"]);
	$tgllahir_admin = mysqli_real_escape_string($conn, $data["tgllahir_admin"]);
	$foto_admin = mysqli_real_escape_string($conn, $data["foto_admin"]);

	
	$result = mysqli_query($conn, "SELECT username_admin FROM admin WHERE username_admin = '$username_admin'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
					alert('username sudah terdaftar');
			  </script>";	  
			  return false;
	}
	//cek konfirmasi password
	if ($password_admin !== $password2){
		echo "<script>
					alert('password tidak sesuai');
			  </script>";	  
			  return false;
	}

	// enkripsi password

	$password_admin = password_hash($password_admin, PASSWORD_DEFAULT);


	// tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO admin VALUES('','$nama_admin','$username_admin','$password_admin','$nohp_admin','$alamat_admin','$tgllahir_admin','$foto_admin')");

	return mysqli_affected_rows($conn);
}

function ubah_admin($data){
	global $conn;
	// ambil data dari tiap elemen dalam form
	$id_admin = htmlspecialchars($data["id_admin"]);
	$nama_admin = htmlspecialchars($data["nama_admin"]);
	$nohp_admin = htmlspecialchars($data["nohp_admin"]);
	$alamat_admin = htmlspecialchars($data["alamat_admin"]);
	$tgllahir_admin = htmlspecialchars($data["tgllahir_admin"]);
	$foto_adminLama = htmlspecialchars($data["foto_adminLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['foto_admin']['error'] === 4){
		$foto_admin = $foto_adminLama;
	} else {
		$foto_admin = upload_admin();
	}

		// query update data
	$query = "UPDATE admin SET nama_admin='$nama_admin',nohp_admin='$nohp_admin',alamat_admin='$alamat_admin', tgllahir_admin='$tgllahir_admin',foto_admin='$foto_admin' WHERE id_admin = $id_admin";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function upload_admin(){

	$namaFile = $_FILES['foto_admin']['name'];
	$ukuranFile = $_FILES['foto_admin']['size'];
	$error = $_FILES['foto_admin']['error'];
	$tmpName = $_FILES['foto_admin']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if( $error === 4){
		echo "<script>
				alert('pilih gambar terlebih dahulu');
			</script>";
			return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
				alert('yang anda upload bukan gambar');
			</script>";
			return false;	
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){
		echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
			return false;
	}

	// lolos pengecekan, gambar siap upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/'. $namaFileBaru);

	return $namaFileBaru;


}







function tambah_produk($data){
	global $conn;
	// ambil data dari tiap elemen dalam form

	$nama_alat = htmlspecialchars($data["nama_alat"]);
	$deskripsi_alat = htmlspecialchars($data["deskripsi_alat"]);
	$spesifikasi_alat = htmlspecialchars($data["spesifikasi_alat"]);
	$hargasewa_alat = htmlspecialchars($data["hargasewa_alat"]);
	$id_mitra =htmlspecialchars($data["id_mitra"]);

	//upload gambar
	$foto_alat = upload_produk();
	if (!$foto_alat){
		return false;
	}

		// query insert data
	$query = "INSERT INTO alat_camping VALUES ('', '$nama_alat','$deskripsi_alat','$spesifikasi_alat','$hargasewa_alat','$foto_alat','$id_mitra')";


	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);

}

function upload_produk(){

	$namaFile = $_FILES['foto_alat']['name'];
	$ukuranFile = $_FILES['foto_alat']['size'];
	$error = $_FILES['foto_alat']['error'];
	$tmpName = $_FILES['foto_alat']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if( $error === 4){
		echo "<script>
				alert('pilih gambar terlebih dahulu');
			</script>";
			return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
				alert('yang anda upload bukan gambar');
			</script>";
			return false;	
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){
		echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
			return false;
	}

	// lolos pengecekan, gambar siap upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/'. $namaFileBaru);

	return $namaFileBaru;


}

function ubah_produk($data){
	global $conn;
	// ambil data dari tiap elemen dalam form
	$id_alat = htmlspecialchars($data["id_alat"]);
	$nama_alat = htmlspecialchars($data["nama_alat"]);
	$deskripsi_alat = htmlspecialchars($data["deskripsi_alat"]);
	$spesifikasi_alat = htmlspecialchars($data["spesifikasi_alat"]);
	$hargasewa_alat = htmlspecialchars($data["hargasewa_alat"]);
	$id_mitra =htmlspecialchars($data["id_mitra"]);
	$foto_alatLama = htmlspecialchars($data["foto_alatLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['foto_alat']['error'] === 4){
		$foto_alat = $foto_alatLama;
	} else {
		$foto_alat = upload_produk();
	}

		// query update data
	$query = "UPDATE alat_camping SET nama_alat='$nama_alat',deskripsi_alat='$deskripsi_alat',spesifikasi_alat='$spesifikasi_alat', hargasewa_alat='$hargasewa_alat',foto_alat='$foto_alat' , id_mitra='$id_mitra' WHERE id_alat = $id_alat";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function cari_produk($keyword){
	$query = "SELECT * FROM alat_camping WHERE id_alat LIKE '%$keyword%' OR nama_alat LIKE '%$keyword%' OR deskripsi_alat LIKE '%$keyword%' OR spesifikasi_alat LIKE '%$keyword%' OR hargasewa_alat LIKE '%$keyword%' OR foto_alat LIKE '%$keyword%' OR id_mitra LIKE '%$keyword%'";

	return query($query);
}

function hapus_produk($id_alat){
	global $conn;
	mysqli_query($conn, "DELETE FROM alat_camping WHERE id_alat = $id_alat");

	return mysqli_affected_rows($conn);
}






function tambah_informasi($data){
	global $conn;
	// ambil data dari tiap elemen dalam form

	$judul_informasi = htmlspecialchars($data["judul_informasi"]);
	$artikel_informasi = htmlspecialchars($data["artikel_informasi"]);
	$id_admin =htmlspecialchars($data["id_admin"]);
	$sumber_informasi = htmlspecialchars($data["sumber_informasi"]);

	//upload gambar
	$foto_informasi = upload_informasi();
	if (!$foto_informasi){
		return false;
	}

		// query insert data
	$query = "INSERT INTO informasi VALUES ('', '$judul_informasi','$artikel_informasi','$foto_informasi','$id_admin','$sumber_informasi')";


	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);

}

function upload_informasi(){

	$namaFile = $_FILES['foto_informasi']['name'];
	$ukuranFile = $_FILES['foto_informasi']['size'];
	$error = $_FILES['foto_informasi']['error'];
	$tmpName = $_FILES['foto_informasi']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if( $error === 4){
		echo "<script>
				alert('pilih gambar terlebih dahulu');
			</script>";
			return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
				alert('yang anda upload bukan gambar');
			</script>";
			return false;	
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){
		echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
			return false;
	}

	// lolos pengecekan, gambar siap upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/'. $namaFileBaru);

	return $namaFileBaru;


}

function ubah_informasi($data){
	global $conn;
	// ambil data dari tiap elemen dalam form
	$id_informasi = htmlspecialchars($data["id_informasi"]);
	$judul_informasi = htmlspecialchars($data["judul_informasi"]);
	$artikel_informasi = htmlspecialchars($data["artikel_informasi"]);
	$id_admin =htmlspecialchars($data["id_admin"]);
	$sumber_informasi =htmlspecialchars($data["sumber_informasi"]);
	$foto_informasiLama = htmlspecialchars($data["foto_informasiLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['foto_informasi']['error'] === 4){
		$foto_informasi = $foto_informasiLama;
	} else {
		$foto_informasi = upload_informasi();
	}

		// query update data
	$query = "UPDATE informasi SET judul_informasi='$judul_informasi',artikel_informasi='$artikel_informasi',id_admin='$id_admin',foto_informasi='$foto_informasi',sumber_informasi='$sumber_informasi' WHERE id_informasi = $id_informasi";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function cari_informasi($keyword){
	$query = "SELECT * FROM informasi WHERE id_informasi LIKE '%$keyword%' OR judul_informasi LIKE '%$keyword%' OR artikel_informasi LIKE '%$keyword%' OR id_admin LIKE '%$keyword%' OR foto_informasi LIKE '%$keyword%'";

	return query($query);
}

function hapus_informasi($id_informasi){
	global $conn;
	mysqli_query($conn, "DELETE FROM informasi WHERE id_informasi = $id_informasi");

	return mysqli_affected_rows($conn);
}











function hapus_mitra($no_ktp){
	global $conn;
	mysqli_query($conn, "DELETE FROM mitra WHERE id_mitra = $id_mitra");

	return mysqli_affected_rows($conn);
}


function cari_mitra($keyword){
	$query = "SELECT * FROM mitra WHERE id_mitra LIKE '%$keyword%' OR logo_mitra LIKE '%$keyword%' OR nama_mitra LIKE '%$keyword%' OR username_mitra LIKE '%$keyword%' OR deskripsi_mitra LIKE '%$keyword%' OR nohp_mitra LIKE '%$keyword%' OR alamat_mitra LIKE '%$keyword%' OR daerah_mitra LIKE '%$keyword%'";

	return query($query);
}









function hapus_customer($no_ktp){
	global $conn;
	mysqli_query($conn, "DELETE FROM customer WHERE no_ktp = $no_ktp");

	return mysqli_affected_rows($conn);
}


function cari_customer($keyword){
	$query = "SELECT * FROM customer WHERE no_ktp LIKE '%$keyword%' OR foto_customer LIKE '%$keyword%' OR nama_customer LIKE '%$keyword%' OR username_customer LIKE '%$keyword%' OR jenkel_customer LIKE '%$keyword%' OR nohp_customer LIKE '%$keyword%' OR alamat_customer LIKE '%$keyword%' OR tgllahir_customer LIKE '%$keyword%'";

	return query($query);
}








function tambah_optrip($data){
	global $conn;
	// ambil data dari tiap elemen dalam form

	$tujuan_optrip = htmlspecialchars($data["tujuan_optrip"]);
	$tarif_optrip = htmlspecialchars($data["tarif_optrip"]);
	$deskripsi_optrip =htmlspecialchars($data["deskripsi_optrip"]);
	$kuota_optrip =htmlspecialchars($data["kuota_optrip"]);
	$id_admin =htmlspecialchars($data["id_admin"]);

	//upload gambar
	$foto_optrip = upload_optrip();
	if (!$foto_optrip){
		return false;
	}

		// query insert data
	$query = "INSERT INTO open_trip VALUES ('', '$tujuan_optrip','$tarif_optrip','$deskripsi_optrip','$kuota_optrip','$foto_optrip','$id_admin')";


	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);

}

function upload_optrip(){

	$namaFile = $_FILES['foto_optrip']['name'];
	$ukuranFile = $_FILES['foto_optrip']['size'];
	$error = $_FILES['foto_optrip']['error'];
	$tmpName = $_FILES['foto_optrip']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if( $error === 4){
		echo "<script>
				alert('pilih gambar terlebih dahulu');
			</script>";
			return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
				alert('yang anda upload bukan gambar');
			</script>";
			return false;	
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){
		echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
			return false;
	}

	// lolos pengecekan, gambar siap upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/'. $namaFileBaru);

	return $namaFileBaru;


}

function ubah_optrip($data){
	global $conn;
	// ambil data dari tiap elemen dalam form
	$id_optrip = htmlspecialchars($data["id_optrip"]);
	$tujuan_optrip = htmlspecialchars($data["tujuan_optrip"]);
	$tarif_optrip = htmlspecialchars($data["tarif_optrip"]);
	$deskripsi_optrip =htmlspecialchars($data["deskripsi_optrip"]);
	$kuota_optrip =htmlspecialchars($data["kuota_optrip"]);
	$id_admin =htmlspecialchars($data["id_admin"]);
	$foto_optripLama = htmlspecialchars($data["foto_optripLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['foto_optrip']['error'] === 4){
		$foto_optrip = $foto_optripLama;
	} else {
		$foto_optrip = upload_optrip();
	}

		// query update data
	$query = "UPDATE open_trip SET tujuan_optrip='$tujuan_optrip',tarif_optrip='$tarif_optrip',deskripsi_optrip='$deskripsi_optrip',kuota_optrip='$kuota_optrip',foto_optrip='$foto_optrip',id_admin='$id_admin' WHERE id_optrip = $id_optrip";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function cari_optrip($keyword){
	$query = "SELECT * FROM open_trip WHERE id_optrip LIKE '%$keyword%' OR tujuan_optrip LIKE '%$keyword%' OR tarif_optrip LIKE '%$keyword%' OR deskripsi_optrip LIKE '%$keyword%' OR kuota_optrip LIKE '%$keyword%' OR foto_optrip LIKE '%$keyword%' OR id_admin LIKE '%$keyword%'";

	return query($query);
}

function hapus_optrip($id_optrip){
	global $conn;
	mysqli_query($conn, "DELETE FROM open_trip WHERE id_optrip = $id_optrip");

	return mysqli_affected_rows($conn);
}






function ubah_testimoni($data){
	global $conn;
	// ambil data dari tiap elemen dalam form
	
	$id_testimoni =htmlspecialchars($data["id_testimoni"]);
	$balasan_testimoni =htmlspecialchars($data["balasan_testimoni"]);

	// query update data
	$query = "UPDATE testimoni SET balasan_testimoni='$balasan_testimoni' WHERE id_testimoni = $id_testimoni";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function cari_testimoni($keyword){
	$query = "SELECT no_ktp, nama_customer, status_customer, institusi_customer, komentar_testimoni, balasan_testimoni, rating  FROM testimoni JOIN customer USING(no_ktp) WHERE no_ktp LIKE '%$keyword%'";

	return query($query);
}




?>

