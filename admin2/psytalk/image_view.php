<?php
include('koneksi.php');
if(isset($_GET['id_gambar'])) 
{
    $no_pendaftaran=$_GET['id_gambar'];    
    $query = mysqli_query($conn,"select * from pendaftaran_psytalk where no_pendaftaran='$no_pendaftaran'");
    $row = mysqli_fetch_array($query);
    header("Content-type: ");
    echo $row["bukti_pembayaran"];
}
else
{
    header('location:index.php');
}
?>