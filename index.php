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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
	<link rel='stylesheet' href='https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
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
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
										<a class="nav-link" href="index.php">Beranda</a>
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
				<div class="section jumbotron-section">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-left text-center">
								<h1 class="font-weight-600">Ruang Berproses</h1>
								<p>Temukan ruang untuk berproses menuju versi terbaikmu dengan berbagai pilihan layanan dan program dari Ruang Berproses. Kami siap hadir memberikan layanan terbaik untuk memenuhi kebutuhan kesehatan mental kamu.</p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-12">
								<center><img class="img-beranda" src="img/hero/hero-img.png" alt="Hero Image" width="90%"></center>
							</div>
						</div>
						<div class="row text-center btn-margin">
							<div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
								<a href="layanan.php" class="jumbotron-cta">Layanan RB</a>
							</div>
							<div class=" col-lg-6 col-md-6 col-sm-6 col-12 m-atas">
								<a href="program.php" class="jumbotron-cta">Program RB</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section usp-section">
			<div class="container">
				<h2 class="text-center font-weight-600">Mengapa Harus Ruang Berproses?</h2>
				<div class="row mt-5">
					<div class="col-md col-12 usp-item ">
						<img src="img/usp-images/usp-1.jpg" alt="Privasi Terjamin">
						<!-- <a href="http://www.freepik.com">Designed by pch.vector / Freepik</a> -->
						<h3 class="mt-2">Privasi Terjamin</h3>
						<p>Kamu tidak perlu khawatir karena privasi kamu dijamin kerahasiaannya oleh kami.</p>
					</div>
					<div class="col-md col-12 usp-item">
						<img src="img/usp-images/usp-2.jpg" alt="Nyaman">
						<!-- <a href="http://www.freepik.com">Designed by pch.vector / Freepik</a> -->
						<h3 class="mt-2">Nyaman</h3>
						<p>Kamu bebas bercerita kapanpun dan dimanapun dengan nyaman tanpa perlu takut dihakimi.</p>
					</div>
					<div class="col-md col-12 usp-item">
						<img src="img/usp-images/usp-3.jpg" alt="Terjangkau">
						<!-- <a href="http://www.freepik.com">Designed by pch.vector / Freepik</a> -->
						<h3 class="mt-2">Terjangkau</h3>
						<p>Kamu akan mendapatkan penawaran menarik dari berbagao pilihan layanan yang kami miliki</p>
					</div>
					<div class="col-md col-12 usp-item">
						<img src="img/usp-images/usp-4.jpg" alt="Professional">
						<!-- <a href="http://www.freepik.com">Designed by pch.vector / Freepik</a> -->
						<h3 class="mt-2">Profesional</h3>
						<p>Kamu akan dilayani oleh tenaga profesional, bersertifikasi, dan terlatih dari kami.</p>
					</div>
				</div>
			</div>
		</div>
		<section id="daftar">
			<div class="section alur-pendaftaran">
				<div class="container">
					<h2 class="text-center font-weight-600">Alur Pendaftaran</h2>
					<div class="row row-cols-1 row-cols-md-3 mt-2">
						<div class="col-md-4 mb-4 mt-3">
							<img src="img/alur-pendaftaran/number1.png" class="card-img-top mx-auto" alt="Number 1">
							<div class="card mt-3">
								<div class="card-body">
									<h5 class="card-title">Baca info terkait layanan/program Ruang Berproses</h5>
									<p class="card-text">Kamu bisa dapatkan info terkait program/layanan Ruang Berproses via sosmed Ruang Berproses (IG, Tiktok, Twitter, FB) atau website RB.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4 mt-3">
							<img src="img/alur-pendaftaran/number2.png" class="card-img-top mx-auto" alt="Number 2">
							<div class="card mt-3">
								<div class="card-body">
									<h5 class="card-title">Butuh saran/penjelasan lebih lanjut? Kontak kami melalui 081573499529 atau 087719661951</h5>
									<p class="card-text">Kamu bisa dapatkan info terkait program/layanan Ruang Berproses via sosmed Ruang Berproses (IG, Tiktok, Twitter, FB) atau website RB.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4 mt-3">
							<img src="img/alur-pendaftaran/number3.png" class="card-img-top mx-auto" alt="Number 3">
							<div class="card mt-3">
								<div class="card-body">
									<h5 class="card-title">Pilih layanan/program yang mau kamu ikuti</h5>
									<p class="card-text">Daftarkan dirimu via website atau sosmed Ruang Berproses (linktr.ruangberproses)</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4 mt-3">
							<img src="img/alur-pendaftaran/number4.png" class="card-img-top mx-auto" alt="Number 4">
							<div class="card mt-3">
								<div class="card-body">
									<h5 class="card-title">Isi formulir pendaftaran</h5>
									<p class="card-text">Isi data diri dan jawab beberapa pertanyaan secara lengkap.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4 mt-3">
							<img src="img/alur-pendaftaran/number5.png" class="card-img-top mx-auto" alt="Number 5">
							<div class="card mt-3">
								<div class="card-body">
									<h5 class="card-title">Untuk layanan/program yang berbayar, pembayaran dapat dilakukan via BNI, BCA, Jenius, dan OVO</h5>
									<p class="card-text">Unggah bukti pembayaran di laman formulir pendaftaran</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4 mt-3">
							<img src="img/alur-pendaftaran/number6.png" class="card-img-top mx-auto" alt="Number 6">
							<div class="card mt-3">
								<div class="card-body">
									<h5 class="card-title">Selamat menikmati layanan/program Ruang Berproses</h5>
									<p class="card-text">Mari berproses menuju versi terbaikmu bersama layanan/program dari Ruang Berproses.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="section layanan">
			<div class="container">
				<h2 class="text-center font-weight-600">Layanan Ruang Berproses</h2>
				<div class="row mt-5">
					<div class="card-deck text-center text-lg-left col-sm-12">
						<div class="card border-0 col-sm-12  my-auto">
							<div class="card-body">
								<h4 class="card-title">Layanan RB</h4>
								<p class="card-text">Mari berproses untuk memaksimalkan potensi diri kamu dengan berbagai pilihan layanan kesehatan mental dari Ruang Berproses.</p>
								<a href="layanan.php" class="btn btn-primary">Selengkapnya</a>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Virtual Support Group</h5>
									<p class="card-text">Layanan konseling online dengan membentuk satu kelompok dukungan terkait isu kesehatan mental yang serupa (terdiri dari 3-5 orang). Difasilitasi oleh seorang fasilitator pendamping yang telah lulus pelatihan serta di bawah supervisi tenaga psikolog profesional.</p>
							</div>
							<img class="card-img-bottom" src="img/layanan/vsp.jpg" alt="Card image cap">
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Virtual Peer Counseling</h5>
									<p class="card-text">Layanan konseling online dengan peer counselor yang telah kami latih. Menangani kasus kondisi kesehatan mental non klinis. Layanan ini free tanpa dikenakan biaya.</p>
							</div>
							<img class="card-img-bottom" src="img/layanan/vpc.jpg" alt="Card image cap">
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Counseling Profesional</h5>
									<p class="card-text">Layanan konseling online dengan associate psikolog. Kamu dapat berkonsultasi dengan Psikolog profesional untuk memahami dan mengetahui permasalahan yang sedang dialami, serta mendapatkan penanganan yang terbaik.</p>
							</div>
							<img class="card-img-bottom" src="img/layanan/cp.jpg" alt="Card image cap">
							<!-- <a href="http://www.freepik.com">Designed by pch.vector / Freepik</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section program">
			<div class="container">
				<h2 class="text-center font-weight-600">Program Ruang Berproses</h2>
				<div class="row mt-5">
					<div class="card-deck text-center text-lg-left col-sm-12">
						<div class="card border-0 col-sm-12 my-auto">
							<div class="card-body">
								<h4 class="card-title">Program RB</h5>
									<p class="card-text">Tambah wawasan dan pengetahuan kamu tentang isu kesehatan mental dengan mengikuti berbagai pilihan program dari Ruang Berproses.</p>
									<a href="program.php" class="btn btn-primary">Selengkapnya</a>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Webinar Psytalk</h5>
									<p class="card-text">Membahas topik-topik menarik seputar isu kesehatan mental yang akan dibawakan oleh pembicara profesional, sebagai sarana edukasi mengenai kesehatan mental bagi kamu.</p>
							</div>
							<img class="card-img-bottom" src="img/program/psytalk.jpg" alt="Card image cap">
							<!-- <a href="http://www.freepik.com">Designed by stories / Freepik</a> -->
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Kelas Berproses</h5>
									<p class="card-text">Kelas berproses memadukan materi edukasi terkait kesehatan mental dengan praktek yang langsung dipandu oleh psikolog profesional.</p>
							</div>
							<img class="card-img-bottom" src="img/program/KB.jpg" alt="Card image cap">
						</div>
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">IG Live</h5>
									<p class="card-text">Mengangkat tema, permasalahan atau topik yang sedang hangat dibicarakan dan menjadi keresahan pada masyarakat melalui fitur instagram live, bersama narasumber ahli dalam bidangnya.</p>
							</div>
							<img class="card-img-bottom" src="img/program/ig_live.jpg" alt="Card image cap">
						</div>
					</div>
				</div>
			</div>
		</div>

					<!-- <section class="testimonials">
			<div class="container">
				<h2 class="text-center font-weight-600">Testimoni</h2>
				<div class="wrapper">
					<div class="row">
						<div class="col-sm-12">
							<div id="testimonials-list" class="owl-carousel">
								<div class="item">
									<div class="shadow-effect">
										<img class="imgPlaceholder" src="img/user.png" alt="">
										<p>"Pembicaranya asik dan moderatornya juga keren. Disetiap pembicara selesai menjawab pertanyaan peserta, moderator selalu menyimpulkan jawaban pembicara"</p>
										<p>-R.A.B (21 tahun, Mahasiswa psikologi)</p>
									</div>
									<div class="testimonial-name">Psytalk43</div>
								</div>

								<div class="item">
									<div class="shadow-effect">
										<img class="imgPlaceholder" src="img/user.png" alt="">
										<p>"Kesan webinar sangat baik. Saya mendapat wawasan lebih luas dan mendalam mengenai journaling serta manfaatnya secara spesifik terhadap kesehatan mental, karena saya belum pernah mendalami mengenai journaling"</p>
										<p>-S.E.A (42 tahun, Konselor sekolah)</p>
									</div>
									<div class="testimonial-name"> Kelas Berproses 1</div>
								</div>

								<div class="item">
									<div class="shadow-effect">
										<img class="imgPlaceholder" src="img/user.png" alt="">
										<p>"Seru bangetttt menjadi pengalaman dalam hidup saya karena dengan adanya sesi ini saya dapat bercerita apa yang dialami oleh saya sehingga saya mendapatkan kesempatan untuk bercerita pada sesi ini"</p>
										<p>-M</p>
									</div>
									<div class="testimonial-name">Support Group</div>
								</div>

								<div class="item">
									<div class="shadow-effect">
										<img class="imgPlaceholder" src="img/user.png" alt="">
										<p>"Awalnya saya merasa takut dan ragu untuk bercerita pada orang lain. Namun setelah saya melakukan sesi konseling saya merasa lega, nyaman, dan seperti menemukan hal yang saya cari selama ini. Bukan sekedar omongan motivasi melainkan ilmu dan solusi."</p>
										<p>-S</p>
									</div>
									<div class="testimonial-name">Peer Counseling</div>
								</div>

								<div class="item">
									<div class="shadow-effect">
										<img class="imgPlaceholder" src="img/user.png" alt="">
										<p>"Menurutku gak terlalu mahal dan Psikolog RB yang konseling aku waktu itu juga baik & bisa menghangatkan suasana, ngga canggung juga, yang jelas aku bisa mengatasi masalahku."</p>
										<p>-N</p>
									</div>
									<div class="testimonial-name">Counseling Profesional</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section> -->

		
		<section class="testimonials">
			<div class="container">
				<h2 class="text-center font-weight-600">Testimoni</h2>
				<div class="wrapper">
					<div class="row">
						<div class="col-sm-12">
							<div id="testimonials-list" class="owl-carousel">
								<?php
								include "admin/testimoni/koneksi.php";
								//tampilkan data
								$sql = "SELECT * FROM testimoni";
								$result = $conn->query($sql);
								?>
								<?php
								if ($result->num_rows > 0) {
									// output data of each row
									$no = 0;
									while ($row = $result->fetch_assoc()) {
										$no++;
								?>
										<div class="item">

											<div class="shadow-effect">

												<img class="imgPlaceholder" src="img/user.png" alt="">
												<p><?= $row["isi_testi"]; ?></p>
												<p><?= $row["nama"]; ?></p>
											</div>
											<div class="testimonial-name"><?= $row["layanan"]; ?></div>

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
			</div>
		</section>
		
		<div class="section klien">
			<div class="container">
				<h2 style="margin-bottom:70px;" class="text-center font-weight-600">Klien Kami</h2>
				<div class="row text-center">
    				<div class="col-12 col-sm-4 my-auto mt-5"> <img src="img/rsz1.png" alt="" style="max-width: 75%; margin: auto; display:block;">
    				 <h6 style="margin-top:30px; margin-bottom:100px;">St. John's Catholic School</h6>
    				</div>
    				<div class="col-12 col-sm-4 my-auto mt-5"> <img src="img/basuki_grup.jpg" alt="Basuki Grup SVG" style="max-width: 75%; margin: auto; display:block;"> 
    				<h6 style="margin-top:30px; margin-bottom:100px;">Basuki Pratama Engineering</h6>
    				</div>
    				<div class="col-12 col-sm-4 my-auto mt-5"> <img src="img/kelas_harmoni.jpg" alt="Kelas Harmoni SVG" style="max-width: 75%; margin: auto; display:block;">
    				 <h6 style="margin-top:30px; margin-bottom:100px;">Kelas Main Harmoni</h6></div>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>
<script src="js/testimonial.js"></script>

</html>
		