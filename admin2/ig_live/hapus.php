<?php       

 include "koneksi.php";
 //hapus data
 $id_iglive=$_GET['id'];   
   $sql = "delete from keloladata_iglive where id_iglive='$id_iglive'";  
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 $conn->close();
?>