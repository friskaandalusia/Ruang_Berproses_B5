<?php
session_start();
if (!isset($_SESSION["login"])){
    header("Location: ../pengguna/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Virtual Support Group</title>
    <link rel="icon" href="../img/icon.png" type="image/png" sizes="16x16">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
      <div class="card card-5">
        <div class="card-heading">
          <h2 class="title">Form Pendaftaran Virtual Support Group</h2>
        </div>
          <div class="card-body">
            <div class="info">
              <p>Halo Sahabat Berproses!</p> <br />
                <p>Kami hadir dengan fasilitas terbaru, yaitu <span>Virtual Support Group</span> untuk menjawab kebutuhan kamu yang memiliki isu kesehatan mental dan membutuhkan kelompok dukungan.</p> <br />
                <p>Virtual support group adalah kelompok dukungan yang terdiri atas 3-5 peserta dengan kondisi isu yang sama, dengan fasilitator pendamping yang sudah terlatih, dan juga 1 supervisor tenaga profesional.</p> <br />
                <p>Kamu bisa mengikuti kegiatan ini dengan membayar comittment fee sebesar <span>Rp 25.000</span> untuk 3 sesi support group.</p>
                <p>Pembayaran bisa dilakukan dengan transfer ke salah satu rekening di bawah (semua rekening a.n Yohana Sondang Activa Hutabarat):</p>
                <ol>
                  <li>BNI 0199235333</li>
                  <li>BCA 6241059607</li>
                  <li>JENIUS 90300055196</li>
                  <li>OVO 085156065094</li>
                </ol>
                <p>Jangan lupa untuk menyimpan bukti pembayaran yang nantinya harus kamu upload dalam formulir ini.</p>
                <br />
                <p>Bila ada pertanyaan seputar kegiatan ini, kamu bisa menghubungi kami via DM IG <a href="https://www.instagram.com/ruangberproses.id/" target="_blank">ruangberproses.id</a> atau email kami di <a href="mailto: ruangberproses.id@gmail.com">ruangberproses.id@gmail.com</a></p> <br />
                <p>Mari berproses bersama.</p>
            </div>
            <hr>
            <div class="form">
              <form method="POST" action="simpan_support_group.php">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>

                <label for="jenis_kelamin">Jenis Kelamin</label> <br />
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" style="margin: 10px 0;" required>
                <label for="perempuan" style="font-weight: 400;">Perempuan</label> <br />
                <input type="radio" id="laki" name="jenis_kelamin" value="laki" style="margin-bottom: 25px;">
                <label for="laki" style="font-weight: 400;">Laki-laki</label> <br />
                
                <label for="usia">Usia</label>
                <input type="number" name="usia" id="usia" placeholder="Usia (Angka)" required>

                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan saat ini" required>

                <label for="no_telp">No. WhatsApp</label>
                <input type="text" name="no_telp" id="no_telp" placeholder="No. WhatsApp" required>
                <small class="form-text text-muted font-weight-medium">Pastikan nomor handphone yang kamu isi adalah nomor yang aktif saat ini</small>

                <label for="email">Alamat Email</label>
                <input type="text" name="email" id="email" placeholder="Email" required>

                <label for="domisili">Domisili</label>
                <input type="text" name="domisili" id="domisili" placeholder="Domisili Saat Ini" required>

                <label for="pilihan_topik">Pilih topik yang ingin diikuti dalam support group</label>
                <select name="pilihan_topik">
                  <option id="self_harm">Self Harm</option>
                  <option id="insecure">Insecure</option>
                  <option id="overthinking">Overthinking</option>
                  <option id="bullying">Bullying</option>
                </select>

                <label for="pernah_gabung">Apakah sebelumnya kamu sudah pernah bergabung dengan Support Group di Platform atau tempat lainnya?</label> <br />
                <input type="radio" id="sudah" name="pernah_gabung" value="sudah" style="margin: 10px 0;" required>
                <label for="sudah" style="font-weight: 400;">Sudah</label> <br />
                <input type="radio" id="belum" name="pernah_gabung" value="belum" style="margin-bottom: 25px;">
                <label for="belum" style="font-weight: 400;">Belum</label> <br />

                <label for="pengalaman">Bila sudah pernah, bagaimana pengalaman kamu terkait support group sebelumnya?</label>
                <textarea name="pengalaman"  id="pengalaman" placeholder="Tuliskan Pengalaman Kamu"></textarea>

                <label for="fasilitator">Saya nyaman ketika fasillitator saya adalah</label>
                <select name="fasilitator">
                  <option id="fasilitator1">Hanya pria</option>
                  <option id="fasilitator2">Hanya wanita</option>
                  <option id="fasilitator3">Nyaman dengan keduanya</option>
                </select>

                <label for="kelompok">Saya merasa nyaman bila teman satu kelompok saya adalah</label>
                <select name="kelompok">
                  <option id="kelompok1">Hanya pria</option>
                  <option id="kelompok2">Hanya wanita</option>
                  <option id="kelompok3">Nyaman dengan keduanya</option>
                </select>

                <label for="alasan">Alasan saya bergabung</label>
                <textarea name="alasan"  id="alasan" placeholder="Tuliskan Alasan Kamu" required></textarea>

                <label for="batasan">Batasan pribadi yang perlu diketahui untuk kamu merasa nyaman dan terbuka didalam grup, adalah</label>
                <textarea name="batasan"  id="batasan" placeholder="Tuliskan Batasan Kamu" required></textarea>

                <label for="harapan">Harapan saya setelah bergabung dengan Support Group</label>
                <textarea name="harapan"  id="harapan" placeholder="Tuliskan Harapan Kamu"></textarea>

                <label for="bukti_pembayaran">Silahkan mengunggah bukti transfer commitment kamu disini (Usahakan tidak lebih dari 10 MB)</label> <br />
                <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required> <br />

                <hr style="margin-bottom: 15px;">

                <label for="bersedia_gabung">Saya, secara sadar dan tanpa paksaan menyatakan diri bersedia bergabung dengan kelas Virtual Support Group Ruang Berproses</label> <br />
                <input type="radio" id="ya" name="bersedia_gabung" value="ya" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya</label> <br />
                <input type="radio" id="tidak" name="bersedia_gabung" value="tidak" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label for="setuju_ikut">Saya menyetujui untuk mengikuti seluruh 3 sesi yang disediakan oleh Ruang Berproses</label> <br />
                <input type="radio" id="ya" name="setuju_ikut" value="ya" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya</label> <br />
                <input type="radio" id="tidak" name="setuju_ikut" value="tidak" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label for="setuju_aktif">Saya setuju untuk terlibat aktif di dalam kelas Support Group</label> <br />
                <input type="radio" id="ya" name="setuju_aktif" value="ya" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya</label> <br />
                <input type="radio" id="tidak" name="setuju_aktif" value="tidak" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label for="konfirmasi_fasilitator">Bila ada kondisi yang membuat saya tidak nyaman atau tidak lagi mampu mengikuti kelas hingga selesai, saya akan menginformasikan kepada fasilitator</label> <br />
                <input type="radio" id="ya" name="konfirmasi_fasilitator" value="ya" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya</label> <br />
                <input type="radio" id="tidak" name="konfirmasi_fasilitator" value="tidak" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label for="mengikuti_aturan">Saya bersedia mengikuti setiap aturan yang akan disepakati bersama di dalam kelas Support Group nanti</label> <br />
                <input type="radio" id="ya" name="mengikuti_aturan" value="ya" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya</label> <br />
                <input type="radio" id="tidak" name="mengikuti_aturan" value="tidak" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <p style="margin-top: 5px; font-size: small; margin-bottom: 30px;">Terimakasih sudah mendaftar dalam Virtual Support Group Ruang Berproses. Kami akan melakukan screening. 
                  Bila kriteria dan kebutuhan kamu sesuai dengan kelas yang akan kami buka, kami akan segera menghubungi kamu.</p>
              
                <div>
                  <button class="btn btn--radius-2 btn--red" type="submit" name="submit">Daftar</button>
                </div>
              
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
  
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->