<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    $no_pendaftaran= $_POST['no_pendaftaran'];
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
    $bersedia_gabung = $_POST['bersedia_gabung'];
    $setuju_ikut = $_POST['setuju_ikut'];
    $setuju_aktif = $_POST['setuju_aktif'];
    $konfirmasi_fasilitator = $_POST['konfirmasi_fasilitator'];
    $mengikuti_aturan = $_POST['mengikuti_aturan'];

    if(!isset($_FILES['bukti_pembayaran']) || $_FILES['bukti_pembayaran']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "UPDATE pendaftaran_support_group set nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', usia='$usia', 
        pekerjaan='$pekerjaan',
        no_telp='$no_telp', email='$email', 
        domisili='$domisili', pilihan_topik='$pilihan_topik',pernah_gabung='$pernah_gabung', pengalaman='$pengalaman', 
        fasilitator='$fasilitator', kelompok='$kelompok', alasan='$alasan', batasan='$batasan', harapan='$harapan',
        bersedia_gabung='$bersedia_gabung', setuju_ikut='$setuju_ikut', setuju_aktif='$setuju_aktif',
        konfirmasi_fasilitator='$konfirmasi_fasilitator',  mengikuti_aturan='$mengikuti_aturan' where no_pendaftaran ='$no_pendaftaran' ";
    }
    else{
        $file_size = $_FILES['bukti_pembayaran']['size'];
        $file_type = $_FILES['bukti_pembayaran']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
            $bukti_pembayaran   = addslashes(file_get_contents($_FILES['bukti_pembayaran']['tmp_name']));
            $sql = "UPDATE pendaftaran_support_group set nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', usia='$usia', 
            pekerjaan='$pekerjaan',
            no_telp='$no_telp', email='$email', domisili='$domisili', pilihan_topik='$pilihan_topik', pernah_gabung='$pernah_gabung', 
            pengalaman='$pengalaman', fasilitator='$fasilitator', kelompok='$kelompok', alasan='$alasan', batasan='$batasan', 
            harapan='$harapan', bukti_pembayaran='$bukti_pembayaran', bersedia_gabung='$bersedia_gabung', setuju_ikut='$setuju_ikut', setuju_aktif='$setuju_aktif',
            konfirmasi_fasilitator='$konfirmasi_fasilitator',  mengikuti_aturan='$mengikuti_aturan' where no_pendaftaran ='$no_pendaftaran' ";
        }
        else{
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
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
