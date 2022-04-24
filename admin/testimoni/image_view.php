<?php
include('koneksi.php');
if(isset($_GET['id_gambar'])) 
{
    $id_testi=$_GET['id_gambar'];    
    $query = mysqli_query($conn,"select * from testimoni where id_testi='$id_testi'");
    $row = mysqli_fetch_array($query);
    header("Content-type: ");
    echo $row["foto"];
}
else
{
    header('location:index.php');
}
?>