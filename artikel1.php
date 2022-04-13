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
                        <h2>Lingkungan, Konflik Orangtua-Anak, dan Masalah Emosional sebagai Penyebab Permasalahan Mental pada Anak</h2>
                        <h6>Oleh : Clarita Andreane</h6>
                        <hr>
                        <img src="img/artikel/each/artikel1.jpg" alt="Hero Image" width="60%">
                        <!-- <a href="http://www.freepik.com">Designed by stories / Freepik</a> -->
                        <p>
                            Pertumbuhan dan perkembangan adalah fase penting dalam kehidupan individu yang mulai berlangsung sejak dari lahir. Anak-anak tumbuh dengan sangat cepat dan secara konsisten mengalami perubahan pada kemampuan sosial, emosional, dan mental. Dalam proses pertumbuhan ini, terdapat periode sensitif, yaitu waktu di mana anak dengan mudah terpengaruh oleh hal positif atau negatif dari lingkungan. Tanpa pengasuhan yang konsisten, anak akan mengembangkan permasalahan dalam aspek kepercayaan dengan orang lain sehingga jika hal ini tidak diperbaiki, anak akan mengembangkan permasalahan mental yang akan berlanjut hingga dewasa. Tanpa kasih sayang dan pengasuhan yang tepat, anak akan tumbuh dewasa dengan membawa luka dari masa kecil mereka.</p>
                        <p>
                            Terdapat beberapa permasalahan mental yang terjadi pada anak, salah satu penyebabnya adalah permasalahan lingkungan yaitu kemiskinan, pelecehan anak, penelantaran anak, dan kekerasan pada anak. Kemiskinan dan permasalahan mental pada anak saling berhubungan. Di usia 5 tahun, anak dengan kondisi ekonomi menengah ke bawah cenderung memiliki IQ yang lebih rendah dan menunjukkan tingkat kecemasan, ketidakbahagiaan, dan ketakutan yang tinggi. Anak yang tinggal di lingkungan tidak layak huni, kemungkinan berisiko mengalami kelaparan, permasalahan perilaku, keterlambatan perkembangan, keterlambatan bicara, gangguan tidur, gangguan atensi, penarikan diri, agresi, permasalahan dalam interaksi sosial dan interaksi dengan teman sebayanya. Umumnya, bantuan yang dapat diberikan adalah dengan memahami kondisi anak beserta keluarga mereka, melakukan komunikasi yang baik, dan tidak bersikap menghakimi (non judgemental). Secara spesifik, para penyedia layanan kesehatan mental yang menangani klien dengan kemiskinan dapat melakukan terapi sebagai berikut:</p>

                        <ol class="list">
                            <li>
                                <p>Penyedia layanan mampu memahami anak tuna wisma mengenai kondisi dan perasaan mereka. Penyedia layanan juga memberikan sikap positif, berkomunikasi dengan baik dan menghormati para anak.</p>
                            </li>
                            <li>
                                <p>Penyedia layanan dapat menanyakan terkait beberapa informasi dengan memulai pertanyaan sederhana dan konkrit yang tentunya juga memperhatikan kerahasiaan informasi. Penyedia layanan sebaiknya juga menunda bertanya tentang pekerjaan, alamat, kerabat terdekat, tingkat pendidikan sampai anak terlihat nyaman dengan wawancara yang dilakukan.</p>
                            </li>
                            <li>
                                <p>Penyedia layanan perlu menguasai mengenai pemeriksaan kesehatan pada anak seperti adanya tanda-tanda malnutrisi, adanya kekerasan dan penelantaran.</p>
                            </li>
                            <li>
                                <p>Di akhir sesi, penyedia layanan perlu menanyakan beberapa pertanyaan, seperti apakah mereka mengerti apa masalah mereka? Bagaimana mereka akan mendapatkan pengobatan lebih lanjut? Dan di mana mereka akan tidur?
                                    Penyedia layanan juga membantu klien untuk membuat janji dan menuliskan instruksi apa saja yang perlu klien lakukan di masa terapi ini.
                                </p>
                            </li>
                        </ol>
                        <p>Masalah pada lingkungan memiliki dampak yang signifikan pada kesehatan mental anak seperti kekerasan dan penelantaran pada anak. Kekerasan didefinisikan sebagai melukai atau menganiaya orang lain. Pengabaian atau penelantaran adalah tindakan tidak memenuhi kebutuhan dasar anak seperti makanan, pakaian, tempat tinggal, cinta, dan kepemilikan. Kekerasan yang terjadi dapat berupa verbal dan non verbal. Kekerasan non verbal atau fisik dapat dilihat dari luka di tubuh anak yang dapat berupa memar, cedera kepala, cedera perut, dan tubuh yang kurus seperti tidak terawat. Kekerasan seksual adalah ditemukannya aktivitas seksual yang tidak pantas. Kekerasan emosional atau psikologis seperti perilaku mengikis harga diri anak-anak melalui penolakan, kritik, isolasi, atau terorisme.
                        </p>
                        <p>Penganiayaan dan penelantaran yang dialami anak-anak memiliki efek jangka panjang seperti gangguan kecemasan akut dan depresi ketika dewasa. Orang tua yang melakukan penganiayaan dan penelantaran pada anak disebabkan beberapa faktor antara lain isolasi sosial yang dialami orang tua, pengasuhan anak yang dilakukan di usia muda, sulitnya mengontrol impuls agresif, dan orang tua yang stres. Anak yang kerap menjadi korban dalam kekerasan adalah anak-anak yang tidak diinginkan atau anak yang berkebutuhan khusus (disable). Penelitian menemukan bahwa keluarga atau orang tua yang stres adalah faktor yang secara signifikan menjadi penyebab penganiayaan terutama kekerasan fisik dan pengabaian yang kronis. Penyedia layanan kesehatan mental diharapkan menyadari permasalahan sedini mungkin agar dapat merujuk keluarga dan mencegah terjadinya kekerasan dan pengabaian. Ketika membantu korban kekerasan, penyedia layanan sebaiknya juga menyadari perasaan diri mereka sendiri terhadap kekerasan tersebut agar dapat bersikap objektif dan suportif dalam menghadapi situasi tersebut. </p>

                        <ul>
                            <li>
                                <h5>Konflik Orangtua dan Anak</h5>
                                <p>Konflik orangtua dan anak dapat disebabkan beberapa faktor antara lain kebutuhan yang tidak dapat dipenuhi oleh orangtua. Pengalaman masa lalu orang tua, gangguan psikiatris, dan gangguan perilaku yang dimiliki orang tua merupakan beberapa faktor yang dapat mencetuskan konflik dengan anak. Selain itu, kemungkinan seperti kehamilan yang tidak diinginkan atau anak yang tidak responsif memperburuk keadaan sehingga menyebabkan anak terkesan sulit diatur, berkebutuhan khusus, dan mengecewakan. Hal ini disebut dengan primary caregiver dysfunction yang dikarakteristikkan dengan gangguan makan dan tidur, keterlambatan perkembangan, memiliki tanda-tanda kurangnya perawatan fisik, seringnya melakukan kunjungan ke dokter dan kekhawatiran orang tua yang berlebihan. Pengobatan untuk masalah ini berfokus pada memberi dukungan beserta mengedukasi orang tua dan menolong mereka mengembangkan keterampilan perawatan anak secara lebih efektif dan benar.</p>
                            </li>
                            <li>
                                <h5>Gangguan Kecemasan</h5>
                                <p>Masalah emosional dapat terjadi ketika anak tidak dapat menangani permasalahannya. Kecemasan adalah perasaan tidak nyaman yang muncul sebagai respons terhadap suatu ancaman. Mayoritas anak mengalami ketakutan dan kecemasan seiring pertumbuhannya. Salah satu kecemasan yang paling sering terjadi pada bayi dan balita adalah separation anxiety yaitu kecemasan akan terpisah dari orang tua mereka. Kecemasan ini akan berkurang seiring anak menyertakan orang lain di dunianya. Saat anak berumur 4 tahun mengalami separation anxiety yang berlangsung selama lebih dari seminggu, maka kemungkinan anak memiliki gangguan kecemasan dan mengarah pada perilaku OCD (Obsessive Compulsive Disorder). Di samping itu, terdapat kecemasan yang berhubungan dengan sekolah disebut dengan school avoidance atau menghindar untuk sekolah. Perilaku ketika anak menghindari pergi ke sekolah dapat dikarenakan oleh separation anxiety, anak menolak untuk meninggalkan rumah, social phobia, ketakutan untuk dipermalukan atau diejek di sekolah, atau aspek di sekolah yang membuat anak takut school phobia. Tujuan utama dari pengobatan atau bantuan yang dapat dilakukan adalah membantu anak untuk mengidentifikasi asal dari kecemasan tersebut. Kemudian, anak didampingi dalam menghadapi dan mengatasi kecemasan tersebut agar mereka dapat kembali bersekolah. Seringkali, penyedia layanan kesehatan bekerja sama dengan pihak sekolah dan orang tua untuk mengembangkan rencana dalam rangka mengembalikan anak ke sekolah dengan cara yang mendukung. Serangan kecemasan pada anak-anak akan berkurang apabila mereka menerima kepastian dan dukungan emosional.
                                </p>
                            </li>
                            <li>
                                <h5>Depresi</h5>
                                <p>Masalah mood seperti depresi juga dapat terjadi pada anak. Depresi menggambarkan gejala, keadaan emosi, dan sindrom klinis. Gejala depresi pada anak sering kali tidak terdeteksi sehingga terlambat untuk diberi penanganan. Anak dengan orang tua yang depresi termasuk anak yang rentan mengalami depresi. Penelitian menunjukkan bahwa depresi muncul dari keadaan ketidakbahagiaan yang mengganggu kesenangan atau produktivitas. Anak yang depresi tidak lagi tertarik dengan kegiatan yang sebelumnya kerap mereka lakukan, mengkritik diri sendiri, dan pesimis atau putus asa tentang masa depan (Hazel, 2002 dalam Valfre, 2017). Anak usia sekolah menunjukkan depresinya dengan melakukan perusakan atau gagal di bidang akademik dan remaja menunjukkannya dengan menarik diri. Pengobatan atau perawatan dapat dilakukan dengan tujuan untuk meredakan gejala ketidaknyamanan pada anak dan membantu orang-orang di lingkungannya untuk menanggapi kebutuhan anak. Intervensi terapeutik berfokus pada pengurangan masalah yang menyebabkan depresi dan memberikan dukungan emosional kepada anak untuk mengatasinya secara efektif.</p>
                            </li>
                            <li>
                                <h5>Gangguan Somatoform</h5>
                                <p>Gangguan somatoform adalah gangguan di mana anak memiliki gejala penyakit tanpa penyebab fisik yang terlihat. Individu merasakan sakit, namun dalam pemeriksaan medis tidak terdeteksi penyakitnya, sehingga disimpulkan bahwa sakit yang dirasakan disebabkan oleh kondisi psikologis yang sedang tidak seimbang. Pada anak, mereka sering mengeluh sakit kepala, sakit perut, atau nyeri. Gangguan ini banyak dialami oleh anak usia sekolah sehingga dianggap gangguan ini dikarenakan stres, kecemasan atau terdapat konflik yang sulit terdeteksi. Sehingga jika intensitas stres berkurang maka anak kembali sehat. Ketika anak sedang mengalami gangguan ini, anak perlu dipahami dan diberikan keyakinan.

                                </p>
                            </li>
                            <li>
                                <h5>Post Traumatic Stress Disorder</h5>
                                <p>Ketika anak secara berulang terpapar perilaku kekerasan, anak dapat mengalami gangguan Post Traumatic Stress Disorder. Post Traumatic Stress Disorder atau PTSD yang biasanya muncul dikarenakan adanya peristiwa traumatis yang melibatkan cedera dan ancaman pada anak. Contohnya ketika anak melihat sendiri peristiwa kebakaran atau penembakan. Dalam kondisi ini, anak akan merasakan ketakutan, rasa tak tertolong, horor, marah, rasa bersalah, dan rasa malu yang intens. Anak juga menjadi kurang tertarik dengan aktivitas yang biasa mereka lakukan, dan menarik diri dari orang lain. Peristiwa traumatis itu akan selalu teringat atau anak akan mengalami kilas balik (flashback) secara berulang dan anak akan berusaha untuk menghindari apapun yang berhubungan atau yang dapat mengingatkannya dengan peristiwa traumatis itu. Orang, tempat, aktivitas, objek atau situasi adalah hal-hal yang dapat mengingatkan anak dengan peristiwa traumatis. Seiring berjalannya waktu, peristiwa traumatis itu akan menjadi mimpi buruk, teror, dan ancaman untuk anak. Anak juga menjadi mudah tersinggung, mudah marah, berperilaku ceroboh, mencelakakan diri sendiri, mudah terkejut dan mengalami kesulitan untuk berkonsentrasi atau tidur. Keluhan somatik juga dapat hadir seperti sakit perut. Perawatan anak dengan PTSD akan berfokus pada pengenalan pada gangguannya sedini mungkin dan memberikan dukungan secara emosional.

                                </p>
                            </li>
                        </ul>
                        <p>Dalam hal ini dapat disimpulkan bahwa terdapat setidaknya dua faktor yang menjadi penyebab atau faktor seorang anak mengalami gangguan pada kesehatan mentalnya. Faktor yang mendasari gangguan ini tentu dapat dihindari dengan memberikan perhatian, pengertian, kasih sayang, dan menghindari anak terpapar pada peristiwa-peristiwa yang tidak seharusnya dialami pada usia perkembangan. Melalui tanda atau gejala yang telah dijelaskan, diharapkan orang tua atau pengasuh anak dapat menyadari sedini mungkin kesulitan atau masalah yang dihadapi anak, sehingga dapat memberikan pertolongan tepat waktu. Melalui intervensi dan penyebab yang telah dijelaskan pula, diharapkan anak akan mendapatkan lingkungan hidup yang lebih sehat, baik di rumah saat bersama orang tua dan saudara kandung, maupun dengan lingkungan bermain atau lingkungan sosial anak.
                        </p>
                        <h6 class="space"> Daftar Pustaka :</h6>
                        <h6>Valfre, M. M. (2017). <i> Foundation of mental health care (6th ed.).</i> St. Louis: Elsevier
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