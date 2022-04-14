<?php
include('koneksi.php');
if(isset($_GET['id_gambar'])) 
{
    $no_artikel=$_GET['id_gambar'];    
    $query = mysqli_query($conn,"select * from keloladata_artikel where no_artikel='$no_artikel'");
    $row = mysqli_fetch_array($query);
    header("Content-type: ");
    echo $row["foto_poster"];
}
else
{
    header('location:index.php');
}
?>