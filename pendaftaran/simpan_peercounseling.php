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
    $nama_panggilan = $_POST['nama_panggilan'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $pekerjaan = $_POST['pekerjaan'];
    $bday = $_POST['bday'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $status_hubungan = $_POST['status_hubungan'];
    $domisili = $_POST['domisili'];
    $pernah_ikut_sesi = $_POST['pernah_ikut_sesi'];
    $ketersediaan_beda_gender = $_POST['ketersediaan_beda_gender'];
    $pernah_ikut_konseling = $_POST['pernah_ikut_konseling'];
    $pernah_ikut_konselingrb = $_POST['pernah_ikut_konselingrb'];
    $keluhan = $_POST['keluhan'];
    $latar_belakang = $_POST['latar_belakang'];
    $tujuan = $_POST['tujuan'];
    $bagi_informasi = $_POST['bagi_informasi'];
    $setuju_screening = $_POST['setuju_screening'];
    //screening test
    $menjadi_marah = $_POST['menjadi_marah'];
    $mulut_kering = $_POST['mulut_kering'];
    $tidak_melihat_hal_positif = $_POST['tidak_melihat_hal_positif'];
    $gangguan_pernapasan = $_POST['gangguan_pernapasan'];
    $tidakkuat_melakukan_kegiatan = $_POST['tidakkuat_melakukan_kegiatan'];
    $reaksi_berlebihan = $_POST['reaksi_berlebihan'];
    $kelemahan_anggota_tubuh = $_POST['kelemahan_anggota_tubuh'];
    $sulit_relaksasi = $_POST['sulit_relaksasi'];
    $cemas_berlebihan = $_POST['cemas_berlebihan'];
    $pesimis = $_POST['pesimis'];
    $mudah_kesal = $_POST['mudah_kesal'];
    $energi_hbs_krn_cemas = $_POST['energi_hbs_krn_cemas'];
    $sedih_dan_depresi = $_POST['sedih_dan_depresi'];
    $tidak_sabaran = $_POST['tidak_sabaran'];
    $kelelahan = $_POST['kelelahan'];
    $kehilangan_minat = $_POST['kehilangan_minat'];
    $diri_tdk_layak = $_POST['diri_tdk_layak'];
    $mudah_tersinggung = $_POST['mudah_tersinggung'];
    $berkeringat = $_POST['berkeringat'];
    $ketakutan_tnp_alasan = $_POST['ketakutan_tnp_alasan'];
    $hidup_tdk_berharga = $_POST['hidup_tdk_berharga'];
    $sulit_istirahat = $_POST['sulit_istirahat'];
    $sulit_menelan = $_POST['sulit_menelan'];
    $tidak_menikmati = $_POST['tidak_menikmati'];
    $perubahan_jantung = $_POST['perubahan_jantung'];
    $hilang_harapan = $_POST['hilang_harapan'];
    $mudah_marah = $_POST['mudah_marah'];
    $mudah_panik = $_POST['mudah_panik'];
    $sulit_tenang = $_POST['sulit_tenang'];
    $takut_terhambat = $_POST['takut_terhambat'];
    $sulit_antusias = $_POST['sulit_antusias'];
    $sulit_mentoleransi = $_POST['sulit_mentoleransi'];
    $tegang = $_POST['tegang'];
    $tidak_berharga = $_POST['tidak_berharga'];
    $tidak_memaklumi = $_POST['tidak_memaklumi'];
    $ketakutan = $_POST['ketakutan'];
    $tidak_ada_harapan = $_POST['tidak_ada_harapan'];
    $hidup_tidak_berarti = $_POST['hidup_tidak_berarti'];
    $mudah_gelisah = $_POST['mudah_gelisah'];
    $khawatir_panik = $_POST['khawatir_panik'];
    $gemetar = $_POST['gemetar'];
    $sulit_inisiatif = $_POST['sulit_inisiatif'];

    if(!isset($_FILES['file_tambahan']) || $_FILES['file_tambahan']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "INSERT INTO pendaftaran_peercounseling (nama_lengkap, nama_panggilan, email, no_telp, pekerjaan, bday, jenis_kelamin, 
            status_hubungan, domisili, pernah_ikut_sesi, ketersediaan_beda_gender, pernah_ikut_konseling, pernah_ikut_konselingrb, keluhan, 
            latar_belakang, tujuan, bagi_informasi, setuju_screening, menjadi_marah, mulut_kering, tidak_melihat_hal_positif, gangguan_pernapasan, 
            tidakkuat_melakukan_kegiatan, reaksi_berlebihan, kelemahan_anggota_tubuh, sulit_relaksasi, cemas_berlebihan, pesimis, mudah_kesal, energi_hbs_krn_cemas, 
            sedih_dan_depresi, tidak_sabaran, kelelahan, kehilangan_minat, diri_tdk_layak, mudah_tersinggung, berkeringat, ketakutan_tnp_alasan,
            hidup_tdk_berharga, sulit_istirahat, sulit_menelan, tidak_menikmati, perubahan_jantung, hilang_harapan, mudah_marah, mudah_panik, sulit_tenang, takut_terhambat,
            sulit_antusias, sulit_mentoleransi, tegang, tidak_berharga, tidak_memaklumi, ketakutan, tidak_ada_harapan, hidup_tidak_berarti, mudah_gelisah, khawatir_panik, gemetar,
            sulit_inisiatif) values ('".$nama_lengkap."', '".$nama_panggilan."', '".$email."', 
            '".$no_telp."', '".$pekerjaan."', '".$bday."', '".$jenis_kelamin."', '".$status_hubungan."', '".$domisili."',
            '".$pernah_ikut_sesi."', '".$ketersediaan_beda_gender."', '".$pernah_ikut_konseling."', '".$pernah_ikut_konselingrb."',
            '".$keluhan."', '".$latar_belakang."', '".$tujuan."', '".$bagi_informasi."', '".$setuju_screening."', 
            '".$menjadi_marah."', '".$mulut_kering."', '".$tidak_melihat_hal_positif."', '".$gangguan_pernapasan."', '".$tidakkuat_melakukan_kegiatan."',
            '".$reaksi_berlebihan."', '".$kelemahan_anggota_tubuh."', '".$sulit_relaksasi."', '".$cemas_berlebihan."', '".$pesimis."', '".$mudah_kesal."', '".$energi_hbs_krn_cemas."', 
            '".$sedih_dan_depresi."', '".$tidak_sabaran."', '".$kelelahan."', '".$kehilangan_minat."', '".$diri_tdk_layak."', '".$mudah_tersinggung."', '".$berkeringat."', '".$ketakutan_tnp_alasan."',
            '".$hidup_tdk_berharga."', '".$sulit_istirahat."', '".$sulit_menelan."', '".$tidak_menikmati."', '".$perubahan_jantung."', '".$hilang_harapan."', '".$mudah_marah."', '".$mudah_panik."', '".$sulit_tenang."', '".$takut_terhambat."',
            '".$sulit_antusias."', '".$sulit_mentoleransi."', '".$tegang."', '".$tidak_berharga."', '".$tidak_memaklumi."', '".$ketakutan."', '".$tidak_ada_harapan."', '".$hidup_tidak_berarti."', '".$mudah_gelisah."', '".$khawatir_panik."', '".$gemetar."',
            '".$sulit_inisiatif."')";
    }
    else{
        $file_name = $_FILES['file_tambahan']['name'];
        //$file_ext = strtolower(end(explode('.', $file_name)));
        $exploded = explode('.', $file_name);
        $file_ext = strtolower(end($exploded));
        $file_size = $_FILES['file_tambahan']['size'];
        $file_tmp = $_FILES['file_tambahan']['tmp_name'];
        if ($file_size < 2048000 ){
            $file_tambahan = '../admin/peerconseling/files/'.$nama_lengkap.'.'.$file_ext;
            move_uploaded_file($file_tmp, $file_tambahan);
            $file_tambahan = 'files/'.$nama_lengkap.'.'.$file_ext;
            $sql = "INSERT INTO pendaftaran_peercounseling (nama_lengkap, nama_panggilan, email, no_telp, pekerjaan, bday, jenis_kelamin, 
            status_hubungan, domisili, pernah_ikut_sesi, ketersediaan_beda_gender, pernah_ikut_konseling, file_tambahan, pernah_ikut_konselingrb, keluhan, 
            latar_belakang, tujuan, bagi_informasi, setuju_screening, menjadi_marah, mulut_kering, tidak_melihat_hal_positif, gangguan_pernapasan, 
            tidakkuat_melakukan_kegiatan, reaksi_berlebihan, kelemahan_anggota_tubuh, sulit_relaksasi, cemas_berlebihan, pesimis, mudah_kesal, energi_hbs_krn_cemas, 
            sedih_dan_depresi, tidak_sabaran, kelelahan, kehilangan_minat, diri_tdk_layak, mudah_tersinggung, berkeringat, ketakutan_tnp_alasan,
            hidup_tdk_berharga, sulit_istirahat, sulit_menelan, tidak_menikmati, perubahan_jantung, hilang_harapan, mudah_marah, mudah_panik, sulit_tenang, takut_terhambat,
            sulit_antusias, sulit_mentoleransi, tegang, tidak_berharga, tidak_memaklumi, ketakutan, tidak_ada_harapan, hidup_tidak_berarti, mudah_gelisah, khawatir_panik, gemetar,
            sulit_inisiatif) values ('".$nama_lengkap."', '".$nama_panggilan."', '".$email."', 
            '".$no_telp."', '".$pekerjaan."', '".$bday."', '".$jenis_kelamin."', '".$status_hubungan."', '".$domisili."',
            '".$pernah_ikut_sesi."', '".$ketersediaan_beda_gender."', '".$pernah_ikut_konseling."', '".$file_tambahan."', '".$pernah_ikut_konselingrb."',
            '".$keluhan."', '".$latar_belakang."', '".$tujuan."', '".$bagi_informasi."', '".$setuju_screening."', 
            '".$menjadi_marah."', '".$mulut_kering."', '".$tidak_melihat_hal_positif."', '".$gangguan_pernapasan."', '".$tidakkuat_melakukan_kegiatan."',
            '".$reaksi_berlebihan."', '".$kelemahan_anggota_tubuh."', '".$sulit_relaksasi."', '".$cemas_berlebihan."', '".$pesimis."', '".$mudah_kesal."', '".$energi_hbs_krn_cemas."', 
            '".$sedih_dan_depresi."', '".$tidak_sabaran."', '".$kelelahan."', '".$kehilangan_minat."', '".$diri_tdk_layak."', '".$mudah_tersinggung."', '".$berkeringat."', '".$ketakutan_tnp_alasan."',
            '".$hidup_tdk_berharga."', '".$sulit_istirahat."', '".$sulit_menelan."', '".$tidak_menikmati."', '".$perubahan_jantung."', '".$hilang_harapan."', '".$mudah_marah."', '".$mudah_panik."', '".$sulit_tenang."', '".$takut_terhambat."',
            '".$sulit_antusias."', '".$sulit_mentoleransi."', '".$tegang."', '".$tidak_berharga."', '".$tidak_memaklumi."', '".$ketakutan."', '".$tidak_ada_harapan."', '".$hidup_tidak_berarti."', '".$mudah_gelisah."', '".$khawatir_panik."', '".$gemetar."',
            '".$sulit_inisiatif."')";
        }
        else{
            echo '<span style="color:red"><b><u><i>Ukuruan File Tidak Sesuai</i></u></b></span>';
        }
    } 
    
    mysqli_query($conn, $sql);

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
    <title>Peer Counseling </title>

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