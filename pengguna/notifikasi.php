<?php
require('koneksi.php');
$sql = $db->query("select * from nama_pengguna");
$num = mysqli_num_rows($sql);
?>