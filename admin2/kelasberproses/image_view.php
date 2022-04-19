<?php
include('koneksi.php');
if(isset($_GET['id_gambar'])) 
{
    $id_kb=$_GET['id_gambar'];    
    $query = mysqli_query($conn,"select * from kelola_kb where id_kb='$id_kb'");
    $row = mysqli_fetch_array($query);
    header("Content-type: ");
    echo $row["foto_posterkb"];
}
else
{
    header('location:index.php');
}
?>