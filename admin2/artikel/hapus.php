<?php       

 include "koneksi.php";
 //hapus data
 $no_artikel=$_GET['id'];   
   $sql = "delete from keloladata_artikel where no_artikel='$no_artikel'";  
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 $conn->close();
?>