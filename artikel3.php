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
                                        <a class="nav-link" href="index.php">Beranda</a>
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
                        <h2>Menjaga Kesehatan Mental Orang Tua dalam Membangun Pola Asuh yang Sehat</h2>
                        <h6>Oleh : Afni Handayani</h6>
                        <hr>
                        <img src="img/artikel/each/artikel3.jpg" alt="Hero Image" width="80%">
                        <!-- <a href="http://www.freepik.com">Designed by stories / Freepik</a> -->
                        <p>
                            Kesehatan mental merupakan kondisi dari kesejahteraan yang disadari individu, yang di dalamnya terdapat kemampuan-kemampuan untuk mengelola stres kehidupan yang wajar, untuk bekerja secara produktif dan menghasilkan karya serta ikut berperan di komunitasnya. Keluarga merupakan bagian mikro ekosistem dari tatanan tumbuh kembang anak. Keluarga nantinya mengajarkan bagaimana anak merasakan empati dan beradaptasi dengan masyarakat yang merupakan makro ekosistem.
                        </p>
                        <p>
                            Pertumbuhan dan perkembangan anak dapat dipengaruhi oleh pola asuh orang tua, baik ayah maupun ibu yang memiliki peran penting dalam praktik pengasuhan sehingga terjalin bonding atau kemelekatan yang berdampak pada kesehatan mental anak-anak.</p>
                        <p>Dalam mengatur pola asuh, salah satu strategi dalam membangun interaksi adalah dengan melakukan permainan. Orang tua bisa berpartisipasi aktif dalam permainan, sehingga anak bisa merasakan kasih sayang, kenyamanan dan rasa aman sehingga kondisi tersebut bisa meningkatkan kualitas kesehatan mental anak.</p>
                        <p>Orang tua berkewajiban dalam memberikan pengasuhan yang positif serta bisa membimbing dan mengarahkan anak-anak untuk menjadi manusia yang kompeten. 2Dalam membangun suatu hubungan yang baik antara orang tua dan anak tentu saja sangat membutuhkan kesehatan mental yang baik untuk meningkatkan kualitas hubungan.</p>
                        <p>Makna kesehatan mental mempunyai sifat-sifat yang harmonis (serasi) dan memperlihatkan semua segi-segi dalam penghidupan manusia dan dalam hubungannya dengan manusia lain.</p>
                        <p>Makin hari di Indonesia ini, di tahun 2020 ini makin begitu besarnya orang tua menitipkan harapan kepada anak-anak mereka. Apakah salah? Tentu saja tidak, yang kurang tepat adalah ketika semua harapan tanpa sadar menjadi suatu paksaan.</p>
                        <p>Semakin merasa menjadi orang tua, semakin besar ego yang harus diredam. Semakin merasa menjadi orang tua seharusnya semakin sering self talk dilakukan. Seberapa banyak orang tua yang berani melihat ke dalam diri. Seberapa banyak orang tua yang berani mengakui kesalahan dan meminta maaf kepada anaknya yang masih balita. Seberapa banyak orang tua yang berkaca dan bercermin serta bertanya ke diri sendiri, siapakah saya?</p>
                        <p>Luka-luka batin masa kecil yang akhirnya tanpa sadar terbawa hingga menjadi orang tua, kembali menjadi rangkaian melingkar dalam pola asuh. Pengetahuan dan informasi yang amat sangat minim tentang kesehatan mental di Indonesia salah satu penyebab banyaknya masyarakat yang tidak peduli dengan kesehatan mental dirinya.</p>
                        <p>Pola pengasuhan jika dimulai dengan orang tua yang menyadari diri tentang mentalnya yang baik, jiwanya yang sehat akan menjadikan pola asuh menjadi menyenangkan, saling menghargai, saling bisa menjadi pendukung yang baik. Anak-anak tidak akan selamanya menjadi anak kecil karena mereka akan berkembang dan bertumbuh seiring usianya. Orang tua pun harus siap mendampingi pertumbuhannya, selayaknya sedang merawat bibit tanaman, diberi pupuk yang baik, disiram setiap hari, terkena sinar matahari demi pertumbuhan yang baik.</p>
                        <p>Anak yang sehat secara mental adalah anak yang mampu menghadapi permasalahan-permasalahan di dalam hidupnya. Selain itu, anak dengan kesehatan mental yang baik akan tumbuh menjadi pribadi yang memiliki integritas, selaras dengan jati diri, dan mampu menjalin hubungan yang sehat dengan orang lain.
                        </p>
                        <p>Terutama dalam masa pandemi saat ini, peran orang tua sangat diperlukan untuk mengatasi dan mengelola emosinya dalam mendampingi anak di masa pembelajaran jarak jauh. Sistem belajar secara daring tersebut mengakibatkan terbatasnya ruang sosialisasi sehingga berpotensi menimbulkan kejenuhan. Dalam mengatasi kesehatan mental orang tua harus bisa menangani stres melalui manajemen stres atau perawatan diri. Jika perlu, dapat melakukan kunjungan pada ahli atau profesional yang mampu menangani hal tersebut. </p>
                        <p>Masyarakat juga berperan penting dalam mendukung manajemen stres dengan menghapus stigma negatif bahwa berkonsultasi ke psikolog bukan berarti hal yang memalukan.5 Masih banyak yang menganggap bahwa orang yang berkonsultasi ke psikolog termasuk orang dengan gangguan jiwa, sehingga hal tersebut berdampak kepada mereka yang memang betul-betul butuh pertolongan. Menganggap remeh permasalahan kesehatan mental sehingga kesulitan dalam melakukan perawatan diri dan manajemen stres.</p>
                        <p>Sebagaimana orang tua yang dihadapkan oleh banyak sekali pekerjaan dan tuntutan, setidaknya luangkanlah waktu sejenak untuk kembali melihat ke dalam diri, kenali gejala-gejala lelah secara psikis, jangan sampai berakibat mengganggu kejiwaan dan aktivitas sehari-hari. Beberapa gejala yang bisa dikenali antara lain adalah merasa sedih, bingung dan hilangnya konsentrasi, ketakutan dan khawatir yang berlebihan, perasaan bersalah yang ekstrim, perubahan suasana yang ekstrim, kelelahan yang parah, mengalami masalah tidur, perubahan besar dalam kebiasaan makan serta masih ada beberapa gejala lainnya.</p>
                        <p>Setiap keluarga merawat bibitnya masing-masing, artinya bahwa setiap anak itu berbeda di mana hal ini sebaiknya ditanamkan pada pola pikir para orang tua. Semakin orang tua sadar bahwa kesehatan mental sama pentingnya dengan kesehatan fisik, maka kerentanan anak untuk menjadi anak yang sehat mentalnya semakin terbuka lebar. Semakin pola asuh memperhatikan kesehatan mental dalam setiap polanya, maka kesempatan anak bertumbuh dan berkembang secara sehat fisik dan sehat psikis pun akan semakin besar.</p>
                        <p>Konsentrasi terhadap kesehatan mental orang tua saat ini menjadi penting, semakin banyak informasi yang diberikan kepada orang tua, semoga semakin orang tua faham bahwa mental yang sehat akan menjadikan pola asuh yang sehat pula. Semakin terjaga kesehatan fisik dan mental, maka akan semakin kuat proses tumbuh dan berkembang bersama. Tidak hanya orang tua tapi juga anak-anak.</p>
                        <p>Kesimpulannya adalah bahwa orang tua tidak melulu benar dan orang tua tidak melulu salah, orang tua bukanlah seorang penguasa terhadap jiwa-jiwa anaknya. Berikanlah jiwa dan mental kita sebagai orang tua untuk hening sejenak dari psikis yang tergerus oleh lelahnya pencarian-pencarian yang kadang adalah merupakan ekspektasi orang lain. Belajarlah untuk membahagiakan diri sendiri sebagai orang tua.</p>

                        <h6 class="space"> Daftar Pustaka :</h6>
                        <h6>Wood DL. <i>The importance of play in promoting healthy child development and maintaining strong parent-child bond: focus on children in poverty. American Academy of Pediatrics,</i> 2011;129(1): e204-e214.</h6>
                        <h6>Santrock, John W. <i>Life-span development.</i> 13th ed. Jakarta: Erlangga. 2012.</h6>
                        <h6>Hawari D. <i>Ilmu kedokteran dan kesehatan jiwa.</i> Jakarta: Dana Bhakti Prima Yasa. 1997.</h6>
                        <h6>Dewi A, Amalia J, Sayang Ajeng . M, Maya P, <i>Meningkatkan kesehatan mental dengan membangun hubungan kelekatan antara orang tua dan anak,</i> Jurnal Pengabdian Masyarakat, Vol. III, 2019 hummed.ejournal.unsri.ac.id</h6>
                        <h6>www.tribunnews.com</h6>
                        <h6>www.tirto.id</h6>
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