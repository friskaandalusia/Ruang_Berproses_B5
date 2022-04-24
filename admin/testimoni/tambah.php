<?php
include "koneksi.php"; 
if( isset($_POST["submit"])) {
    if(!isset($_FILES['foto'])){
        echo '<span style="color:red"><b><u><i>Gagal upload file/i></u></b></span>';
    }
    else
    {
        $file_size = $_FILES['foto']['size'];
        $file_type = $_FILES['foto']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $foto_poster   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            // menyimpan data kedalam variabel
           
            $nama=$_POST['nama'];
            $isi_testi=$_POST['isi_testi'];
            $hari_tgl=$_POST['hari_tgl']; 
            $foto=$_POST['foto']; 

            // query SQL untuk insert data
           
            $sql = "INSERT INTO testimoni (nama, isi_testi, hari_tgl, foto) VALUES('".$nama."', '".$isi_testi."','".$hari_tgl."', '".$foto."')";
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
        
    }
    

}

mysqli_close($conn);
?>