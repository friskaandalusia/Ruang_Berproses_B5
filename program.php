<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ruang Berproses</title>
    <link rel="icon" href="img/icon.png" type="image/png" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/program.css?v=<?php echo time(); ?>">
</head>

<body class="hero-section">
    <header>
        <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand"><img src="img/logo-new.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="index.php">Beranda</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="layanan.php">Layanan</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                        <a class="nav-link" href="program.php">Program</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="artikel.php">Artikel</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="tentang.php">Tentang</a>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="section full-height">
            <div class="absolute-center">
                <div class="section jumbotron-section-layanan">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <img src="img/hero/hero-program.png" alt="Hero Image" width="90%">
                                <!-- <a href="http://www.freepik.com">Designed by stories / Freepik</a> -->
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-left text-center">
                                <h1 class="font-weight-600">Program RB</h1>
                                <p>Program Ruang Berproses meliputi kegiatan webinar seperti Psytalk, lalu livebinar di IG Live Ruang Berproses dan program Kelas Berproses. Kegiatan ini diciptakan sebagai media pemberian edukasi kepada masyarakat betapa pentingnya menjaga kesehatan mental seseorang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="section psytalk">
            <div class="container">
                <h2 class="text-center font-weight-600">Webinar Psytalk</h2>
                <div class="row mt-5">
                    <div class="card-deck">
                    <?php
                      include "admin/psytalk/koneksi.php";
                        //tampilkan data
                        $sql = "SELECT * FROM keloladata_psytalk ORDER BY no_konten DESC LIMIT 3";
                        $result = $conn->query($sql);
                    ?>
                     <?php
                         if ($result->num_rows > 0) {
                            // output data of each row
                                $no=0;
                                    while($row = $result->fetch_assoc()) {
             	                $no++;
                     ?>

                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="admin/psytalk/image_view.php?id_gambar=<?php echo $row['no_konten']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["judul"]; ?></h5>
                                <div class="item">
                                    <img src="img/program/calendar.png" alt="Calender">
                                    <div class="info">
                                        <p><?=$row["hari_tgl"];?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/program/clock.png" alt="Calender">
                                    <div class="info">
                                        <p><?= $row["waktu"]; ?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/program/money.png" alt="Calender">
                                    <div class="info">
                                        <p><?= $row["fee"]; ?></p>
                                    </div>
                                </div>
                                <div id="wrapper">
                                    <a href="<?= $row["link"]; ?>" class="btn btn-primary">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <?php        
             }
         } else {
             echo "0 results";
         }
         
         $conn->close();
         ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section kb">
            <div class="container">
                <h2 class="text-center font-weight-600">Kelas Berproses</h2>
                <div class="row mt-5">
                    <div class="card-deck">
                    <?php
                      include "admin/kelasberproses/koneksi.php";
                        //tampilkan data
                        $sql = "SELECT * FROM kelola_kb ORDER BY id_kb DESC LIMIT 2";
                        $result = $conn->query($sql);
                    ?>
                     <?php
                         if ($result->num_rows > 0) {
                            // output data of each row
                                $no=0;
                                    while($row = $result->fetch_assoc()) {
             	                $no++;
                     ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="admin/kelasberproses/image_view.php?id_gambar=<?php echo $row['id_kb']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"> <?= $row["judulkb"]; ?> </h5>
                                <div class="item">
                                    <img src="img/program/calendar.png" alt="Calender">
                                    <div class="info">
                                        <p><?= $row["haritglkb"]; ?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/program/clock.png" alt="Calender">
                                    <div class="info">
                                        <p><?= $row["waktukb"]; ?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/program/money.png" alt="Calender">
                                    <div class="info">
                                        <p><?= $row["feekb"]; ?></p>
                                    </div>
                                </div>
                                <div id="wrapper">
                                    <a href=<?= $row["link"]; ?> class="btn btn-primary">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                         } else {
                             echo "0 results";
                         }
                            $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>


          <div class="section ig">
            <div class="container">
                <h2 class="text-center font-weight-600">IG Live</h2>
                <div class="row mt-5">
                    <div class="card-deck">
                        <?php
                      include "admin/ig_live/koneksi.php";
                        //tampilkan data
                        $sql = "SELECT * FROM keloladata_iglive ORDER BY id_iglive DESC LIMIT 2";
                        $result = $conn->query($sql);
                    ?>
                     <?php
                         if ($result->num_rows > 0) {
                            // output data of each row
                                $no=0;
                                    while($row = $result->fetch_assoc()) {
             	                $no++;
                     ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="admin/ig_live/image_view.php?id_gambar=<?php echo $row['id_iglive']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["judulig"];?></h5>
                                <div class="item">
                                    <img src="img/program/calendar.png" alt="Calender">
                                    <div class="info">
                                        <p><?= $row["haritglig"]; ?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/program/clock.png" alt="Calender">
                                    <div class="info">
                                        <p><?= $row["waktuig"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                         } else {
                             echo "0 results";
                         }
                            $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section faq">
            <div class="container">
                <h2 class="text-center font-weight-600">Pertanyaan Sahabat RB</h2>
                <div class="row mt-5 col-md-12">
                    <div class="center">
                        <button class="accordion">Apa saja sih program yang tersedia di Ruang Berproses?</button>
                        <div class="panel">
                            <p>Ruang Berproses menyediakan Program Webinar Psytalk, Kelas Berproses dan juga IG Live.</p>
                        </div>

                        <button class="accordion">Apakah semua Program Ruang Berproses gratis?</button>
                        <div class="panel">
                            <p>Apabila ingin mengikuti Webinar Psytalk, klien akan dikenakan biaya sebesar Rp. 25.000/tiket. Apabila ingin mengikuti Program Kelas Berproses, klien akan dikenakan biaya sebesar Rp. 30.000/tiket. Kedua layanan ini dilakukan secara virtual. Akan tetapi, apabila ingin mengikuti program IG Live, maka klien dapat mengikuti program secara gratis.</p>
                        </div>

                        <button class="accordion">Bagaimana cara mendaftarnya?</button>
                        <div class="panel">
                            <p>Kamu dapat melihat website atau media sosial Ruang Berproses lainnya, kemudian daftarkan diri dengan mengisi data diri serta permasalahan yang sedang dihadapi. Selanjutnya data ini akan diproses oleh tim untuk pelaksanaan program.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 footer-about wow fadeInUp text-md-left text-center">
                        <img class="logo-footer" src="img/logo-new.png" alt="logo-footer">
                        <p>
                            Jangan ragu untuk menghubungi kami melalui telepon, email, atau media sosial kami. Kami pasti akan kembali menghubungi Anda sesegera mungkin.
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown text-md-left text-center">
                        <h3>Kontak</h3>
                        <p><i class="fas fa-phone"></i><a href="https://wa.me/+6281573499529">+6281573499529 (Ruang Berproses)</a></p>
                        <p><i class="fas fa-phone"></i><a href="https://wa.me/+6287719661951">+6287719661951 (Dea)</a></p>
                        <p><i class="fas fa-envelope"></i><a href="mailto: ruangberproses.id@gmail.com"> ruangberproses.id@gmail.com</a></p>
                    </div>
                    <div class="col-md-4 col-lg-3 footer-social wow fadeInUp text-md-left text-center">
                        <h3>Sosial Media</h3>
                        <p>
                            <a href="https://facebook.com/RuangBerproses/"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/ruangberproses/"><i class="fab fa-twitter"></i></a>
                            <a href="https://t.me/ruangberproses/"><i class="fab fa-telegram"></i></a>
                            <a href="https://www.instagram.com/ruangberproses.id/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/ruang-berproses/"><i class="fab fa-linkedin"></i></a>
                        </p>
                        <p style="margin-top:22px;">Apakah anda Admin?
									<?php
									if (!isset($_SESSION["login"])) {
									?>
									    <a href="pengguna/login.php" class="nav-link">Masuk</a>
									<?php
									} else {
										if ($_SESSION["role"] == 1) {
									?>
										<a href="admin/dashboard.php" class="nav-link">Rekap Admin</a>
									<?php
										}
									?>
									    <a href="logout.php" class="nav-link">Logout</a><?php
									}
									?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="footer-copyright">
                        <p>Copyright &copy; 2022 Ruang Berproses. All Rights Reserved | Tim IT RB</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- Script -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    (function($) {
        "use strict";

        $(function() {
            var header = $(".start-style");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 10) {
                    header.removeClass('start-style').addClass("scroll-on");
                } else {
                    header.removeClass("scroll-on").addClass('start-style');
                }
            });
        });

        //Animation

        $(document).ready(function() {
            $('body.hero-section').removeClass('hero-section');
        });

        //Menu On Hover

        $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
            if ($(window).width() > 750) {
                var _d = $(e.target).closest('.nav-item');
                _d.addClass('show');
                setTimeout(function() {
                    _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                }, 1);
            }
        });

    })(jQuery);
</script>
<script src="js/faq.js"></script>

</html>