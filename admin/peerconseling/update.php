<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    // menyimpan data kedalam variabel
    $no_pendaftaran= $_POST['no_pendaftaran'];
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
        $sql = "UPDATE pendaftaran_peercounseling set nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan',email='$email', 
        no_telp='$no_telp', pekerjaan='$pekerjaan', bday='$bday', jenis_kelamin='$jenis_kelamin', status_hubungan='$status_hubungan', domisili='$domisili',
        pernah_ikut_sesi ='$pernah_ikut_sesi', ketersediaan_beda_gender='$ketersediaan_beda_gender', pernah_ikut_konseling='$pernah_ikut_konseling', pernah_ikut_konselingrb='$pernah_ikut_konselingrb',
        keluhan='$keluhan', latar_belakang='$latar_belakang', tujuan='$tujuan', bagi_informasi='$bagi_informasi', setuju_screening='$setuju_screening', 
        menjadi_marah='$menjadi_marah', mulut_kering='$mulut_kering', tidak_melihat_hal_positif='$tidak_melihat_hal_positif', gangguan_pernapasan='$gangguan_pernapasan', tidakkuat_melakukan_kegiatan='$tidakkuat_melakukan_kegiatan',
        reaksi_berlebihan='$reaksi_berlebihan', kelemahan_anggota_tubuh='$kelemahan_anggota_tubuh', sulit_relaksasi='$sulit_relaksasi', cemas_berlebihan='$cemas_berlebihan', pesimis='$pesimis', mudah_kesal='$mudah_kesal', energi_hbs_krn_cemas='$energi_hbs_krn_cemas', 
        sedih_dan_depresi='$sedih_dan_depresi', tidak_sabaran ='$tidak_sabaran', kelelahan ='$kelelahan', kehilangan_minat ='$kehilangan_minat', diri_tdk_layak='$diri_tdk_layak', mudah_tersinggung='$mudah_tersinggung', berkeringat='$berkeringat', ketakutan_tnp_alasan='$ketakutan_tnp_alasan',
        hidup_tdk_berharga='$hidup_tdk_berharga', sulit_istirahat='$sulit_istirahat', sulit_menelan='$sulit_menelan', tidak_menikmati ='$tidak_menikmati', perubahan_jantung='$perubahan_jantung', hilang_harapan='$hilang_harapan', mudah_marah='$mudah_marah', mudah_panik='$mudah_panik', sulit_tenang='$sulit_tenang', takut_terhambat='$takut_terhambat',
        takut_terhambat='$takut_terhambat', sulit_antusias='$sulit_antusias', sulit_mentoleransi='$sulit_mentoleransi', tegang='$tegang', tidak_berharga='$tidak_berharga', tidak_memaklumi='$tidak_memaklumi', ketakutan='$ketakutan', tidak_ada_harapan='$tidak_ada_harapan', hidup_tidak_berarti ='$hidup_tidak_berarti', mudah_gelisah='$mudah_gelisah', khawatir_panik ='$khawatir_panik', gemetar='$gemetar',
        sulit_inisiatif='$sulit_inisiatif' where no_pendaftaran ='$no_pendaftaran' ";
    }
    else{
        $file_name = $_FILES['file_tambahan']['name'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $file_size = $_FILES['file_tambahan']['size'];
        $file_tmp = $_FILES['file_tambahan']['tmp_name'];
        if ($file_size < 2048000 ){
            $file_tambahan = 'files/'.$nama_lengkap.'.'.$file_ext;
            move_uploaded_file($file_tmp, $file_tambahan);
            $sql = "UPDATE pendaftaran_peercounseling set nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan',email='$email', 
            no_telp='$no_telp', pekerjaan='$pekerjaan', bday='$bday', jenis_kelamin='$jenis_kelamin', status_hubungan='$status_hubungan', domisili='$domisili',
            pernah_ikut_sesi ='$pernah_ikut_sesi', ketersediaan_beda_gender='$ketersediaan_beda_gender', pernah_ikut_konseling='$pernah_ikut_konseling', file_tambahan='$file_tambahan', pernah_ikut_konselingrb='$pernah_ikut_konselingrb',
            keluhan='$keluhan', latar_belakang='$latar_belakang', tujuan='$tujuan', bagi_informasi='$bagi_informasi', setuju_screening='$setuju_screening', 
            menjadi_marah='$menjadi_marah', mulut_kering='$mulut_kering', tidak_melihat_hal_positif='$tidak_melihat_hal_positif', gangguan_pernapasan='$gangguan_pernapasan', tidakkuat_melakukan_kegiatan='$tidakkuat_melakukan_kegiatan',
            reaksi_berlebihan='$reaksi_berlebihan', kelemahan_anggota_tubuh='$kelemahan_anggota_tubuh', sulit_relaksasi='$sulit_relaksasi', cemas_berlebihan='$cemas_berlebihan', pesimis='$pesimis', mudah_kesal='$mudah_kesal', energi_hbs_krn_cemas='$energi_hbs_krn_cemas', 
            sedih_dan_depresi='$sedih_dan_depresi', tidak_sabaran ='$tidak_sabaran', kelelahan ='$kelelahan', kehilangan_minat ='$kehilangan_minat', diri_tdk_layak='$diri_tdk_layak', mudah_tersinggung='$mudah_tersinggung', berkeringat='$berkeringat', ketakutan_tnp_alasan='$ketakutan_tnp_alasan',
            hidup_tdk_berharga='$hidup_tdk_berharga', sulit_istirahat='$sulit_istirahat', sulit_menelan='$sulit_menelan', tidak_menikmati ='$tidak_menikmati', perubahan_jantung='$perubahan_jantung', hilang_harapan='$hilang_harapan', mudah_marah='$mudah_marah', mudah_panik='$mudah_panik', sulit_tenang='$sulit_tenang', takut_terhambat='$takut_terhambat',
            takut_terhambat='$takut_terhambat', sulit_antusias='$sulit_antusias', sulit_mentoleransi='$sulit_mentoleransi', tegang='$tegang', tidak_berharga='$tidak_berharga', tidak_memaklumi='$tidak_memaklumi', ketakutan='$ketakutan', tidak_ada_harapan='$tidak_ada_harapan', hidup_tidak_berarti ='$hidup_tidak_berarti', mudah_gelisah='$mudah_gelisah', khawatir_panik ='$khawatir_panik', gemetar='$gemetar',
            sulit_inisiatif='$sulit_inisiatif' where no_pendaftaran ='$no_pendaftaran' ";
        }
        else{
            echo '<span style="color:red"><b><u><i>Ukuruan File Tidak Sesuai</i></u></b></span>';
        }
    } 
    
    if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 }
 $conn->close();
?>
