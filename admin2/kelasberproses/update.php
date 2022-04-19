<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    $id_kb= $_POST['id_kb'];
    $judulkb = $_POST['judulkb'];
    $haritglkb = $_POST['haritglkb'];
    $waktukb = $_POST['waktukb'];
    $feekb = $_POST['feekb'];
    $link = $_POST['link'];
    if(!isset($_FILES['foto_posterkb']) || $_FILES['foto_posterkb']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "UPDATE kelola_kb set judulkb='$judulkb', haritglkb='$haritglkb', waktukb='$waktukb', feekb='$feekb', link='$link' where id_kb ='$id_kb' ";
    }
    else{
        $file_size = $_FILES['foto_posterkb']['size'];
        $file_type = $_FILES['foto_posterkb']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
            $foto_posterkb   = addslashes(file_get_contents($_FILES['foto_posterkb']['tmp_name']));
            $sql = "UPDATE kelola_kb set judulkb='$judulkb', haritglkb='$haritglkb', waktukb='$waktukb', feekb='$feekb', link='$link', foto_posterkb='$foto_posterkb' where id_kb ='$id_kb' ";
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
