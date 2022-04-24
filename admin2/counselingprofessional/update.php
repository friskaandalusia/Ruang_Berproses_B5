<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    $no_pendaftaran = $_POST ['no_pendaftaran'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $usia = $_POST['usia'];
    $status_hubungan = $_POST['status_hubungan'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $domisili = $_POST['domisili'];
    $kesediaan_mendaftar = $_POST['kesediaan_mendaftar'];
    $setuju_screening = $_POST['setuju_screening'];

    if(!isset($_FILES['bukti_pembayaran']) || $_FILES['bukti_pembayaran']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "UPDATE pendaftaran_counseling_professional set nama_lengkap ='$nama_lengkap', 
        no_telp='$no_telp',email='$email', jenis_kelamin='$jenis_kelamin', agama='$agama', usia='$usia',
        status_hubungan='$status_hubungan', pendidikan_terakhir='$pendidikan_terakhir', domisili='$domisili', 
        kesediaan_mendaftar='$kesediaan_mendaftar', setuju_screening='$setuju_screening' where no_pendaftaran ='$no_pendaftaran' ";
    }
    else{
        $file_size = $_FILES['bukti_pembayaran']['size'];
        $file_type = $_FILES['bukti_pembayaran']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
            $bukti_pembayaran   = addslashes(file_get_contents($_FILES['bukti_pembayaran']['tmp_name']));
            $sql = "UPDATE pendaftaran_counseling_professional set nama_lengkap='$nama_lengkap', no_telp='$no_telp', 
            email='$email', jenis_kelamin='$jenis_kelamin', agama='$agama', usia='$usia', 
            status_hubungan='$status_hubungan', pendidikan_terakhir='$pendidikan_terakhir', domisili='$domisili', 
            kesediaan_mendaftar='$kesediaan_mendaftar', setuju_screening='$setuju_screening', bukti_pembayaran='$bukti_pembayaran' 
            where no_pendaftaran='$no_pendaftaran' ";
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
