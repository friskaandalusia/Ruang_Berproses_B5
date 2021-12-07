<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u3264067_rb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if( isset($_POST["submit"])) {
    // menyimpan data kedalam variabel
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];
    $pekerjaan = $_POST['pekerjaan'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $domisili = $_POST['domisili'];
    $pilihan_topik = $_POST['pilihan_topik'];
    $pernah_gabung = $_POST['pernah_gabung'];
    $pengalaman = $_POST['pengalaman'];
    $fasilitator = $_POST['fasilitator'];
    $kelompok = $_POST['kelompok'];
    $alasan = $_POST['alasan'];
    $batasan = $_POST['batasan'];
    $harapan = $_POST['harapan'];
    $bukti_pembayaran = $_POST['bukti_pembayaran'];
    $bersedia_gabung = $_POST['bersedia_gabung'];
    $setuju_ikut = $_POST['setuju_ikut'];
    $setuju_aktif = $_POST['setuju_aktif'];
    $konfirmasi_fasilitator = $_POST['konfirmasi_fasilitator'];
    $mengikuti_aturan = $_POST['mengikuti_aturan'];


    // query SQL untuk insert data
    //$query="INSERT INTO pendaftaran SET nama_depan='$nama_depan',nama='$nama',nama_belakang='$nama_belakang',no_telp='$no_telp',perusahaan='$perusahaan',email='$email',tgl_lahir='$tgl_lahir'";
    $query = "INSERT INTO pendaftaran_support_group (nama_lengkap, jenis_kelamin, usia, pekerjaan, no_telp, email, domisili, pilihan_topik, pernah_gabung, pengalaman, fasilitator, kelompok, alasan, batasan, harapan, bukti_pembayaran, bersedia_gabung, setuju_ikut, setuju_aktif, konfirmasi_fasilitator, mengikuti_aturan) VALUES('".$nama_lengkap."','".$jenis_kelamin."', '".$usia."', '".$pekerjaan."', '".$no_telp."', '".$email."', '".$domisili."', '".$pilihan_topik."','".$pernah_gabung."','".$pengalaman."','".$fasilitator."', '".$kelompok."', '".$alasan."', '".$batasan."','".$harapan."','".$bukti_pembayaran."', '".$bersedia_gabung."', '".$setuju_ikut."','".$setuju_aktif."','".$konfirmasi_fasilitator."', '".$mengikuti_aturan."')";
    mysqli_query($conn, $query);

    // cek apakah data berhasil ditambahkan
    if(mysqli_affected_rows($conn) > 0) {
        echo "Berhasil";
    } else {
        echo "gagal";
        echo "<br>";
        echo mysqli_error($conn);
    }

}



// $sql = "INSERT INTO pendaftaran (nama_depan, nama_belakang, no_telp,perusahaan,email,kota,tgl_lahir,event)
// VALUES ('".$nama_depan."','".$nama_belakang."','".$no_telp."','".$perusahaan."','".$email."','".$kota."','".$tgl_lahir."','PSYTALK 31')";


//if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
//} else {
 // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>PSYTALK 30 Registasi </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading-success">
                    <h2 class="title-success">Registration Success, Thank you :)</h2>
                </div>
			</div>
		</div>
	</div>

</html>