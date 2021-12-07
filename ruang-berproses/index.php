 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ruang Berproses</title>
	<link rel="icon" href="img/icon.png" type="image/png" sizes="16x16">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Tooplate">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/tooplate-style.css?v=<?php echo time(); ?>">

</head>
<style type="text/css">
	body {
		/*background: black;*/
	}
</style>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

	<!-- PRE LOADER -->
	<!--  <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>  
        </div>
    </section> -->

	<!-- HEADER -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<p><b>Selamat datang di Ruang Berproses</b></p>
				</div>
				<!--	<div class="col-md-8 col-sm-7 text-align-right">
					<span class="phone-icon"><i class="fa fa-phone"></i><a href="https://wa.me/+6281214560205">+6281214560205</a></span>
					<span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
					<span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="mailto:admin@ruangberproses.id">admin@ruangberproses.id</a></span>
				</div>-->
			</div>
		</div>
	</header>

	<!-- MENU -->
	<section class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>

				<!-- lOGO TEXT HERE -->
				<a href="index.php" class="navbar-brand"><img src="img/logo-new.png" style="width: 100px; height: 35px;"></a>
			</div>

			<!-- MENU LINKS -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#top" class="smoothScroll">Home</a></li>
					<li><a href="#layanan" class="smoothScroll">Layanan RB</a></li>
					<!--<li><a href="#" class="smoothScroll">Mari Bergabung</a></li>-->
					<li><a href="#news" class="smoothScroll">Artikel</a></li>
					<li><a href="about.php" class="smoothScroll">Tentang RB</a></li>
					<li><a href="#contact" class="smoothScroll">Kontak</a></li>

					<?php
						if (!isset($_SESSION["login"])) {
							?>
							<li>
								<a href="pengguna/login.php" class="smoothScroll">Login</a>
							</li>
							<?php
						}        
						else{
							if ($_SESSION["role"] == 1) {
								?>
								<li><a href="admin/dashboard.php">Rekap Admin</a></li><?php 
							}
								?>
								<li><a href="logout.php" class="smoothScroll" >Logout</a></li><?php
						}
                	?>
					
					<!-- <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li> -->
				</ul>
			</div>
		</div>
	</section>

	<!-- HOME -->
	<section id="home" class="slider" data-stellar-caption-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="owl-carousel owl-theme">
					<div class="item item-first">
						<div class="caption">
							<div class="col-md-offset-1 col-md-10">
								<h3>SELALU ADA RUANG UNTUK KAMU BERPROSES MENUJU VERSI TERBAIKMU</h3>
								<h1>Ruang Berproses</h1>
								<a href="about.php" class="section-btn btn btn-default smoothScroll">Meet The Team</a>
							</div>
						</div>
					</div>

					<div class="item item-second">
						<div class="caption">
							<div class="col-md-offset-1 col-md-10">
								<!-- <h3>PSYCHOLOGY, TO THE PEOPLE</h3> -->
								<h1>PSYTALK</h1>
								<a href="pendaftaran/index.html" class="section-btn btn btn-default btn-blue smoothScroll">Register Now</a>
							</div>
						</div>
					</div>

					<div class="item item-third">
						<div class="caption">
							<div class="col-md-offset-1 col-md-10">
								<!-- <h3>READ MORE ARTICLES HERE</h3> -->
								<h1>Kelas Berproses</h1>
								<a href="pendaftaran/kelas_berproses.php" class="section-btn btn btn-default btn-gray smoothScroll">Register Now</a>
							</div>
						</div>
					</div>

					<div class="item item-fourth">
						<div class="caption">
							<div class="col-md-offset-1 col-md-10">
								<h1>Konseling</h1>
								<h3>Yuk, konsultasikan permasalahanmu kepada Ruang Berproses!</h3>
								<a href="pendaftaran/peer_counseling.html" class="section-btn btn btn-default btn-blue smoothScroll">Peer Counseling</a>
								<a href="pendaftaran/counseling_professional.php" class="section-btn btn btn-default btn-blue smoothScroll">Counseling Professional</a>
							</div>
						</div>
					</div>

					<div class="item item-fifth">
						<div class="caption">
							<div class="col-md-offset-1 col-md-10">
								<h1>Support Group</h1>
								<h3>Membutuhkan dukungan terkait permasalahan kehidupan? Layanan Support Group tersedia bagi kamu yang mau berjuang dan saling mendukung terkait permasalahan yang sama dalam kehidupan</h3>
								<a href="pendaftaran/support_group.html" class="section-btn btn btn-default btn-gray smoothScroll">Register Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="layanan">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="about-info">
						<h2 class="wow fadeInUp" data-wow-delay="0.6s" style="text-align: center;">Layanan Ruang Berproses</h2>
						<div class="wow fadeInUp" data-wow-delay="0.8s">
							<p style="text-align: center;">RB berupaya untuk memberikan fasilitas dan pelayanan kepada kamu yang membutuhkan layanan Kesehatan mental sesuai dengan kebutuhan kamu.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- LAYANAN -->
	<div class="container">
		<div class="slide-content slide-display-container">
			<div class="mySlides row" id="layanan_1">
				<img class="col-md-4 col-xs-12 col-sm-6" src="img/virtual-support-group.png">
				<div class="col-md-8 col-xs-12 col-sm-6">
					<h4>Virtual Support Group</h4>
					<p class="exp">Layanan yang kami sediakan berupa kelompok dukungan terkait isu kesehatan mental tertentu. Kelompok dukungan akan diisi oleh 3-5 orang peserta yang akan saling berbagi cerita dan di fasilitasi oleh 1 orang fasilitator pendamping yang telah lulus pelatihan, serta 1 orang fasilitator utama tenaga professional. Layanan ini free tanpa dikenakan biaya sama sekali.</p>
					<a class="btn-register" href="pendaftaran/support_group.html" target="_blank">Daftar Sekarang</a>
				</div>
			</div>
			<div class="mySlides row" id="layanan_2">
				<img class="col-md-4 col-xs-12 col-sm-6" src="img/virtual-peer-counseling.png">
				<div class="col-md-8 col-xs-12 col-sm-6">
					<h4>Virtual Peer Counseling</h4>
					<p class="exp">Layanan ini kami sediakan untuk kamu yang membutuhkan layanan konseling dengan peer counsellor. Konsultasi yang disediakan dapat dilakukan secara text atau video call dengan konselor yang telah kami training untuk menangani kasus kondisi Kesehatan mental non klinis. Layanan ini free tanpa dikenakan biaya sama sekali. </p>
					<a class="btn-register" href="pendaftaran/peer_counseling.html" target="_blank">Daftar Sekarang</a>
					<!--<a class="btn-register" href="https://docs.google.com/forms/d/e/1FAIpQLScuHt3hDo8YZa8YWFJyr3XajO2aH9obWZp0b4AEbgBcGGAebw/viewform">Daftar Sekarang</a>-->
				</div>
			</div>
			<div class="mySlides row" id="layanan_3">
				<img class="col-md-4 col-xs-12 col-sm-6" src="img/counseling-professional.png">
				<div class="col-md-8 col-xs-12 col-sm-6">
					<h4>Konseling dengan Associate Psikolog</h4>
					<p class="exp">Layanan konseling dengan Associate Psikolog bertujuan membantu Sahabat Berproses untuk menyalurkan perasaan atau permasalahan kepada tenaga profesional di bidang psikologi</p>
					<a class="btn-register" href="pendaftaran/counseling_professional.php" target="_blank">Daftar Sekarang</a>
				</div>
			</div>
			<div class="mySlides row" id="layanan_3">
				<h4 class="col-md-12">PSYTALK</h4>
				<div class="col-md-6 col-sm-4 col-xs-12 poster">
					<div data-wow-delay="0.1s">
						<img src="img/psytalk46.jpeg" class="img-responsive" alt="" style="height: 200px; margin: 0 auto;">
					</div>
				</div>
				<div class="col-md-6 col-sm-4 col-xs-12 poster">
					<div data-wow-delay="0.1s">
						<img src="img/psytalk47.jpg" class="img-responsive" alt="" style="height: 200px; margin: 0 auto;">
					</div>
				</div>
				<a class="btn-register" href="pendaftaran/index.html" class="btn btn-info form-control" target="_blank">Daftar Sekarang</a>
				<!--https://bit.ly/PSYTALKMEI-->
			</div>
			<div class="mySlides row" id="layanan_4">
				<h4 class="col-md-12">Kelas Berproses</h4>
				<div class="col-md-12 col-sm-4 col-xs-12 poster">
					<div data-wow-delay="0.1s">
						<img src="img/kb3.png" class="img-responsive" alt="" style="height: 200px; margin: 0 auto;">
					</div><br>
				</div>
				<a class="btn-register" href="pendaftaran/kelas_berproses.php" class="btn btn-info form-control" target="_blank">Daftar Sekarang</a>
			</div>
			<div class="slide-center slide-display-bottommiddle" style="width:100%;">
				<div class="slide-left" onclick="plusDivs(-1)">&#10094;</div>
				<div class="slide-right" onclick="plusDivs(1)">&#10095;</div>
				<span class="slide-badge demo slide-border slide-transparent slide-hover-white" onclick="currentDiv(1)"></span>
				<span class="slide-badge demo slide-border slide-transparent slide-hover-white" onclick="currentDiv(2)"></span>
				<span class="slide-badge demo slide-border slide-transparent slide-hover-white" onclick="currentDiv(3)"></span>
				<span class="slide-badge demo slide-border slide-transparent slide-hover-white" onclick="currentDiv(4)"></span>
				<span class="slide-badge demo slide-border slide-transparent slide-hover-white" onclick="currentDiv(5)"></span>
			</div>
		</div>
	</div>

	<!--<section id="layanan_1">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-md-12 col-sm-12">-->
	<!--					<div class="about-info">-->
	<!--                    	<h3 class="wow fadeInUp" data-wow-delay="0.6s" style="text-align: center;">Virtual Support Group</h3><br>-->
	<!--                     	<div class="wow fadeInUp" data-wow-delay="0.8s">-->
	<!--                      		<p style="text-align: center;">Layanan yang kami sediakan berupa kelompok dukungan terkait isu Kesehatan mental tertentu. Kelompok dukungan akan diisi oleh 5-10 orang peserta yang akan saling berbagi cerita, yang di fasilitasi oleh 1 orang fasilitator pendamping yang telah lulus pelatihan dan juga 1 orang fasilitator utama tenaga professional. Layanan ini free tanpa dikenakan biaya sama sekali.</p>-->
	<!--                      		<p style="text-align: center;">Beberapa kelas yang sedang kami buka adalah</p><br><br>-->
	<!--                      		<div class="row" style="text-align: center;">-->
	<!--                      			<div class="col-md-3"><button class="btn btn-success" disabled>Insecurity</button></div>-->
	<!--                      			<div class="col-md-3"><button class="btn btn-success" disabled>Overthinking</button></div>-->
	<!--                      			<div class="col-md-3"><button class="btn btn-success" disabled>Bullying</button></div>-->
	<!--                      			<div class="col-md-3"><button class="btn btn-success" disabled>Self-Harm</button></div>-->
	<!--                      		</div><br>-->
	<!--                      		<p style="text-align: center;">Bila kamu membutuhkan layanan Support Group sesuai dengan topik yang sudah kami persiapkan, maka kamu dapat mendaftakan dirimu.</p>-->
	<!--                      		<div class="row" style="text-align: center;">-->
	<!--                      			<div class="col-md-12"><a href="https://bit.ly/virtualsupportgroupRB" class="btn btn-info form-control" target="_blank">Daftar Virtual Support Group</a></div>-->
	<!--                      		</div>-->
	<!--                     	</div>-->
	<!--                	</div>-->
	<!--           	</div> -->
	<!--          	</div>-->
	<!--     	</div>-->
	<!--</section>-->

	<!--<section id="layanan_2">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-md-12 col-sm-12">-->
	<!--					<div class="about-info">-->
	<!--                    	<h3 class="wow fadeInUp" data-wow-delay="0.6s" style="text-align: center;">Virtual Peer Counseling</h3><br>-->
	<!--                     	<div class="wow fadeInUp" data-wow-delay="0.8s">-->
	<!--                      		<p style="text-align: center;">Layanan ini kami sediakan untuk kamu yang membutuhkan layanan konseling dengan peer counsellor. Konsultasi yang disediakan dapat dilakukan secara text atau video call dengan konselor yang telah kami training untuk menangani kasus kondisi Kesehatan mental non klinis. Layanan ini free tanpa dikenakan biaya sama sekali.</p>-->
	<!--<p style="text-align: center;">Beberapa kelas yang sedang kami buka adalah</p>-->
	<!--                      		<p style="text-align: center;">Bila kamu membutuhkan layanan peer konseling, maka kamu dapat mendaftarkan dirimu.</p>-->
	<!--                      		<div class="row" style="text-align: center;">-->
	<!--                      			<div class="col-md-12"><a href="https://bit.ly/PendaftaranPCRB" class="btn btn-info form-control" target="_blank">Daftar Virtual Peer Counseling</a></div>-->
	<!--                      		</div>-->
	<!--                     	</div>-->
	<!--                	</div>-->
	<!--           	</div> -->
	<!--          	</div>-->
	<!--     	</div>-->
	<!--</section>-->

	<!--<section id="layanan_3">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-md-12 col-sm-12">-->
	<!--					<div class="about-info">-->
	<!--                    	<h3 class="wow fadeInUp" data-wow-delay="0.6s" style="text-align: center;">Webinar PSYTALK MEI</h3><br>-->
	<!--                     	<div class="wow fadeInUp" data-wow-delay="0.8s">-->
	<!--                     		<div class="col-md-4 col-sm-6">-->
	<!--					        <div class="event wow fadeInUp" data-wow-delay="0.2s">-->
	<!--					            <img src="img/38.png" class="img-responsive" alt="" style="height: 300px; margin: auto;">-->
	<!--				         	</div>-->
	<!--					    </div>-->
	<!--					    <div class="col-md-4 col-sm-6">-->
	<!--					        <div class="event wow fadeInUp" data-wow-delay="0.2s">-->
	<!--					            <img src="img/bundling.png" class="img-responsive" alt="" style="height: 300px; margin: auto;">-->
	<!--				         	</div>-->
	<!--					    </div>-->
	<!--					    <div class="col-md-4 col-sm-6">-->
	<!--					        <div class="event wow fadeInUp" data-wow-delay="0.2s">-->
	<!--					            <img src="img/34.png" class="img-responsive" alt="" style="height: 300px; margin: auto;">-->
	<!--				         	</div><br>-->
	<!--				        </div>-->
	<!--				        <div class="row" style="text-align: center;">-->
	<!--                      			<div class="col-md-12"><a href="https://bit.ly/PSYTALKMEI" class="btn btn-info form-control" target="_blank">Daftar PSYTALK Edisi Mei</a></div>-->
	<!--					    </div>-->
	<!--                     	</div>-->
	<!--                	</div>-->
	<!--           	</div> -->
	<!--          	</div>-->
	<!--     	</div>-->
	<!--</section>-->

	<!-- NEWS -->
	<!--start-->
	<!--<section id="news" data-stellar-background-ratio="2.5">-->
	<!--		<div class="container">-->
	<!--         	<div class="row">-->

	<!--              <div class="col-md-12 col-sm-12">-->
	<!-- SECTION TITLE -->
	<!--               	<div class="section-title wow fadeInUp" data-wow-delay="0.1s">-->
	<!--                    	<h2>Artikel</h2>-->
	<!--               	</div>-->
	<!--              </div>-->
	<!--finish-->

	<!-- <div class="col-md-4 col-sm-6">
                 	<div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                      	<a href="news-detail.html">
                       		<img src="images/news-image1.jpg" class="img-responsive" alt="">
                      	</a>
                      	<div class="news-info">
                           	<span>March 08, 2018</span>
                           	<h3><a href="news-detail.html">About Amazing Technology</a></h3>
                           	<p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                           	<div class="author">
                                <img src="images/author-image.jpg" class="img-responsive" alt="">
                                <div class="author-info">
                                 	<h5>Jeremie Carlson</h5>
                                 	<p>CEO / Founder</p>
                                </div>
                           	</div>
                      	</div>
                 	</div>
                </div>

                <div class="col-md-4 col-sm-6">
                 	<div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                      	<a href="news-detail.html">
                       		<img src="images/news-image2.jpg" class="img-responsive" alt="">
                      	</a>
                      	<div class="news-info">
                               <span>February 20, 2018</span>
                               <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                               <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                           	<div class="author">
                                    <img src="images/author-image.jpg" class="img-responsive" alt="">
                                <div class="author-info">
                                 	<h5>Jason Stewart</h5>
                                 	<p>General Director</p>
                                </div>
                           	</div>
                      	</div>
                 	</div>
                </div>

                <div class="col-md-4 col-sm-6">
                 	<div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                      	<a href="news-detail.html">
                           	<img src="images/news-image3.jpg" class="img-responsive" alt="">
                      	</a>
                      	<div class="news-info">
                           	<span>January 27, 2018</span>
                           	<h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                      	 	<p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                           	<div class="author">
                            	<img src="images/author-image.jpg" class="img-responsive" alt="">
                                <div class="author-info">
                                	<h5>Andrio Abero</h5>
                                 	<p>Online Advertising</p>
                            	</div>
                           	</div>
                      	</div>
                 	</div>
                </div> -->
	</div>
	</div>
	</section>

	<section id="client">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="about-info">
						<h2 class="wow fadeInUp" data-wow-delay="0.6s" style="text-align: center;">Klien Kami</h2>
						<div class="wow fadeInUp" data-wow-delay="0.8s">
							<p style="text-align: center;"></p>
						</div>
					</div>
					<div class="">
						<img src="img/rsz1.png" alt="" style="max-width: 25%; margin: auto; display:block;">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- GOOGLE MAP -->
	<!--<section id="google-map">-->
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
	<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.705836876672!2d106.8219881144843!3d-6.170129095532917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d6aa94d477%3A0xebf3b9d252c86a26!2sIstana%20Merdeka!5e0!3m2!1sen!2sid!4v1615721545196!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->
	<!--</section>           -->


	<!-- FOOTER -->
	<footer id="contact" data-stellar-background-ratio="5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6" style="text-align: center;">
					<div class="footer-thumb">
						<h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
						<p style="text-align:center;">Please get in touch and feel free to contact us by phone, email or our social media. We will be sure to get back to you as soon as possible.</p>
						<div class="contact-info">
							<table align="center">
								<tr>
									<th><i style="margin-right: 20px;" class="fa fa-phone"></i></th>
									<td style="text-align:left;"><a href="https://wa.me/+6287711658794">+6287711658794 (Ruang Berproses)</a><br><a href="https://wa.me/+6281280077254" style="line-height:3em;">+6281280077254 (Hakita)</a></td>
								</tr>
								<!-- <tr>
									<td><br></td>
								</tr> -->
								<tr style="line-height: 3.5em;">
									<th><i style="margin-right: 20px;" class="fa fa-envelope-o"></i></th>
									<td style="text-align:left;"><a href="mailto:admin@ruangberproses.id">admin@ruangberproses.id</a></td>
								</tr>
							</table>
							<!-- <p><i class="fa fa-phone"></i><a href="https://wa.me/+6281214560205">+6281214560205</a></p>
							<p><i class="fa fa-envelope-o"></i><a href="mailto:admin@ruangberproses.id">admin@ruangberproses.id</a></p> -->
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-6" style="text-align: center;">
					<div class="footer-thumb">
						<div class="social-media">
							<div class="opening-hours">
								<h4 class="wow fadeInUp" data-wow-delay="0.4s">Keep in Touch with Us</h4>
								<!-- <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
								<p>Saturday <span>09:00 AM - 08:00 PM</span></p>
								<p>Sunday <span>Closed</span></p> -->
							</div>
							<ul class="social-icon">
								<li><a href="https://facebook.com/RuangBerproses/" class="fa fa-facebook-square" attr="facebook icon"></a></li>
								<li><a href="https://twitter.com/ruangberproses/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.instagram.com/ruangberproses.id/" class="fa fa-instagram"></a></li>
								<li><a href="https://t.me/ruangberproses/" class="fa fa-telegram"></a></li>
								<li><a href="https://www.linkedin.com/company/ruang-berproses/" class="fa fa-linkedin-square"></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 border-top">
					<div class="col-md-11 col-sm-11">
						<div class="copyright-text">
							<p style="text-align: center;">Copyright &copy; 2021 Ruang Berproses. All Rights Reserved | Tim IT RB</p>
						</div>
					</div>
					<!-- <div class="col-md-6 col-sm-6">
						<div class="footer-link"> 
						<a href="#">Laboratory Tests</a>
							<a href="#">Departments</a>
							<a href="#">Insurance Policy</a>
							<a href="#">Careers</a>
						</div>
					</div> -->
					<div class="col-md-1 col-sm-1 text-align-center">
						<div class="angle-up-btn">
							<a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- SCRIPTS -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/slideshow.js"></script>
	<script src="js/dropdown.js"></script>

</body>

</html>