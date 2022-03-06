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
	<link rel="stylesheet" href="css/layanan.css?v=<?php echo time(); ?>">
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
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
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
				<div class="section jumbotron-section-layanan">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-6 col-md-6 col-sm-6 col-12 text-md-left text-center">
								<img src="img/hero/hero-layanan.png" alt="Hero Image" width="90%">
								<!-- <a href="http://www.freepik.com">Designed by Freepik</a> -->
							</div>
							<div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-left text-center">
								<h1 class="font-weight-600">Layanan RB</h1>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section konseling">
			<div class="container">
				<h2 class="text-center font-weight-600">Apa itu Konseling?</h2>
				<div class="row mt-5 justify-content-between">
					<div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-right text-center">
						<img src="img/layanan/layanan-konseling.jpg" alt="Hero Image" width="90%">
					</div>
					<div class="konseling col-lg-6 col-md-6 col-sm-6 col-12 my-auto text-md-left text-justify">
						<p>Konseling atau penyuluhan adalah proses pemberian bantuan yang dilakukan oleh seorang yang ahli pada bidangnya kepada individu yang mengalami sesuatu masalah yang bermuara pada teratasinya masalah yang dihadapi klien.</p>
						<h3 class="need">Tanda kamu butuh konseling</h3>
						<ul>
							<li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
							<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
							<li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
							<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
							<li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
							<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="section layanan">
			<div class="container">
				<h2 class="text-center font-weight-600">Layanan Ruang Berproses</h2>
				<div class="row mt-5">
					<div class="card-deck text-lg-left text-center">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h3 class="card-title">Virtual Support Group</h5>
									<p class="card-text">Layanan konseling online dengan membentuk satu kelompok dukungan terkait isu kesehatan mental yang serupa (terdiri dari 3-5 orang). Difasilitasi oleh seorang fasilitator pendamping yang telah lulus pelatihan serta di bawah supervisi tenaga psikolog profesional.</p>
							</div>
							<img class="card-img-bottom" src="img/layanan/vsp.jpg" alt="Card image cap">
							<div id="wrapper">
								<a href="index.php" class="btn btn-primary">Daftar</a>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h3 class="card-title">Virtual Peer Counseling</h5>
									<p class="card-text">Layanan konseling online dengan peer counselor yang telah kami latih. Menangani kasus kondisi kesehatan mental non klinis. Layanan ini free tanpa dikenakan biaya.</p>
							</div>
							<img class="card-img-bottom" src="img/layanan/vpc.jpg" alt="Card image cap">
							<div id="wrapper">
								<a href="index.php" class="btn btn-primary">Daftar</a>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h3 class="card-title">Counseling Profesional</h5>
									<p class="card-text">Layanan konseling online dengan associate psikolog. Kamu dapat berkonsultasi dengan Psikolog profesional untuk memahami dan mengetahui permasalahan yang sedang dialami, serta mendapatkan penanganan yang terbaik.</p>
							</div>
							<img class="card-img-bottom" src="img/layanan/cp.jpg" alt="Card image cap">
							<div id="wrapper">
								<!-- <a href="http://www.freepik.com">Designed by pch.vector / Freepik</a> -->
								<a href="index.php" class="btn btn-primary">Daftar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section faq">
			<div class="container">
				<h2 class="text-center font-weight-600">Pertanyaan Sahabat RB</h2>
				<div class="row mt-5 col-md-12">
					<div class="center">
						<button class="accordion">Tak kenal maka tak sayang, boleh dong kak kita kenalan, kakak founder namanya siapa?</button>
						<div class="panel">
							<p>Halo, aku Yohana Sondang Activa Hutabarat, panggil saja Kak Yo atau Yohana. Aku merupakan Founder dari Ruang Berproses.</p>
						</div>

						<button class="accordion">Kalau boleh tahu nih kak, pada bulan dan tahun apa Ruang Berproses berdiri?</button>
						<div class="panel">
							<p>Secara officially Ruang Berproses didirikan pada bulan Juli tahun 2020, jadi bulan Juli adalah Anniversary dari Ruang Berproses.</p>
						</div>

						<button class="accordion">Apa yang membuat Kak Yo memutuskan membangun Ruang Berproses?</button>
						<div class="panel">
							<p>RB itu adalah hasil dari kondisi yang tidak baik-baik saja secara mental yang aku alami di awal-awal pandemi.<br>Berangkat dari situ, aku memberanikan diri membuat webinar dengan judul 'It's okay not to be okay' dan mengundang temanku seorang Psikolog yang berada di Thailand, Priska Sinaga. Dari webinar tersebut mendapatkan Banyak feedback positif dari peserta, dan request untuk sesi lanjutan.<br>Ketagihan selenggarain webinar sendiri, berlanjut deh sampai Tiga sesi webinar yang aku beri nama Psytalk, artinya bicara tentang psikis. Jadi, itu asal dari program pertama RB yaitu webinar PSYTALK.</p>
						</div>

						<button class="accordion">Wah menarik sekali ya kak! Mungkin bisa di sharing nih, apa yang kakak harapkan dari terbentuknya Ruang Berproses?</button>
						<div class="panel">
							<p>Jadi, aku hanya ingin teman-teman diluaran sana memiliki wadah untuk mereka berproses lebih dalam untuk melihat dirinya dan kondisi kesehatan mentalnya. Ya berharapnya bahwa RB menjadi salah satu wadah aman dan nyaman tersebut.</p>
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

</html>