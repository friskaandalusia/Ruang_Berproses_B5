<?php       

 include "koneksi.php";
 //hapus data
 $no_pendaftaran=$_GET['id'];   
   $sql = "delete from pendaftaran_support_group where no_pendaftaran='$no_pendaftaran'";  
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 $conn->close();
?>