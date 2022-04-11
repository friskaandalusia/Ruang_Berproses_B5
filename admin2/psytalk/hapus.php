<?php       

 include "koneksi.php";
 //hapus data
 $no_konten=$_GET['id'];   
   $sql = "delete from keloladata_psytalk where no_konten='$no_konten'";  
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 $conn->close();
?>