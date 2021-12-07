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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Konseling dengan Associate Psikolog</title>
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

    <style>
      .space {
        margin-bottom: 20px;
      }
    </style>
  </head>

  <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
        <div class="card card-5">
          <div class="card-heading">
            <h2 class="title">Form Pendaftaran Professional Counseling</h2>
          </div>
          <div class="card-body">
            <div class="info">
              <p>Halo sahabat berproses!</p>
              <br />
              <p>Bila kamu membutuhkan konseling dengan konselor profesional dari Ruang Berproses, maka silahkan menjawab pertanyaan dan tes screening dibawah ini dengan jujur ya.</p>
              <br />
              <p>Sebelum memulai mengisi form dibawah, dipastikan kamu telah berada di tempat dan posisi yang nyaman, selain itu juga pastikan kamu memiliki waktu karena mengisi form screening dibutuhkan fokus yang cukup.</p>
              <br />
              <p>Seluruh data yang kamu isikan kerahasiaannya akan dijaga. dan hanya konselor yang akan melayani kamu yang akan menerima keseluruhan data yang kamu berikan.</p>
              <p>Kamu bisa mengikuti kegiatan ini dengan membayar fee sebesar <span>Rp 100.000</span> per sesi per 60 menit konseling.</p>
              <br />
              <p>Pembayaran bisa dilakukan dengan transfer ke salah satu rekening di bawah (semua rekening a.n Yohana Sondang Activa Hutabarat):</p>
              <ol>
                <li>BNI 0199235333</li>
                <li>BCA 6241059607</li>
                <li>JENIUS 90300055196</li>
                <li>OVO 085156065094</li>
              </ol>
              <br />
              <p>Jangan lupa untuk menyimpan bukti pembayaran yang nantinya harus kamu upload dalam formulir ini.</p>
              <p>
                Bila ada pertanyaan seputar kegiatan ini, kamu bisa menghubungi kami via DM IG <a href="https://www.instagram.com/ruangberproses.id/" target="_blank">ruangberproses.id</a> atau email kami di
                <a href="mailto: ruangberproses.id@gmail.com">ruangberproses.id@gmail.com</a>
              </p>
              <br />
              <p>Mari berproses bersama.</p>
            </div>

            <hr />
            <div class="form">
              <form method="POST" action="simpan_counseling_professional.php">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required />

                <label for="no_telp">No. WhatsApp</label>
                <input type="text" id="no_telp" name="no_telp" placeholder="No. WhatsApp" required />
                <small class="form-text text-muted font-weight-medium">Pastikan nomor handphone yang kamu isi adalah nomor yang aktif saat ini</small>

                <label for="email">Alamat Email</label>
                <input type="text" name="email" id="email" placeholder="Email" required />

                <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" required>
                <label for="perempuan" style="font-weight: 400">Perempuan</label> <br>
                <input type="radio" id="laki" name="jenis_kelamin" value="laki">
                <label for="laki" style="font-weight: 400">Laki-laki</label> <br>
                <input type="radio" id="lainnya" name="jenis_kelamin" value="Lainnya">
                <label for="lainnya" style="font-weight: 400">Memilih Tidak Menjawab</label> <br>
                <div class="space"></div>

                <label for="agama">Agama</label> <br />
                <input type="radio" id="islam" name="agama" value="islam" required />
                <label for="islam" style="font-weight: 400">Islam</label> <br />
                <input type="radio" id="kristen" name="agama" value="kristen" />
                <label for="kristen" style="font-weight: 400">Kristen</label> <br />
                <input type="radio" id="katolik" name="agama" value="katolik" />
                <label for="katolik" style="font-weight: 400">Katolik</label> <br />
                <input type="radio" id="buddha" name="agama" value="buddha" />
                <label for="buddha" style="font-weight: 400">Buddha</label> <br />
                <input type="radio" id="hindu" name="agama" value="hindu" />
                <label for="hindu" style="font-weight: 400">Hindu</label> <br />
                <input type="radio" id="konghucu" name="agama" value="konghucu" />
                <label for="konghucu" style="font-weight: 400">Konghucu</label> <br />
                <input type="radio" id="lainnya" name="agama" value="lainnya" />
                <label for="lainnya" style="font-weight: 400">Lainnya</label> <br />
                <div class="space"></div>

                <label for="usia">Usia</label>
                <input type="number" name="usia" id="usia" placeholder="Usia (Angka)" required />

                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan saat ini" required />

                <label for="status_hubungan">Status Hubungan</label> <br />
                <input type="radio" id="belum_menikah" name="status_hubungan" value="Belum Menikah" required />
                <label for="belum_menikah" style="font-weight: 400">Belum Menikah</label> <br />
                <input type="radio" id="menikah" name="status_hubungan" value="Menikah" />
                <label for="menikah" style="font-weight: 400">Menikah</label> <br />
                <input type="radio" id="cerai_hidup" name="status_hubungan" value="Cerai Hidup" />
                <label for="cerai_hidup" style="font-weight: 400">Cerai Hidup</label> <br />
                <input type="radio" id="cerai_meninggal" name="status_hubungan" value="Cerai Meninggal" />
                <label for="cerai_meninggal" style="font-weight: 400">Cerai Meninggal</label> <br />
                <input type="radio" id="lainnya" name="status_hubungan" value="Lainnya" />
                <label for="lainnya" style="font-weight: 400">Memilih Tidak Menjawab</label> <br />
                <div class="space"></div>

                <label for="pendidikan_terakhir">Pendidikan Terakhir</label> <br />
                <input type="radio" id="sd" name="pendidikan_terakhir" value="SD" required />
                <label for="sd" style="font-weight: 400">SD</label> <br />
                <input type="radio" id="smp" name="pendidikan_terakhir" value="SMP" />
                <label for="smp" style="font-weight: 400">SMP</label> <br />
                <input type="radio" id="sma" name="pendidikan_terakhir" value="SMA" />
                <label for="sma" style="font-weight: 400">SMA</label> <br />
                <input type="radio" id="strata1" name="pendidikan_terakhir" value="Sarjana S1" />
                <label for="strata1" style="font-weight: 400">Sarjana S1</label> <br />
                <input type="radio" id="strata2" name="pendidikan_terakhir" value="Sarjana S2" />
                <label for="strata2" style="font-weight: 400">Sarjana S2</label> <br />
                <input type="radio" id="strata3" name="pendidikan_terakhir" value="Sarjana S3" />
                <label for="strata3" style="font-weight: 400">Sarjana S3</label> <br />
                <div class="space"></div>

                <label for="domisili">Domisili</label>
                <input type="text" name="domisili" id="domisili" placeholder="Domisili Saat Ini" required />

                <hr style="margin-bottom: 15px" />

                <label for="kesediaan_mendaftar">Dengan mengisi form ini, saya dengan kesadaran penuh membagi informasi saya kepada Ruang Berproses guna mendapatkan konseling. </label> <br />
                <input type="radio" id="ya" name="kesediaan_mendaftar" value="ya" style="margin: 10px 0" required />
                <label for="ya" style="font-weight: 400">Ya</label> <br />
                <input type="radio" id="tidak" name="kesediaan_mendaftar" value="tidak" style="margin-bottom: 25px" />
                <label for="tidak" style="font-weight: 400">Tidak</label> <br />

                <label for="setuju_screening">Dengan ini saya menyetujui untuk melakukan screening test terlebih dahulu, untuk memastikan bahwa kondisi saya lebih detail kepada konselor</label> <br />
                <input type="radio" id="ya" name="setuju_screening" value="ya" style="margin: 10px 0" required />
                <label for="ya" style="font-weight: 400">Ya</label> <br />
                <input type="radio" id="tidak" name="setuju_screening" value="tidak" style="margin-bottom: 25px" />
                <label for="tidak" style="font-weight: 400">Tidak</label> <br />

                <label for="bukti_pembayaran">Silahkan mengunggah bukti transfer commitment kamu disini (Usahakan tidak lebih dari 10 MB)</label> <br />
                <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required /> <br />

                <p style="margin-top: 5px; font-size: small; margin-bottom: 30px">
                  Terimakasih sudah mendaftar dalam Konseling Profesional Ruang Berproses. Kami akan melakukan screening. Bila kriteria dan kebutuhan kamu sesuai dengan kriteria konseling yang akan kami buka, kami akan segera menghubungi
                  kamu.
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
