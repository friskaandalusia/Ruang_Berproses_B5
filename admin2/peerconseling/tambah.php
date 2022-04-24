<?php
include "koneksi.php"; 

if( isset($_POST["submit"])){

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
        $file_ext = strtolower(end(explode('.', $file_name)));
        $file_size = $_FILES['file_tambahan']['size'];
        $file_tmp = $_FILES['file_tambahan']['tmp_name'];
        if ($file_size < 2048000 ){
            $file_tambahan = 'files/'.$nama_lengkap.'.'.$file_ext;
            move_uploaded_file($file_tmp, $file_tambahan);
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
    
    // query SQL untuk insert data
    //$query="INSERT INTO pendaftaran SET nama_depan='$nama_depan',nama='$nama',nama_belakang='$nama_belakang',no_telp='$no_telp',perusahaan='$perusahaan',email='$email',tgl_lahir='$tgl_lahir'";
    mysqli_query($conn, $sql);

    // cek apakah data berhasil ditambahkan
    if(mysqli_affected_rows($conn) > 0) {
        header("Location: tampil_data.php");
    } else {
        echo "gagal";
        echo "<br>";
        echo mysqli_error($conn);
    }

}

mysqli_close($conn);
?>