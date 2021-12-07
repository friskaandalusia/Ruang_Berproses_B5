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
    <title>Virtual Peer Counseling</title>
    <link rel="icon" href="../img/icon.png" type="image/png" sizes="16x16">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Parsley.js -->
    <link rel='stylesheet prefetch' href='https://rawgit.com/guillaumepotier/Parsley.js/2.6.2/bower_components/bootstrap/dist/css/bootstrap.css'>
    <link rel='stylesheet prefetch' href='https://rawgit.com/guillaumepotier/Parsley.js/2.6.2/doc/assets/docs.css'>
    <link rel='stylesheet prefetch' href='https://rawgit.com/guillaumepotier/Parsley.js/2.6.2/src/parsley.css'>

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
      <div class="card card-5">
        <div class="card-heading">
          <h2 class="title">Form Pendaftaran Virtual Peer Counseling</h2>
        </div>
          <div class="card-body">
            <!-- <div class="info">
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
            <hr> -->
            
            <!-- <div class="form"> -->
              <form class="demo-form" method="POST" action="simpan_peercounseling.php" enctype="multipart/form-data">
              <div class="form-section">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>

                <label for="nama_panggilan">Nama Panggilan</label>
                <input type="text" name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan" required>
                
                <label for="email">Alamat Email</label>
                <input type="text" name="email" id="email" placeholder="Email" required>

                <label for="no_telp">No. WhatsApp</label>
                <input type="text" name="no_telp" id="no_telp" placeholder="No. WhatsApp" required>
                
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan saat ini" required>

                <label for="bday">Tanggal Lahir</label>
                <input type="date" name="bday" id="bday" required>
                
                <label for="jenis_kelamin">Jenis Kelamin</label> <br />
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" style="margin: 10px 0;" required>
                <label for="perempuan" style="font-weight: 400;">Perempuan</label> <br />
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" style="margin-bottom: 10px;">
                <label for="laki" style="font-weight: 400;">Laki-laki</label> <br />
                <input type="radio" id="tidak_jawab" name="jenis_kelamin" value="Memilih tidak menjawab" style="margin-bottom: 25px;">
                <label for="tidak_jawab" style="font-weight: 400;">Memilih tidak menjawab</label> <br />
                
                <label for="status">Status</label> <br />
                <input type="radio" id="menikah" name="status_hubungan" value="Menikah" style="margin: 10px 0;" required>
                <label for="sudah" style="font-weight: 400;">Menikah</label> <br />
                <input type="radio" id="belum_menikah" name="status_hubungan" value="Belum Menikah" style="margin-bottom: 25px;">
                <label for="belum" style="font-weight: 400;">Belum Menikah</label> <br />

                <label for="domisili">Domisili</label>
                <input type="text" name="domisili" id="domisili" placeholder="Domisili Saat Ini" required>

                <label for="ikut_sesi">Pernah mengikuti sesi peer konseling di Ruang Berproses sebelumnya?</label> <br />
                <input type="radio" id="ya" name="pernah_ikut_sesi" value="Ya" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya</label> <br />
                <input type="radio" id="tidak" name="pernah_ikut_sesi" value="Tidak" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label for="ketersediaan">Apakah bersedia jika ditangani oleh konselor yang berbeda jenis kelamin dari anda?</label> <br />
                <input type="radio" id="ya_bersedia" name="ketersediaan_beda_gender" value="Ya, Bersedia" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya, bersedia</label> <br />
                <input type="radio" id="tidak_bersedia" name="ketersediaan_beda_gender" value="Tidak Bersedia" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak bersedia</label> <br />

                <label for="ikut_konseling">Apakah kamu sudah pernah mengikuti konseling atau terapi psikologi sebelumnya?</label> <br />
                <input type="radio" id="ya" name="pernah_ikut_konseling" value="Ya" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya</label> <br />
                <input type="radio" id="tidak" name="pernah_ikut_konseling" value="Tidak" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label for="opsional">Opsional : Apabila ada file tambahan untuk membantu konselor kamu memahami kondisimu saat ini seperti journal, hasil tes psikologi, dll</label> <br />
                <input type="file" id="opsional" name="file_tambahan" style="margin-bottom: 0px;"> <br />

                <label for="pernah_mengikuti">Apakah kamu sudah pernah mengikuti konseling di Ruang Berproses sebelumnya?</label> <br />
                <input type="radio" id="ya" name="pernah_ikut_konselingrb" value="Ya" style="margin: 10px 0;" required>
                <label for="ya" style="font-weight: 400;">Ya</label> <br />
                <input type="radio" id="tidak" name="pernah_ikut_konselingrb" value="Tidak" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label for="keluhan">Mohon informasikan kami mengenai keluhanmu (informasi akan dijaga kerahasiaannya)</label>
                <textarea name="keluhan"  id="keluhan" placeholder="Tuliskan Keluhan Kamu" required></textarea>

                <label for="latar_belakang">Mohon informasikan latarbelakang permasalahan yang kamu alami</label>
                <textarea name="latar_belakang"  id="latar_belakang" placeholder="Tuliskan Latar Belakang Kamu" required></textarea>

                <label for="tujuan">Tujuan yang ingin dicapai melalui konseling</label>
                <textarea name="tujuan"  id="tujuan" placeholder="Tuliskan Tujuan Kamu" required></textarea>

                <label for="sadar">Dengan mengisi form ini, saya dengan kesadaran penuh membagi informasi saya kepada Ruang Berproses guna mendapatkan konseling</label> <br />
                <input type="radio" id="setuju" name="bagi_informasi" value="Setuju" style="margin: 10px 0;" required>
                <label for="setuju" style="font-weight: 400;">Setuju</label> <br />
                <input type="radio" id="tidak" name="bagi_informasi" value="Tidak Setuju" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak Setuju</label> <br />

                <label for="setuju">Dengan ini saya menyetujui untuk melakukan screening test terlebih dahulu, untuk memastikan bahwa kondisi saya bisa ditangani oleh peer counselor</label> <br />
                <input type="radio" id="setuju" name="setuju_screening" value="Setuju" style="margin: 10px 0;" required>
                <label for="setuju" style="font-weight: 400;">Setuju</label> <br />
                <input type="radio" id="tidak" name="setuju_screening" value="Tidak Setuju" style="margin-bottom: 25px;">
                <label for="tidak" style="font-weight: 400;">Tidak Setuju</label> <br />
              </div>
              
              <div class="form-section">
                <h4>Tes Screening</h4>
                  <p style="margin-bottom: 8px;">Keterangan</p>
                  <ul style="margin-bottom: 30px;">
                    <li>0 : Tidak ada atau tidak pernah</li>
                    <li>1 : Sesuai dengan yang dialami sampai tingkat tertentu, atau kadang-kadang</li>
                    <li>2 : Sering</li>
                    <li>3 : Sangat sesuai dengan yang dialami, atau hampir setiap saat</li>
                  </ul>

                  <label class="statement">Menjadi marah karena hal-hal kecil/sepele</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="menjadi_marah" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="menjadi_marah" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="menjadi_marah" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="menjadi_marah" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mulut terasa kering</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mulut_kering" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mulut_kering" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mulut_kering" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mulut_kering" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak dapat melihat hal yang positif dari suatu kejadian</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_melihat_hal_positif" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_melihat_hal_positif" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_melihat_hal_positif" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_melihat_hal_positif" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasakan gangguan dalam bernapas (napas cepat,sulit bernapas)</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="gangguan_pernapasan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="gangguan_pernapasan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="gangguan_pernapasan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="gangguan_pernapasan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa sepertinya tidak kuat lagi untuk melakukan suatu kegiatan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidakkuat_melakukan_kegiatan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidakkuat_melakukan_kegiatan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidakkuat_melakukan_kegiatan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidakkuat_melakukan_kegiatan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Cenderung bereaksi berlebihan pada situasi</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="reaksi_berlebihan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="reaksi_berlebihan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="reaksi_berlebihan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="reaksi_berlebihan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kelemahan pada anggota tubuh</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="kelemahan_anggota_tubuh" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="kelemahan_anggota_tubuh" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="kelemahan_anggota_tubuh" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="kelemahan_anggota_tubuh" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kesulitan untuk relaksasi/bersantai</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_relaksasi" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_relaksasi" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_relaksasi" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_relaksasi" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Cemas yang berlebihan dalam suatu situasi namun bisa lega jika hal/situasi itu berakhir</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="cemas_berlebihan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="cemas_berlebihan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="cemas_berlebihan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="cemas_berlebihan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Pesimis</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="pesimis" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="pesimis" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="pesimis" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="pesimis" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah merasa kesal</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_kesal" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_kesal" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_kesal" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_kesal" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa banyak menghabiskan energi karena cemas</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="energi_hbs_krn_cemas" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="energi_hbs_krn_cemas" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="energi_hbs_krn_cemas" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="energi_hbs_krn_cemas" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa sedih dan depresi</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sedih_dan_depresi" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sedih_dan_depresi" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sedih_dan_depresi" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sedih_dan_depresi" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak sabaran</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_sabaran" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_sabaran" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_sabaran" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_sabaran" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kelelahan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="kelelahan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="kelelahan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="kelelahan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="kelelahan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kehilangan minat pada banyak hal (misal: makan,ambulasi, sosialisasi)</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="kehilangan_minat" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="kehilangan_minat" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="kehilangan_minat" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="kehilangan_minat" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa diri tidak layak </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="diri_tdk_layak" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="diri_tdk_layak" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="diri_tdk_layak" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="diri_tdk_layak" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah tersinggung</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_tersinggung" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_tersinggung" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_tersinggung" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_tersinggung" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Berkeringat (misal: tangan berkeringat) tanpa stimulasi oleh cuaca maupun latihan fisik</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="berkeringat" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="berkeringat" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="berkeringat" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="berkeringat" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Ketakutan tanpa alasan yang jelas</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="ketakutan_tnp_alasan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan_tnp_alasan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan_tnp_alasan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan_tnp_alasan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa hidup tidak berharga</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="hidup_tdk_berharga" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tdk_berharga" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tdk_berharga" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tdk_berharga" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Sulit untuk beristirahat</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_istirahat" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_istirahat" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_istirahat" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_istirahat" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kesulitan dalam menelan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_menelan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_menelan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_menelan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_menelan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak dapat menikmati hal-hal yang saya lakukan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_menikmati" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_menikmati" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_menikmati" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_menikmati" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Perubahan kegiatan jantung dan denyut nadi tanpa stimulasi oleh latihan fisik</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="perubahan_jantung" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="perubahan_jantung" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="perubahan_jantung" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="perubahan_jantung" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa hilang harapan dan putus asa</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="hilang_harapan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="hilang_harapan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="hilang_harapan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="hilang_harapan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah marah</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_marah" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_marah" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_marah" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_marah" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah panik</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_panik" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_panik" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_panik" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_panik" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kesulitan untuk tenang setelah sesuatu yang mengganggu</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_tenang" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_tenang" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_tenang" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_tenang" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Takut diri terhambat oleh tugas-tugas yang tidak biasa dilakukan </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="takut_terhambat" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="takut_terhambat" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="takut_terhambat" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="takut_terhambat" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Sulit untuk antusias pada banyak hal</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_antusias" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_antusias" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_antusias" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_antusias" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Sulit mentoleransi gangguan-gangguan terhadap hal yang sedang dilakukan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_mentoleransi" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_mentoleransi" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_mentoleransi" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_mentoleransi" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Berada pada keadaan tegang</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tegang" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tegang" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tegang" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tegang" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa tidak berharga</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_berharga" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_berharga" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_berharga" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_berharga" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak dapat memaklumi hal apapun yang menghalangi anda untuk menyelesaikan hal yang sedang Anda lakukan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_memaklumi" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_memaklumi" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_memaklumi" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_memaklumi" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Ketakutan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="ketakutan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak ada harapan untuk masa depan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_ada_harapan" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_ada_harapan" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_ada_harapan" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_ada_harapan" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa hidup tidak berarti </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="hidup_tidak_berarti" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tidak_berarti" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tidak_berarti" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tidak_berarti" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah gelisah</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_gelisah" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_gelisah" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_gelisah" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_gelisah" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Khawatir dengan situasi saat diri Anda mungkin menjadi panik dan mempermalukan diri sendiri </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="khawatir_panik" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="khawatir_panik" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="khawatir_panik" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="khawatir_panik" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Gemetar</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="gemetar" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="gemetar" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="gemetar" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="gemetar" value="3">
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Sulit untuk meningkatkan inisiatif dalam melakukan sesuatu</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_inisiatif" value="0" required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_inisiatif" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_inisiatif" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_inisiatif" value="3">
                      <label>3</label>
                    </li>
                  </ul>

                  <p style="margin-top: 5px; font-size: small; margin-bottom: 30px;">
                    Terima kasih telah menjawab pertanyaan pada gform dan tes screening dengan jujur. Silakan tunggu informasi lebih lanjut dari tim Ruang Berproses 😊
                  </p>
              </div>

               <div class="form-navigation">
                  <button type="button" class="previous btn btn-info pull-left btn--red">&lt; Previous</button>
                  <button type="button" class="next btn btn-info pull-right btn--red">Next &gt;</button>
                  <input type="submit" name="submit" class="btn btn-default pull-right btn--red">
                  <span class="clearfix"></span>
                </div>

              </form>
            <!-- </div> -->
          </div>
      </div>
    </div>
  </div>
  
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src='http://code.jquery.com/jquery-2.1.3.js'></script>
    <script src='https://rawgit.com/guillaumepotier/Parsley.js/2.6.2/dist/parsley.js'></script>

    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/script.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->