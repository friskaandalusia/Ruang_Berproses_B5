<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    $no_pendaftaran= $_POST['no_pendaftaran'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $usia = $_POST['usia'];
    $domisili = $_POST['domisili'];
    $pekerjaan = $_POST['pekerjaan'];
    $alasan = $_POST['alasan'];
    $pernah_mengikuti = $_POST['pernah_mengikuti'];
    $pertanyaan = $_POST['pertanyaan'];
    $asal_info = $_POST['asal_info']; 
    if(!isset($_FILES['bukti_pembayaran']) || $_FILES['bukti_pembayaran']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "UPDATE pendaftaran_kelas_berproses set nama='$nama', email='$email', 
        no_telp='$no_telp', usia='$usia', domisili='$domisili', pekerjaan='$pekerjaan', alasan='$alasan', 
        pernah_mengikuti='$pernah_mengikuti', pertanyaan='$pertanyaan', asal_info='$asal_info' where no_pendaftaran ='$no_pendaftaran' ";
    }
    else{
        $file_size = $_FILES['bukti_pembayaran']['size'];
        $file_type = $_FILES['bukti_pembayaran']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
            $bukti_pembayaran   = addslashes(file_get_contents($_FILES['bukti_pembayaran']['tmp_name']));
            $sql = "UPDATE pendaftaran_kelas_berproses set nama='$nama', email='$email', no_telp='$no_telp', 
            usia='$usia', domisili='$domisili', pekerjaan='$pekerjaan', alasan='$alasan', pernah_mengikuti='$pernah_mengikuti', 
            pertanyaan='$pertanyaan', asal_info='$asal_info', bukti_pembayaran='$bukti_pembayaran' where no_pendaftaran ='$no_pendaftaran' ";
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
