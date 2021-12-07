<?php
session_start();
if (!isset($_SESSION["login"])){
    header("Location: ../pengguna/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Webinar PSYTALK</title>
    <link rel="icon" href="../img/icon.png" type="image/png" sizes="16x16" />

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all" />
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all" />

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
  </head>

  <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
        <div class="card card-5">
          <div class="card-heading">
            <h2 class="title">Form Pendaftaran Event Webinar PSYTALK</h2>
          </div>
          <div class="card-body">
            <div class="info">
              <p>Ruang Berproses kembali menghadirkan webinar dengan topik dan pembicara yang sangat menarik. Untuk edisi bulan Mei dengan mengangkat tema PEKERJAAN, kami mempersembahkan topik dan pembicara berikut ini :</p>
              <br />
              <ul>
                <li>#PSYTALK53 <span>"Cinta atau Obsesi"</span> bersama Devi Adriani Susilo, BA., M.Psi., Psikolog</li>
                <li>#PSYTALK54 <span>"How to Focus on What You Can Control?"</span> bersama  Ruth R Damayanti, M.Psi, Psikolog</li>
              </ul>
              <br />
              <p>Event Timing :</p>
              <ul>
                <li>#PSYTALK53 : Jum'at, 15 Oktober 2021 pukul 19.00-21.00 WIB | Via Zoom Apps</li>
                <li>#PSYTALK54 : Jum'at, 22 Oktober 2021 pukul 19.00-21.00 WIB | Via Zoom Apps</li>
              </ul>
              <br />
              <p>Contact us at :</p>
              <ul>
                <li>Instagram : <a href="https://www.instagram.com/ruangberproses.id/" target="_blank">ruangberproses.id</a></li>
                <li>Twitter : <a href="https://twitter.com/ruangberproses">ruangberproses</a></li>
                <li>Email : <a href="mailto: ruangberproses.id@gmail.com">ruangberproses.id@gmail.com</a></li>
              </ul>
            </div>
            <hr />
            <div class="form">
              <form method="POST" action="simpan.php" enctype="multipart/form-data">
                <label for="nama_lengkap">Nama Lengkap dan Gelar (Jika ada)</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap dan Gelar" required />
                <small class="form-text text-muted font-weight-medium">Masukkan nama lengkap dan gelar bagi yang membutuhkan e-Certificate</small>

                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" required />

                <label for="no_telp">No. WhatsApp</label>
                <input type="text" name="no_telp" id="no_telp" placeholder="No. WhatsApp" required />
                <small class="form-text text-muted font-weight-medium">Pastikan nomor handphone yang Anda isi adalah nomor yang aktif saat ini</small>

                <label for="usia">Usia</label>
                <input type="number" name="usia" id="usia" placeholder="Usia (Angka)" required />

                <label for="pilihan_webinar">Pilihan Webinar PSYTALK</label>
                <select name="pilihan_webinar">
                  <option id="psytalk45">PSYTALK 53 "Cinta atau Obsesi" - 30K</option>
                  <option id="psytalk46">PSYTALK 54 "How to Focus on What You Can Control?"- 15K</option>
                  <!-- <option id="paket_psytalk">Paket 2 Sesi : PSYTALK 34 "Self Branding" & PSYTALK 35 "Overload Problem at Work" - 50K</option> -->
                </select>

                <label for="domisili">Domisili</label>
                <input type="text" name="domisili" id="domisili" placeholder="Domisili Saat Ini" required />

                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan saat ini" required />

                <!--<label for="pekerjaan">Pekerjaan</label>-->
                <!--<select name="pekerjaan">-->
                <!--  <option id="pekerjaan1">Mahasiswa Psikologi</option>-->
                <!--  <option id="pekerjaan2">Mahasiswa Non-Psikologi</option>-->
                <!--  <option id="pekerjaan3">Wiraswasta</option>-->
                <!--  <option id="pekerjaan4">Staff Swasta</option>-->
                <!--  <option id="pekerjaan5">PNS</option>-->
                <!--  <option id="pekerjaan6">Siswa SMA</option>-->
                <!--  <option id="pekerjaan7">Ibu Rumah Tangga</option>-->
                <!--  <option id="pekerjaan8">Jobseeker</option>-->
                <!--  <option id="pekerjaan9">Lainnya</option>-->
                <!--</select>-->
                <!--<input type="text" id="pekerjaan_lain" name="pekerjaan" placeholder="Lainnya">-->
                <!--<small class="form-text text-muted font-weight-medium">Diisi hanya ketika Anda memilih pekerjaan Lainnya</small>-->

                <label for="alasan">Alasan Mengikuti Webinar ini</label>
                <textarea name="alasan" id="alasan" placeholder="Tuliskan Alasan Anda" required></textarea>

                <label for="pernah_mengikuti">Apakah Anda mengikuti rangkaian webinar @ruangberproses.id sebelumnya?</label> <br />
                <input type="radio" id="ya" name="pernah_mengikuti" value="ya" style="margin: 10px 0" required />
                <label for="ya" style="font-weight: 400">Ya</label> <br />
                <input type="radio" id="tidak" name="pernah_mengikuti" value="tidak" style="margin-bottom: 25px" />
                <label for="tidak" style="font-weight: 400">Tidak</label> <br />

                <label for="pertanyaan">Pertanyaan yang ingin diajukan terkait topik</label>
                <textarea name="pertanyaan" id="pertanyaan" placeholder="Tuliskan Pertanyaan Anda" required></textarea>

                <label for="asal_info">Asal Info Webinar</label>
                <select name="asal_info">
                  <option id="asal_info1">Instagram</option>
                  <option id="asal_info2">Twitter</option>
                  <option id="asal_info3">Broadcast</option>
                  <option id="asal_info4">Facebook</option>
                  <option id="asal_info5">Media Partner</option>
                </select>

                <label for="bukti_pembayaran"
                  >Upload bukti pembayaran sesuai dengan webinar yang dipilih untuk <br />
                  E-Certificate + Materi</label
                >
                <br />
                <p style="margin-top: 5px; font-size: small">Pembayaran dapat ditransfer ke rekening BNI 0199235333, BCA 6241059607, JENIUS 90300055196, OVO 085156065094 atas nama YOHANA SONDANG ACTIVA HUTABARAT.</p>
                <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required /> <br />

                <label for="info">Pastikan seluruh pertanyaan sudah diisi. Klik DAFTAR untuk menyudahi form registrasi.</label> <br />
                <p style="margin-top: 5px; font-size: small; margin-bottom: 30px">
                  Detail penyelenggaraan akan kami informasikan via WhatsApp group. Pastikan Anda telah mengupload bukti pembayaran yang benar dan nomor handphone yang diisi di atas adalah nomor yang aktif saat ini. Kami akan mengundang
                  Anda setelah kami mengkonfirmasi pembayaran. Mohon menunggu group invitation dari kami, terima kasih.
                </p>

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
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
