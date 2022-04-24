<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    $no_konten= $_POST['no_konten'];
    $judul = $_POST['judul'];
    $hari_tgl = $_POST['hari_tgl'];
    $waktu = $_POST['waktu'];
    $fee = $_POST['fee'];
    $link = $_POST['link'];
    if(!isset($_FILES['foto_poster']) || $_FILES['foto_poster']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "UPDATE keloladata_psytalk set judul='$judul', hari_tgl='$hari_tgl', waktu='$waktu', fee='$fee', link='$link' where no_konten ='$no_konten' ";
    }
    else{
        $file_size = $_FILES['foto_poster']['size'];
        $file_type = $_FILES['foto_poster']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
            $foto_poster   = addslashes(file_get_contents($_FILES['foto_poster']['tmp_name']));
            $sql = "UPDATE keloladata_psytalk set judul='$judul', hari_tgl='$hari_tgl', waktu='$waktu', fee='$fee', link='$link', foto_poster='$foto_poster' where no_konten ='$no_konten' ";
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
