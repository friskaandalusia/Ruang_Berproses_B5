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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tentang.css?v=<?php echo time(); ?>">
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
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="artikel.php">Artikel</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
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
                            <h1 class="font-weight-600">Tentang Ruang Berproses</h1>
                            <img class="lebar" src="img/hero/hero-tentangg.png" alt="Hero Image">
                            <!-- <a href="http://www.freepik.com">Designed by Freepik</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section pengenalan">
            <div class="container">
                <div class="card-deck text-lg-left text-center">
                    <div class="card card-kenal text-center">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-6 col-12 my-auto text-md-left text-center">
                                    <h3 class="card-title">Selamat datang di Ruang Berproses</h3>
                                    <p>Mempelajari psikologi tidak serta merta membuat seseorang paham 100% bagaimana cara merawat dan menjaga kesehatan mental, apalagi bagi yang tidak sama sekali menerima edukasi terkait kesehatan mental. Padahal, kebutuhan akan edukasi tersebut sangatlah penting. Bagaimana seseorang dalam proses kehidupannya memiliki wadah dalam melihat dirinya lebih positif dan mampu menjadi manusia yang berdampak bagi orang disekelilingnya adalah harapan kami dalam mendirikan Ruang untuk siapapun Berproses dengan kondisi kesehatan mentalnya.</p>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-right text-center">
                                    <img src="img/yo.jpeg" alt="Hero Image" width="20%">
                                    <h5>Yohana Sondang Activa Hutabarat, M.Psi</h5>
                                    <h6>Founder Ruang Berproses</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section visi-misi">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-center">
                        <img src="img/tentang/tentang-visimisi.png" alt="Hero Image" width="90%">
                        <!-- <a href="http://www.freepik.com">Designed by stories / Freepik</a> -->
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-left text-center">
                        <ul class="check">
                            <li>
                                <h4>Visi</h4>
                                <p> Setiap orang menyadari bahwa Kesehatan mental adalah penting dan setiap orang memiliki ruang untuk berproses dengan dirinya.</p>
                            </li>
                            <li>
                                <h4>Misi</h4>
                                <p>Mengadvokasi mengenai pentingnya akan Kesehatan mental dan mendampingi setiap orang yang ingin berproses dengan kondisi kesehatan mentalnya selaras dengan perubahan yang terus terjadi didalam proses kehidupan.</p>
                            </li>
                            <li>
                                <h4>Tagline</h4>
                                <p>"Selalu ada ruang untuk kamu berproses menuju versi terbaikmu."</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <h2 style="margin-top: 100px; margin-bottom: 40px;" class="text-center font-weight-600">Video Perkenalan Tim Ruang Berproses</h2>
                <video controls width="100%" autoplay="true">
                    <source src="video/rb.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="section profil">
            <div class="container">
                <h2 class="text-center font-weight-600">Profil Ruang Berproses</h2>
                <div class="experience" id="experience">
                    <div class="container">
                        <div class="timeline">
                            <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date">Tahun Berdirinya Ruang Berproses</div>
                                    <h2>Tahun Berdirinya Ruang Berproses</h2>
                                    <h4>Ruang berproses didirikan oleh Yohana Sondang Activa Hutabarat, M.Psi pada Juli 2020. Ruang Berproses merupakan sebuah StartUp psikologi sekaligus media yang membantu teman-teman berproses bersama menuju versi terbaiknya dengan menjaga kesehatan mentalnya</h4>
                                </div>
                            </div>
                            <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date">Sejarah Ruang Berproses</div>
                                    <h2>Sejarah Ruang Berproses</h2>
                                    <h4> RB adalah hasil dari kondisi yang tidak baik-baik saja secara mental yang founder alami di awal-awal pandemi. RB Memiliki beberapa layanan diantaranya Psytalk, IG Live, Virtual Peer Counseling, Virtual Support Grup dan kelas berproses</h4>
                                </div>
                            </div>
                            <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date">Cerita Unik</div>
                                    <h2>Cerita Unik</h2>
                                    <h4>Psytalk merupakan program pertama yang dimiliki oleh Ruang Berproses. Bermula sejak Founder memberanikan diri untuk membuat webinar dengan judul 'It's okay not to be okay' dan mengundang temannya seorang Psikolog yang berada di Thailand, Priska Sinaga. Dari webinar tersebut mendapatkan Banyak feedback positif dari peserta, dan request untuk sesi lanjutan.</h4>
                                </div>
                            </div>
                            <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date">Program RB lainnya</div>
                                    <h2>Program RB lainnya</h2>
                                    <h4>Ruang berproses sudah merekrut tim lebih dari 50 orang terhitung sudah di batch 6 dan tidak hanya itu RB membuat beberapa program kreatif seperti Campaign, Brand Ambassador dan sesekali berkolaborasi dengan StartUp Psikologi lainnya.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="associate">
            <div class="container">
                <h2 class="text-center font-weight-600">Associate Psychologist</h2>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="associate-list" class="owl-carousel">
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/nica.jpg" alt="">
                                        <h>Head of Konseling Profesional</h>
                                    </div>
                                    <div class="associate-name">Eukaristianica Theofani, M.Psi., Psikolog</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/lebda.jpeg" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Lebda Katodhia., M.Psi., Psikolog</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/utari.jpeg" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Utari Krisnamurthi, M.Psi,. Psikolog</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/stenny.jpg" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Stenny Prawitasari, M. Psi., Psikolog</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/tiara.jpg" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Tiara Adjeng Endrastyana, S.Psi., M.Psi., Psikolog</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/vanessa.jpg" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Vanessa Adistiafany Pricillia, M. Psi., Psikolog </div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/ariyanto.png" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Ariyanto Yanwar, M.Psi., Psikolog</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/ayu.jpeg" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Ayu Pradani S. Putri, M.Psi., Psikolog</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/laurentia.jpg" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Laurentia Wahyu Prastiti, S.Psi.,M.Psi.,Psikolog</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/associate/rininta.jpg" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Rininta Meyftanoria, S.Psi, M.Psi, Psikolog</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/user.png" alt="">
                                        <h>Konseling Profesional Team<h>
                                    </div>
                                    <div class="associate-name">Daniswara Agusta Wijaya, M.Psi., Psikolog</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team">
            <div class="container">
                <h2 class="text-center font-weight-600">Tim Kami</h2>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="team-list" class="owl-carousel">
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/murni.jpeg" alt="">
                                        <h>Head of Dept. Event & Content</h>
                                    </div>
                                    <div class="associate-name">Murniati, S. Psi., M. Psi., Psikolog</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/stenny.jpg" alt="">
                                        <h>Head of Dept. Service<h>
                                    </div>
                                    <div class="associate-name">Stenny Prawitasari, M.Psi., Psikolog</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/olga.jpg" alt="">
                                        <h>Head of Dept. Social Media & Branding<h>
                                    </div>
                                    <div class="associate-name">Theresia Olga V C, S.Psi</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/vira.png" alt="">
                                        <h>Head of Dept. Program & Creative<h>
                                    </div>
                                    <div class="associate-name">Navira Nadya, S.Psi</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/mei.jpg" alt="">
                                        <h>IG Live Team<h>
                                    </div>
                                    <div class="associate-name">Meilinda Sadikin, B. Art</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/nenden.jpeg" alt="">
                                        <h>Head of Design & Video<h>
                                    </div>
                                    <div class="associate-name">Nenden Anita</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/lidya.jpeg" alt="">
                                        <h>Head of Counseling<h>
                                    </div>
                                    <div class="associate-name">Luh Putu Lidya Sofhya Dewi</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/rana.jpg" alt="">
                                        <h>Head of Public Relation<h>
                                    </div>
                                    <div class="associate-name">Rana Fathina</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/dira.jpeg" alt="">
                                        <h>Head of Human Resources<h>
                                    </div>
                                    <div class="associate-name">Maria Indira Renata Datubara</div>
                                </div>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/team/friska.jpg" alt="">
                                        <h>Head of IT<h>
                                    </div>
                                    <div class="associate-name">Friska Andalusia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <div class="section balik-layar">
            <div class="container">
                <h2 class="text-center font-weight-600">Di Balik Layar</h2>
                <div class="row mt-5 col-md-12">
                    <div class="center">
                        <button class="accordion">Department Event & Content</button>
                        <div class="panel">
                            <button class="accordionn">Div. Content Creator
                                <hr>
                                <p>Hutami Rachmat Nabilah</p>
                                <p>Noor Shabrina Hidayat</p>
                            </button>
                            <button class="accordionn">Div. IG Live
                                <hr>
                                <p>Lulu</p>
                                <p>Kevin</p>
                                <p>Syifa Fahira Rezkita</p>
                            </button>
                            <button class="accordionn">Div. Webinar
                                <hr>
                                <p>Hana Budi</p>
                                <p>Debora</p>
                                <p>Parenta Nagata Sari</p>
                            </button>
                            <button class="accordionn">Div. Design and Video
                                <hr>
                                <p>Anisa Sri</p>
                                <p>Fitri Nur</p>
                                <p>Wildanti</p>
                                <p>Yohanna Rekhatalia</p>
                                <p>Muhammad Rizky Sharadin</p>
                            </button>
                        </div>
                        <button class="accordion">Department Service</button>
                        <div class="panel">
                            <button class="accordionn">Div. Counseling
                                <hr>
                                <p>Andini Prameswari</p>
                                <p>Nabella Vira Winduantika</p>
                                <p>Yuki Theophila Alyael Chen</p>
                            </button>
                            <button class="accordionn">Div. Support Group
                                <hr>
                                <p>Yasmin Muthia Siregar</p>
                                <p>Aisyah Safira</p>
                            </button>
                        </div>
                        <button class="accordion">Department Social Media & Branding</button>
                        <div class="panel">
                            <button class="accordionn">Div. Public Relation
                                <hr>
                                <p>Fani Wulandari</p>
                                <p>Silvia</p>
                                <p>Dea Damarisa Chrisanti</p>
                                <p>Zahra Adilah Rustaf</p>
                                <p>Vania Salsa Devaraeni</p>
                            </button>
                            <button class="accordionn">Div. Branding
                                <hr>
                                <p>Fransisca Erica Sudibyo</p>
                                <p>Nayda Elvina Hanashakira</p>
                                <p>Nazwa Aura Anjani</p>
                                <p>Aurora Calista Hasiholan Sipahutar</p>
                                <p>Sheylia Leka</p>
                            </button>
                            <button class="accordionn">IG Specialist
                                <hr>
                                <p>Siska</p>
                                <p>Riana</p>
                                <p>Siti Raisya Setyorini</p>
                            </button>
                            <button class="accordionn">Tiktok Specialist
                                <hr>
                                <p>Herdianawati Wulan Sari</p>
                                <p>Anisa Hamidah</p>
                                <p>Inas Azizah</p>
                            </button>
                            <button class="accordionn">Twitter & FB Specialist
                                <hr>
                                <p>Intan</p>
                                <p>Nisa Amalia</p>
                            </button>
                            <button class="accordionn">LinkedIn Specialist
                                <hr>
                                <p>Atikah Zahra</p>
                            </button>
                        </div>
                        <button class="accordion">Department Program & Creative</button>
                        <div class="panel">
                            <button class="accordionn">Div. Human Resources
                                <hr>
                                <p>Alvina Millenia</p>
                                <p>Teena Beatricia</p>
                            </button>
                            <button class="accordionn">Div. IT
                                <hr>
                                <p>Elfal Biri</p>
                                <p>Talitha Rizki Ghaisanni Rioeh</p>
                            </button>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>
<script src="js/associate.js"></script>

</html>