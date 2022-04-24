<?php       

 include "koneksi.php";
 //hapus data
 $id_testi=$_GET['id'];   
   $sql = "delete from testimoni where id_testi='$id_testi'";  
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 $conn->close();
?>