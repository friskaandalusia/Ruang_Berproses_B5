<?php
include "koneksi.php"; 
if( isset($_POST["submit"])) {
           
            $nama=$_POST['nama'];
            $layanan=$_POST['layanan'];
            $isi_testi=$_POST['isi_testi'];
            // query SQL untuk insert data
           
            $sql = "INSERT INTO testimoni (nama, layanan, isi_testi) VALUES('".$nama."','".$layanan."', '".$isi_testi."')";
            if ($conn->query($sql) === TRUE) {
                // redirect ke halaman tampil data
                header("Location: tampil_data.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
        

mysqli_close($conn);
?>