<?php
include('koneksi.php');
if(isset($_GET['id_gambar'])) 
{
    $no_konten=$_GET['id_gambar'];    
    $query = mysqli_query($conn,"select * from keloladata_psytalk where no_konten='$no_konten'");
    $row = mysqli_fetch_array($query);
    header("Content-type: ");
    echo $row["foto_poster"];
}
else
{
    header('location:index.php');
}
?>