<?php        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u3264067_rb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 

//input data
if(isset($_POST['submit']))
{   
    if(!isset($_FILES['bukti_pembayaran'])){
        echo '<span style="color:red"><b><u><i>Gagal upload file/i></u></b></span>';
    }
    else
    {
        $file_size = $_FILES['bukti_pembayaran']['size'];
        $file_type = $_FILES['bukti_pembayaran']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $bukti_pembayaran   = addslashes(file_get_contents($_FILES['bukti_pembayaran']['tmp_name']));
    $nama=$_POST['nama_lengkap'];
    $email=$_POST['email'];
    $no_telp=$_POST['no_telp'];
    $usia=$_POST['usia'];
    $domisili=$_POST['domisili'];
    $pekerjaan=$_POST['pekerjaan'];
    $alasan=$_POST['alasan'];
    $pernah_mengikuti=$_POST['pernah_mengikuti'];
    $pertanyaan=$_POST['pertanyaan'];
    $asal_info=$_POST['asal_info'];
    

    $query = "INSERT INTO pendaftaran_kelas_berproses(nama, email, no_telp, domisili, pekerjaan, alasan, pernah_mengikuti, pertanyaan, asal_info, bukti_pembayaran) VALUES('$nama', '$email', '$no_telp', '$domisili', '$pekerjaan', '$alasan', '$pernah_mengikuti', '$pertanyaan', '$asal_info', '$bukti_pembayaran')";
    mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) > 0) {
        echo "Berhasil";
} else {
    echo "gagal";
    echo "<br>";
    echo mysqli_error($conn);
}
}
else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
        
    }
    

}
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
    <title>Registrasi Kelas Berproses</title>

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