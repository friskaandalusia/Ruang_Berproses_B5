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
    <link rel="stylesheet" href="css/artikel.css?v=<?php echo time(); ?>">
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
                                        <a class="nav-link" href="index2.php">Beranda</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="layanan.php">Layanan</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="program.php">Program</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                        <a class="nav-link" href="artikel.php">Artikel</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="tentang.php">Tentang</a>
                                    </li>
                                    <?php
                                    if (!isset($_SESSION["login"])) {
                                    ?>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a href="pengguna/login.php" class="nav-link">Masuk</a>
                                        </li>
                                        <?php
                                    } else {
                                        if ($_SESSION["role"] == 1) {
                                        ?>
                                            <li>
                                                <a href="admin/dashboard.php" class="nav-link">Rekap Admin</a>

                                            </li>
                                        <?php
                                        }
                                        ?>
                                        <li><a href="logout.php" class="nav-link">Logout</a></li><?php
                                                                                                }
                                                                                                    ?>
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
                <div class="section jumbotron-section-tentang">
                    <div class="container">
                        <div class="text-center text-md-center">
                            <h1 class="font-weight-600">Artikel Ruang Berproses</h1>
                            <img class="lebar" src="img/hero/hero-artikel.png" alt="Hero Image">
                            <!-- <a href="http://www.freepik.com">Designed by Freepik</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section program">
            <div class="container">
                <h2 class="text-center font-weight-600">Lihat Artikel</h2>
                <div class="row mt-5">
                    <div class="card-deck  text-lg-left text-center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/psytalk52.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel</h5>
                                <div class="item">
                                    <p>Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan.</p>

                                </div>
                                <div id="wrapper">
                                    <a href="artikel1.php" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/psytalk52.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel</h5>
                                <div class="item">
                                    <p>Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan.</p>
                                </div>
                                <div id="wrapper">
                                    <a href="artikel2.php" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/psytalk52.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel</h5>
                                <div class="item">
                                    <p>Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan.</p>
                                </div>
                                <div id="wrapper">
                                    <a href="artikel3.php" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="card-deck">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/psytalk52.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel</h5>
                                <div class="item">
                                    <p>Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan.</p>
                                </div>
                                <div id="wrapper">
                                    <a href="artikel4.php" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/psytalk52.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel</h5>
                                <div class="item">
                                    <p>Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan.</p>
                                </div>
                                <div id="wrapper">
                                    <a href="artikel5.php" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="img/psytalk52.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel</h5>
                                <div class="item">
                                    <p>Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan. Berikut merupakan gambaran kecil artikel yang dipaparkan.</p>
                                </div>
                                <div id="wrapper">
                                    <a href="artikel6.php" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
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
                        <p><i class="fas fa-envelope"></i><a href="mailto:admin@ruangberproses.id">admin@ruangberproses.id</a></p>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="footer-copyright">
                        <p>Copyright &copy; 2021 Ruang Berproses. All Rights Reserved | Tim IT RB</p>
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