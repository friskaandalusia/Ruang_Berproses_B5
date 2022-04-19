<?php       

 include "koneksi.php";
 //hapus data
 $id_kb=$_GET['id'];   
   $sql = "delete from kelola_kb where id_kb='$id_kb'";  
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 $conn->close();
?>