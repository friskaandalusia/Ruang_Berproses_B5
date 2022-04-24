<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    $id_testi= $_POST['id_testi'];
    $nama = $_POST['nama'];
    $isi_testi = $_POST['isi_testi'];
    $hari_tgl = $_POST['hari_tgl'];
    if(!isset($_FILES['foto']) || $_FILES['foto']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "UPDATE testimoni set nama='$nama', isi_testi='$isi_testi', hari_tgl='$hari_tgl' where id_testi ='$id_testi' ";
    }
    else{
        $file_size = $_FILES['foto']['size'];
        $file_type = $_FILES['foto']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
            $foto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            $sql = "UPDATE testimoni set nama='$nama', isi_testi='$isi_testi', hari_tgl='$hari_tgl', foto='$foto' where id_testi ='$id_testi' ";
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
