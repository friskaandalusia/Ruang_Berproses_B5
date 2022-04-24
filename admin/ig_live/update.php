<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    $id_iglive= $_POST['id_iglive'];
    $judulig = $_POST['judulig'];
    $haritglig = $_POST['haritglig'];
    $waktuig = $_POST['waktuig'];
    $link = $_POST['link'];
    if(!isset($_FILES['foto_poster']) || $_FILES['foto_poster']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "UPDATE keloladata_iglive set judulig='$judulig', haritglig='$haritglig', waktuig='$waktuig', link='$link' where id_iglive ='$id_iglive' ";
    }
    else{
        $file_size = $_FILES['foto_poster']['size'];
        $file_type = $_FILES['foto_poster']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
            $foto_poster   = addslashes(file_get_contents($_FILES['foto_poster']['tmp_name']));
            $sql = "UPDATE keloladata_iglive set judulig='$judulig', haritglig='$haritglig', waktuig='$waktuig', link='$link', foto_poster='$foto_poster' where id_iglive ='$id_iglive' ";
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
