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
    <link rel="stylesheet" href="css/artikel_konten.css?v=<?php echo time(); ?>">
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


        <div class="section visi-misi">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-12 text-center">
                        <h2>Kenali Karakteristik <i> Codependent</i> dalam <i>Toxic Relationship</i></h2>
                        <h6>Oleh : Widya Prasetyaningtyas</h6>
                        <hr>
                        <img src="img/artikel/each/artikel2.jpg" alt="Hero Image" width="80%">
                        <!-- <a href="http://www.freepik.com">Designed by stories / Freepik</a> -->
                        <p>
                            Pada zaman sekarang, sudah cukup banyak masyarakat yang mulai menyadari akan adanya toxic relationship. Biasanya, toxic relationship dimulai dengan adanya gaslighting. Menurut American Psychological Association (APA), gaslight merupakan tindakan memanipulasi orang lain agar mereka meragukan persepsi, pengalaman, atau pemahamannya tentang suatu peristiwa. Selain gaslight, yang seringkali dijumpai dalam toxic relationship adalah tindakan yang abusive atau tindakan kekerasan, baik secara mental maupun fisik. Berada di dalam hubungan yang tidak sehat tentunya memiliki dampak untuk kesehatan mental, mulai dari merasa kehilangan harga diri, cemas berlebih, gangguan kepercayaan, hilangnya rasa kebahagiaan, dan lain-lain. Terdapat karakteristik lain di dalam hubungan yang tidak sehat atau toxic relationship, yaitu codependent atau codependency.
                        </p>

                        <ul>
                            <li>
                                <h5>Apakah Itu “Codependent”?</h5>
                                <p>Menjalani hubungan yang tidak bahagia tentunya akan membuat kita tertekan dan membuat kesehatan mental terganggu. Akan tetapi, ada suatu kebahagiaan yang timbul dari hubungan tidak sehat dikenal dengan codependent atau codependency. Menurut American Psychological Association, Codependency memiliki definisi pola hubungan yang disfungsional di mana seseorang secara psikologis bergantung pada (atau dikendalikan oleh) seseorang yang memiliki kecanduan patologis. Codependent sendiri merupakan kata yang bersifat adjective atau kata sifat. Arti secara singkat dari codependent yaitu perasaan memiliki tanggung jawab akan suatu hal yang dimiliki oleh orang lain. Salah satunya, mereka memiliki rasa tanggung jawab akan kebahagiaan orang lain. Hubungan dengan sifat codependent akan cenderung terjalin tidak seimbang atau berat sebelah, karena akan ada satu orang yang memberikan energinya secara ekstra untuk membahagiakan pasangannya.
                                </p>
                            </li>
                            <li>
                                <h5>Ciri-Ciri dari Codependent yang Dapat Kamu Rasakan</h5>
                                <p>Setelah memahami apa itu codependent, apakah kamu bisa merasakan kalau kamu memiliki sifat tersebut atau menjadi korban dari orang yang memiliki sifat tersebut? Ciri-ciri dari hubungan codependent dapat kamu baca di bawah ini :
                                </p>
                                <ol class="list">
                                    <li>
                                        <p>Kamu cenderung merasa sulit untuk mengambil keputusan di dalam hubungan yang kamu jalin.</p>
                                    </li>
                                    <li>
                                        <p>Selalu mengedepankan apa yang diputuskan oleh pasangan kamu tanpa mempertimbangkan keinginan yang kamu miliki.</p>
                                    </li>
                                    <li>
                                        <p>Rela melakukan apapun demi membahagiakan pasanganmu, bahkan hal yang merugikan diri sendiri pun dapat dilakukan.</p>
                                    </li>
                                    <li>
                                        <p>Cenderung memendam perasaan dan mengutarakan perasaan, karena memiliki rasa takut kalau pasanganmu akan marah atau merasa tersakiti.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Memiliki komunikasi yang sulit dengan pasangan, salah satunya konklusi dari masalah yang sedang dihadapi.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Kamu merasa bahwa tindakan yang dilakukan oleh pasanganmu akan menjadi tanggung jawab kamu.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Prioritas utama kamu adalah kebahagiaan pasanganmu daripada kebahagiaan diri kamu sendiri.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Seringkali merasa bersalah kalau kamu lebih mendahului keinginan sendiri daripada keinginan pasangan kamu.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Kamu sudah merasa bahwa kamu tersakiti oleh pasanganmu, kamu telah dilakukan secara tidak adil, namun kamu tidak bisa meninggalkannya karena kamu takut kalau dia tidak akan bisa hidup tanpa kamu.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Memperbaiki masalah dan menolong pasanganmu akan membuat kamu merasakan bahwa kamu dicintai atau dibutuhkan.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Kamu cenderung mengkritik diri sendiri dan suka merasa bersalah.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Perlahan kamu kehilangan dirimu yang sebenarnya, seperti siapa kamu, apa yang kamu sukai, apa perasaanmu, apa hal penting untuk kamu.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Kamu akan kesulitan menentukan batasan dan tegas kepada diri sendiri.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Kamu merasa kesulitan untuk meminta pertolongan kepada pasanganmu
                                        </p>
                                    </li>
                                    <li>
                                        <p>Dengan tanggung jawab akan kebahagiaan orang lain, kamu akan merasakan bahwa kamu kekurangan rasa cinta atau kasih sayang.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Kamu takut akan pengkhianatan, kritik, dan penolakan. Kamu cenderung menjadi people pleaser.
                                        </p>
                                    </li>
                                </ol>
                            </li>
                        </ul>

                        <p>Dari sekian banyak ciri-ciri yang telah disebutkan, codependent ini tidak hanya dirasakan oleh orang yang memiliki hubungan percintaan, namun bisa terjadi pada hubungan pertemanan maupun keluarga. Tidak menutup kemungkinan bahwa ciri codependent dapat dirasakan di lingkungan keluarga, karena keluarga pun bisa menjadi pemicu timbulnya sifat ini.</p>

                        <ul>
                            <li>
                                <h5>Apa Sih, Penyebab dari Codependent?</h5>
                                <p>Codependent dapat terjadi karena seseorang memiliki kecanduan patologis seperti konsumsi alkohol atau obat-obatan terlarang. Trauma masa kecil menjadi salah satu pengaruh munculnya sifat codependent. Trauma yang dihadapi seperti perasaan diabaikan oleh orang tua, ekspektasi yang tidak terpenuhi, merasa butuh bantuan namun sulit didapatkan, dilimpahkan tanggung jawab dalam kondisi yang tidak siap, dan perasaan tidak memiliki hak suara di lingkungan tempat tinggal. Terdapat penelitian lain yang mengatakan bahwa anak-anak yang kerap diajarkan untuk mengorbankan kebutuhan mereka demi menyenangkan orang tua akan menyebabkan timbul perasaan kurang perhatian dan kasih yang akan didapatkan oleh anak.
                                </p>
                                <p>Pada intinya, cukup banyak peneliti yang mengatakan sifat-sifat codependent ini muncul dari pola asuh orang tua atau hubungan keluarga yang kurang baik. Hal-hal tersebut menyebabkan orang dengan sifat codependent memiliki kecenderungan untuk meminta suatu hal yang mereka inginkan dari orang lain, seperti kebahagiaan dan kasih sayang. Sifat codependent ini juga dapat diketahui dengan dilakukannya asesmen, di mana terdapat tiga dimensi yang dapat diukur seperti kontrol interpersonal, pengorbanan diri, dan penekanan emosional.
                                </p>
                            </li>
                            <li>
                                <h5>Pengaruh Codependent Terhadap Hubungan dan Kesehatan Mental</h5>
                                <p>Berdasarkan ciri-ciri yang telah disebutkan, sudah pasti bahwa codependent ini memiliki pengaruh untuk hubunganmu, entah bersama pasangan, sahabat, maupun keluarga. Sifat codependent ini akan membawa kamu ke dalam hubungan yang tidak sehat atau toxic relationship. Sedikit mengulas dari film “The Story of Kale”, bahwa ternyata Kale memiliki sifat codependent, ia merasa bahwa ia memiliki tanggung jawab akan kebahagiaan pasangannya. Maka, saat pasangannya mengkhianati Kale, ia mempertanyakan dirinya “Apakah kebahagiaan yang telah diberikan oleh saya itu masih kurang?”. Sifat codependent tersebut tentu memicu Kale memiliki hubungan yang tidak sehat. Ketika bertengkar, Kale secara tidak sadar hampir melakukan tindakan kekerasan baik secara fisik maupun verbal. Itulah pengaruh dari sifat codependent terhadap hubungan dengan orang sekitar. Secara tidak sadar, hal tersebut akan menyakiti perasaan orang lain. Karakteristik-karakteristik pada Codependent berkaitan dengan toxic relationship di mana sifat ini memicu tindakan-tindakan kekerasan di dalam hubungan baik secara fisik maupun mental, memicu orang menjadi passive-aggressive, manipulatif, people-pleaser, dan lainnya yang tentunya melahirkan hubungan yang tidak sehat.
                                </p>
                                <p>Pengaruh bagi kesehatan mental orang dengan sifat codependent antara lain, rendahnya self-esteem, cemas berlebih, masalah kepercayaan atau biasa disebut dengan trust issue, kesulitan dalam mengambil keputusan, sifat ketidakmandirian, rasa takut, sifat yang kurang dewasa, obsesif, dan sebagainya. Pengaruh-pengaruh tersebut sudah pasti melelahkan secara mental atau mentally drained bagi siapapun yang merasa memiliki sifat tersebut. Masalah kesehatan mental yang dimilikinya akan mempengaruhi interaksinya terhadap orang baru, serta kesulitan untuk membuka hati dan membuka lembaran baru di hidupnya, seperti terikat pada masa lalu. Masalah kesehatan mental pada orang dengan sifat codependent akan dihadapi ketika dewasa, jika pemicu munculnya sifat tersebut dimulai dengan trauma masa kecil.</p>
                            </li>
                            <li>
                                <h5>Cara Mengatasi Codependent</h5>
                                <p>Rasanya sulit menghadapi diri dengan sifat codependent, hari-hari terasa lebih berat. Namun, jangan khawatir, kamu bisa memisahkan persoalan antara dukungan dan ketergantungan, kamu dapat memberikan dukungan kepada pasangan di masa-masa sulit, tapi kamu juga harus pastikan bahwa diri kamu sedang baik-baik saja atau sedang tidak membutuhkan bantuan. Kemudian, validasi dirimu sendiri, jangan harapkan validasi dari orang lain, hidupmu tidak selalu untuk orang lain, hidup yang kamu miliki adalah milik kamu dan untuk kamu. Kamu juga bisa belajar untuk mencintai atau peduli orang lain secara sehat atau sewajarnya, selama kamu merasakan kenyamanan maka perasaan yang kamu miliki pun sehat. Ketahui dan tetapkan juga batasan untuk diri kamu, kamu bisa mempelajari tentang kapan kamu harus menolak dan menerima sesuatu. Jangan lupakan untuk ingat tujuan dari kamu melakukan hal-hal seperti membantu, mendukung, menemani, dan lain-lain. Segeralah keluar dari lingkungan yang kamu anggap tidak sehat bagi mentalmu. Utamakan dirimu sendiri terlebih dahulu, itu yang terpenting.
                                </p>
                                <p>Tanamkan di dalam diri kamu kalau kebahagiaan kamu tidak bergantung pada kebahagiaan orang lain. Berdamailah dengan diri sendiri. Memaafkan diri sendiri dapat membantu memulihkan rasa bersalah akibat dari codependent. Kemudian, kamu harus mencoba untuk menyeimbangkan antara diri sendiri dan orang lain. Kebutuhan diri sendiri sama pentingnya dengan kebutuhan orang lain. Tegaslah dengan diri sendiri, belajar untuk membela diri sendiri. Codependent menyebabkan diri kita terasa hilang tidak memiliki arah, maka dari itu kita harus mulai mengenal diri sendiri, mulai secara pelan-pelan untuk menemukan diri sendiri.</p>
                                <p>Jangan pikirkan setiap detail perubahan yang akan kamu lakukan demi bertahan untuk menghadapi ini, semuanya akan terasa lebih sulit dan melelahkan. Cobalah untuk menjalani secara perlahan dan mulai dari langkah kecil. Jika kamu membutuhkan bantuan profesional, segeralah mencari bantuan tersebut, kamu akan dibantu menghadapi dan mengatasi ini semua. Saat masa pemulihan dari codependent, perlahan kamu akan menemukan diri kamu kembali dan lebih percaya diri. Yakini diri bahwa kita bisa melewati ini semua, segalanya dimulai dari diri sendiri.</p>
                            </li>
                        </ul>

                        <h6 class="space"> Daftar Pustaka :</h6>

                        <h6> Anderson, S. C. (1994). A critical analysis of the concept of codependency.<i> Social work, 39</i>(6), 677-685. http://lib.ui.ac.id/naskahringkas/2016-05/S57123-Tiara%20Priscarani https://dictionary.apa.org/gaslight</h6>
                        <h6>
                            https://www.alodokter.com/mengenal-codependent-relationship-salah-satu-hubungan-tidak-sehat</h6>
                        <h6>
                            https://www.psychologytoday.com/intl/blog/conquering-codependency/202010/how-conquer-codependency
                        </h6>
                        <h6>
                            https://www.psychologytoday.com/intl/blog/presence-mind/201307/are-you-in-codependent-relationship
                        </h6>
                        <h6>
                            Julianto, V., Cahayani, R. A., Sukmawati, S., & Aji, E. S. R. (2020). Hubungan antara harapan dan harga diri terhadap kebahagiaan pada orang yang mengalami toxic relationship dengan kesehatan psikologis. <i> Jurnal Psikologi Integratif, 8</i>(1), 103-115.
                        </h6>
                        <h6>
                            Marks, A. D., Blore, R. L., Hine, D. W., & Dear, G. E. (2012). Development and validation of a revised measure of codependency. <i>Australian Journal of Psychology, 64</i>(3), 119-127.
                        </h6>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 text-md-left text-center">
                        <h4>Artikel Lainnya</h4>
                        <hr class="garis-judul">
                        <a class="artikel-link" href="artikel1.php">Lingkungan, Konflik Orangtua-Anak, dan Masalah Emosional sebagai Penyebab Permasalahan Mental pada Anak</a>
                        <hr>
                        <a class="artikel-link" href="artikel2.php">Kenali Karakteristik Codependent dalam Toxic Relationship</a>
                        <hr>
                        <a class="artikel-link" href="artikel3.php">Menjaga Kesehatan Mental Orang Tua dalam Membangun Pola Asuh yang Sehat</a>
                        <hr>

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