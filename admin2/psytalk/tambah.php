<?php
include "koneksi.php"; 
if( isset($_POST["submit"])) {
    if(!isset($_FILES['foto_poster'])){
        echo '<span style="color:red"><b><u><i>Gagal upload file/i></u></b></span>';
    }
    else
    {
        $file_size = $_FILES['foto_poster']['size'];
        $file_type = $_FILES['foto_poster']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $foto_poster   = addslashes(file_get_contents($_FILES['foto_poster']['tmp_name']));
            // menyimpan data kedalam variabel
            $judul = $_POST['judul'];
            $hari_tgl = $_POST['hari_tgl'];
            $waktu = $_POST['waktu'];
            $fee = $_POST['fee'];
            $link = $_POST['link'];
            

            // query SQL untuk insert data
           
            $sql = "INSERT INTO keloladata_psytalk (judul, hari_tgl, waktu, fee, link, foto_poster) VALUES('".$judul."', '".$hari_tgl."','".$waktu."', '".$fee."', '".$link."', '".$foto_poster."')";
            if ($conn->query($sql) === TRUE) {
                // redirect ke halaman tampil data
                header("Location: tampil_data.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
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