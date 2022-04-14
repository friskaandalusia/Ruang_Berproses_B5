<?php
include('koneksi.php');
if(isset($_GET['id_gambar'])) 
{
    $idiglive=$_GET['id_gambar'];    
    $query = mysqli_query($conn,"select * from keloladata_iglive where id_iglive='$id_iglive'");
    $row = mysqli_fetch_array($query);
    header("Content-type: ");
    echo $row["foto_poster"];
}
else
{
    header('location:index.php');
}
?>