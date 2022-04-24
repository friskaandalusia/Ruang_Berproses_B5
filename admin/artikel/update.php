<?php        
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
    $no_artikel= $_POST['no_artikel'];
    $judulartikel = $_POST['judulartikel'];
    $summary = $_POST['summary'];
    $isi = $_POST['isi'];
    $referensi = $_POST['referensi'];
    if(!isset($_FILES['foto_artikel']) || $_FILES['foto_artikel']['error'] == UPLOAD_ERR_NO_FILE){
        $sql = "UPDATE keloladata_artikel set judulartikel='$judulartikel', summary='$summary', isi='$isi', referensi='$referensi' where no_artikel ='$no_artikel' ";
    }
    else{
        $file_size = $_FILES['foto_artikel']['size'];
        $file_type = $_FILES['foto_artikel']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
            $foto_artikel   = addslashes(file_get_contents($_FILES['foto_artikel']['tmp_name']));
            $sql = "UPDATE keloladata_artikel set judulartikel='$judulartikel', summary='$summary', isi='$isi', referensi='$referensi', foto_artikel='$foto_artikel' where no_artikel ='$no_artikel' ";
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
