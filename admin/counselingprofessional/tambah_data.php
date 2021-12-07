?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <title>Tambah Data Counseling Proffesional || Ruang Berproses</title>
  <!-- Favicon -->
  <link rel="icon" href="../img/icon.png" type="image/png" sizes="16x16">
  <!-- Fonts -->
  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center" >
        <a class="navbar-brand" href="dashboard.php">
          <img src="../assets/img/brand/logo.png" class="navbar-brand-img">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
          </ul>
          
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Kelola</span>
          </h6>
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="../psytalk/tampil_data.php">
                <i class="ni ni-cart text-primary"></i>
                <span class="nav-link-text">Kelola Data Psytalk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../kelasberproses/tampil_data.php">
                <i class="ni ni-bus-front-12 text-primary"></i>
                <span class="nav-link-text">Kelola Data Kelas Berproses</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../peerconseling/tampil_data.php">
                <i class="ni ni-notification-70 text-primary"></i>
                <span class="nav-link-text">Kelola Data Peer Counseling</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../supportgroup/tampil_data.php">
                <i class="ni ni-notification-70 text-primary"></i>
                <span class="nav-link-text">Kelola Data Support Group</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../counselingprofessional/tampil_data.php">
                <i class="ni ni-notification-70 text-primary"></i>
                <span class="nav-link-text">Kelola Data Counseling Professional</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="ni ni-badge text-primary"></i>
                <span class="nav-link-text">Kelola Data Pengguna</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="ni ni-chat-round text-primary"></i>
                <span class="nav-link-text">Kelola Testimoni</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <ul class="navbar-nav mb-md-3">  
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="ni ni-button-power text-primary"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          
        </div>
      </div>
    </div>
  </nav>

 <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-0 mt-2">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <br>
                  <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="../counselingprofessional/tampil_data.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="../counselingprofessional/tampil_data.php">Kelola Counseling Proffesional</a></li>
                </ol>
              </nav>
            </div>
            
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-auto ml-md-20 ">
            <li class="nav-item">
              <a class="nav-link pr-0" href="profile.php">
                <div class="media align-items-center">
                  
                 
                </div>
              </a>
            </li>
            <li class="nav-item" style="margin-left: 50px">
              <a class="nav-link pr-0" href="logout.php">
                <div class="media align-items-center">
                  <span>
                    <i class="ni ni-button-power text-white"></i>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Logout</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br>
    <div class="container-fluid mt--5">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">

                <h3 class="mb-0">TAMBAH DATA COUNSELING PROFESSIONAL</h3>
                  <ul>
                        <li>Halo sahabat berproses! Bila kamu membutuhkan konseling dengan konselor profesional dari Ruang Berproses, maka silahkan menjawab pertanyaan dan tes screening dibawah ini dengan jujur ya.
                         Sebelum memulai mengisi form dibawah, dipastikan kamu telah berada di tempat dan posisi yang nyaman, selain itu juga pastikan kamu memiliki waktu karena mengisi form screening dibutuhkan fokus yang cukup.</li>
                        </ul>
                      
                        <!-- <p>Ruang Berproses kembali menghadirkan webinar dengan topik dan pembicara yang sangat menarik. Untuk edisi bulan Mei dengan mengangkat tema PEKERJAAN, kami mempersembahkan topik dan pembicara berikut ini :</p>
                        <br /> -->
                   
                        <ul>
                            <li>Seluruh data yang kamu isikan kerahasiaannya akan dijaga. dan hanya konselor yang akan melayani kamu yang akan menerima keseluruhan data yang kamu berikan.
                        Kamu bisa mengikuti kegiatan ini dengan membayar fee sebesar <span>Rp 100.000</span> per sesi per 60 menit konseling.</li>
                        </ul>

                        <h3 class="mb-0"> Pembayaran bisa dilakukan dengan transfer ke salah satu rekening di bawah (semua rekening a.n Yohana Sondang Activa Hutabarat):</h3>
                        <ol>
                          <li>BNI 0199235333</li>
                          <li>BCA 6241059607</li>
                          <li>JENIUS 90300055196</li>
                          <li>OVO 085156065094</li>
                        </ol>
                    
                        
                        <p>Contact us at :</p>
                        <ul>
                            <li>Instagram : <a href="https://www.instagram.com/ruangberproses.id/" target="_blank">ruangberproses.id</a></li>
                            <li>Twitter : <a href="https://twitter.com/ruangberproses">ruangberproses</a></li>
                            <li>Email : <a href="mailto: ruangberproses.id@gmail.com">ruangberproses.id@gmail.com</a></li>
                        </ul>
                    </div>
                    <hr />
                    </div>
                </div>
            </div>
               
            <div class="card-body">
           
          <form method="POST" action="tambah.php" enctype="multipart/form-data">
              <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">

                <label class="form-control-label" for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" required />

                <label class="form-control-label" for="no_telp">No. WhatsApp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. WhatsApp" required />
                <small class="form-text text-muted font-weight-medium">Pastikan nomor handphone yang kamu isi adalah nomor yang aktif saat ini</small>

                <label class="form-control-label" for="email">Alamat Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" required />

                <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label> <br>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" required>
                <label for="perempuan" style="font-weight: 400">Perempuan</label> <br>
                <input type="radio" id="laki" name="jenis_kelamin" value="laki">
                <label for="laki" style="font-weight: 400">Laki-laki</label> <br>
                <input type="radio" id="lainnya" name="jenis_kelamin" value="Lainnya">
                <label for="lainnya" style="font-weight: 400">Memilih Tidak Menjawab</label> <br>
                <div class="space"></div>

                <label class="form-control-label" for="agama">Agama</label> <br />
                <input type="radio" id="islam" name="agama" value="islam" required />
                <label for="islam" style="font-weight: 400">Islam</label> <br />
                <input type="radio" id="kristen" name="agama" value="kristen" />
                <label for="kristen" style="font-weight: 400">Kristen</label> <br />
                <input type="radio" id="katolik" name="agama" value="katolik" />
                <label for="katolik" style="font-weight: 400">Katolik</label> <br />
                <input type="radio" id="buddha" name="agama" value="buddha" />
                <label for="buddha" style="font-weight: 400">Buddha</label> <br />
                <input type="radio" id="hindu" name="agama" value="hindu" />
                <label for="hindu" style="font-weight: 400">Hindu</label> <br />
                <input type="radio" id="konghucu" name="agama" value="konghucu" />
                <label for="konghucu" style="font-weight: 400">Konghucu</label> <br />
                <input type="radio" id="lainnya" name="agama" value="lainnya" />
                <label for="lainnya" style="font-weight: 400">Lainnya</label> <br />
                <div class="space"></div>

                <label class="form-control-label" for="usia">Usia</label>
                <input type="number" name="usia" class="form-control" id="usia" placeholder="Usia (Angka)" required />

                <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan"  class="form-control" id="pekerjaan" placeholder="Pekerjaan saat ini" required />

                <label class="form-control-label" for="status_hubungan">Status Hubungan</label> <br />
                <select name="status_hubungan" class="form-control">
                            <option id="status_hubungan1">Belum Menikah</option>
                            <option id="status_hubungan2">Menikah</option>
                            <option id="status_hubungan3">Cerai Hidup</option>
                            <option id="status_hubungan4">Cerai Meninggal</option>
                            
                        </select>

                <label class="form-control-label" for="pendidikan_terakhir">Pendidikan Terakhir</label> <br />
                <select name="pendidikan_terakhir" class="form-control">
                            <option id="pendidikan_terakhir1">SD</option>
                            <option id="pendidikan_terakhir2">SMP</option>
                            <option id="pendidikan_terakhir3">SMA</option>
                            <option id="pendidikan_terakhir4">D3/D4</option>
                            <option id="pendidikan_terakhir5">S1</option>
                            <option id="pendidikan_terakhir6">S2</option>
                            <option id="pendidikan_terakhir7">Lainnya</option>
                            
                        </select>

                <label class="form-control-label" for="domisili">Domisili</label>
                <input type="text" name="domisili" class="form-control" id="domisili" placeholder="Domisili Saat Ini" required />

                <hr style="margin-bottom: 15px" />

                <label class="form-control-label" for="kesediaan_mendaftar">Dengan mengisi form ini, saya dengan kesadaran penuh membagi informasi saya kepada Ruang Berproses guna mendapatkan konseling. </label> <br />
                <input type="radio" id="ya" name="kesediaan_mendaftar" value="ya" style="margin: 10px 0" required />
                <label for="ya" style="font-weight: 400">Ya</label> <br />
                <input type="radio" id="tidak" name="kesediaan_mendaftar" value="tidak" style="margin-bottom: 25px" />
                <label for="tidak" style="font-weight: 400">Tidak</label> <br />

                <label class="form-control-label" for="setuju_screening">Dengan ini saya menyetujui untuk melakukan screening test terlebih dahulu, untuk memastikan bahwa kondisi saya lebih detail kepada konselor</label> <br />
                <input type="radio" id="ya" name="setuju_screening" value="ya" style="margin: 10px 0" required />
                <label for="ya" style="font-weight: 400">Ya</label> <br />
                <input type="radio" id="tidak" name="setuju_screening" value="tidak" style="margin-bottom: 25px" />
                <label for="tidak" style="font-weight: 400">Tidak</label> <br />
                </div>
      </div>
    </div>

                <label for="bukti_pembayaran"
                  >Silahkan mengunggah bukti transfer commitment kamu disini (Usahakan tidak lebih dari 10 MB) <br />
                  <br><input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required /> <br />
                <br />
                <label for="bukti_pembayaran">Terimakasih sudah mendaftar dalam Konseling Profesional Ruang Berproses. Kami akan melakukan screening. Bila kriteria dan kebutuhan kamu sesuai dengan kriteria konseling yang akan kami buka, kami akan segera menghubungi
                  kamu.</label>
                <div>
                  <button class="btn btn--radius-2 btn--red" type="submit" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

   <!-- Footer -->
   <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="dashboard.php" class="font-weight-bold ml-1" target="_blank">RUANG BERPROSES TEAM</a>
            </div>
          </div>
          <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link" target="_blank">Dashboard</a>
            </li>
           
            <li class="nav-item">
              <a href="logout.php" class="nav-link" target="_blank">Logout</a>
            </li>
          </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>
</html>
       
</html>
<!-- end document-->
