<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <title>Kelola Kelas Berproses || RUANG BERPROSES</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/logo.png" type="image/jpeg">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
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
        <a class="navbar-brand" href="../dashboard.php">
          <img src="../assets/img/brand/logo.png" class="navbar-brand-img">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="../dashboard.php">
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
          <hr class="my-3">
         
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
              <a class="nav-link" href="kelola_customer.php">
                <i class="ni ni-badge text-primary"></i>
                <span class="nav-link-text">Kelola Data Pengguna</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kelola_testimoni.php">
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
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="tampil_data.php">Kelola Data kelas Berproses </a></li>
                </ol>
              </nav>
            </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-auto ml-md-20 ">
            
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
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-5">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" method="post">
	            <div class="form-group mb-0">
	              <div class="input-group input-group-alternative input-group-merge">
	                <div class="input-group-prepend">
	                  <span class="input-group-text"><i class="fas fa-search"></i></span>
	                </div>
	                <input class="form-control" placeholder="Search" type="text" name="keyword">
	              </div>
	            </div>
	            <button type="submit" name="cari" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
	              <span aria-hidden="true">×</span>
	            </button>
          	  </form>
            </div>
          </div>
        </div>
      </div>
    </div>     
    <!-- Page content -->
    <div class="container-fluid mt--5">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->

            <div class="card-header col-lg-6">
              <h3 class="mb-0">Tabel Data Peer Counseling</h3>
          	</div>
            <!-- Light table -->

            <?php
              include "koneksi.php";     
                //tampilkan data  
               $sql = "SELECT * FROM pendaftaran_peercounseling";
               $result = $conn->query($sql);
            ?>     

            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  	<th scope="col" class="sort" data-sort="no_pendaftaran">No.</th>
                    <th scope="col" class="sort" data-sort="tgl_daftar">Tgl Pendaftaran</th>
                  	<th scope="col" class="sort" data-sort="nama_lengkap">Nama Lengkap</th>
                    <th scope="col" class="sort" data-sort="nama_panggilan">Nama Panggilan</th>
                    <th scope="col" class="sort" data-sort="email">Email</th>
                    <th scope="col" class="sort" data-sort="no_telp">Nomor HP</th>
                    <th scope="col" class="sort" data-sort="pekerjaan">Pekerjaan</th>
                    <th scope="col" class="sort" data-sort="bday">BDay</th>
                    <th scope="col" class="sort" data-sort="jenis_kelamin">Jenis Kelamin</th>
                    <th scope="col" class="sort" data-sort="status_hubungan">Status Hubungan</th>
                    <th scope="col" class="sort" data-sort="domisili">Domisili</th>
                    <th scope="col" class="sort" data-sort="pernah_ikut_sesi">Pernah ikut sesi</th>
                    <th scope="col" class="sort" data-sort="ketersediaan_beda_gender">Ketersediaan Beda Gender</th>
                    <th scope="col" class="sort" data-sort="pernah_ikut_konseling">Pernah ikut konseling</th>
                    <th scope="col" class="sort" data-sort="file_tambahan">File Tambahan</th>
                    <th scope="col" class="sort" data-sort="pernah_ikut_konselingrb">Pernah ikut konseling RB</th>
                    <th scope="col" class="sort" data-sort="keluhan">Keluhan</th>
                    <th scope="col" class="sort" data-sort="latar_belakang">latar_belakang</th>
                    <th scope="col" class="sort" data-sort="tujuan">Tujuan</th>
                    <th scope="col" class="sort" data-sort="bagi_informasi">Bagi Informasi</th>
                    <th scope="col" class="sort" data-sort="setuju_screening">Setuju Screening</th>
                    <th scope="col" class="sort" data-sort="menjadi_marah">Menjadi Marah</th>
                    <th scope="col" class="sort" data-sort="mulut_kering">Mulut Kering</th>
                    <th scope="col" class="sort" data-sort="tidak_melihat_hal_positif">Tidak Melihat Hal Positif</th>
                    <th scope="col" class="sort" data-sort="gangguan_pernapasan">Gangguan Pernapasan</th>
                    <th scope="col" class="sort" data-sort="tidakkuat_ melakukan_kegiatan">Tidak Kuat Melakukan Kegiatan</th>
                    <th scope="col" class="sort" data-sort="reaksi_berlebihan">Reaksi Berlebihan</th>
                    <th scope="col" class="sort" data-sort="kelemahan_anggota_tubuh">Kelemahan Anggota Tubuh</th>
                    <th scope="col" class="sort" data-sort="sulit_relaksasi">Bukti Sulit Relaksasi</th>
                    <th scope="col" class="sort" data-sort="cemas_berlebihan">Cemas Berlebihan</th>
                    <th scope="col" class="sort" data-sort="pesimis">Pesimis</th>
                    <th scope="col" class="sort" data-sort="mudah_kesal">Mudah Kesal</th>
                    <th scope="col" class="sort" data-sort="energi_hbs_krn_cemas">Energi Habis Karena Cemas</th>
                    <th scope="col" class="sort" data-sort="sedih_dan_depresi">Sedih dan Depresi</th>
                    <th scope="col" class="sort" data-sort="tidak_sabaran">Tidak Sabaran</th>
                    <th scope="col" class="sort" data-sort="kelelahan">Kelelahan</th>
                    <th scope="col" class="sort" data-sort="kehilangan_minat">Kehilangan Minat</th>
                    <th scope="col" class="sort" data-sort="diri_tidak_layak">Diri Tidak Layak</th>
                    <th scope="col" class="sort" data-sort="mudah_tersinggung">Mudah Tersinggung</th>
                    <th scope="col" class="sort" data-sort="berkeringat">Berkeringat</th>
                    <th scope="col" class="sort" data-sort="ketakutan_tnp_alasan">Ketakutan Tanpa Alasan</th>
                    <th scope="col" class="sort" data-sort="hidup_tdk_berharga">Hidup Tidak Berharga</th>
                    <th scope="col" class="sort" data-sort="sulit_istirahat">Sulit Istirahat</th>
                    <th scope="col" class="sort" data-sort="sulit_menelan">Sulit Menelan</th>
                    <th scope="col" class="sort" data-sort="tidak_menikmati">Tidak Menikmati</th>
                    <th scope="col" class="sort" data-sort="perubahan_jantung">Perubahan Jantung</th>
                    <th scope="col" class="sort" data-sort="hilang_harapan">Hilang Harapan</th>
                    <th scope="col" class="sort" data-sort="mudah_marah">Mudah Marah</th>
                    <th scope="col" class="sort" data-sort="mudah_panik">Mudah Panik</th>
                    <th scope="col" class="sort" data-sort="sulit_tenang">Sulit Tenang</th>
                    <th scope="col" class="sort" data-sort="takut_terhambat">Takut terhambat</th>
                    <th scope="col" class="sort" data-sort="sulit_antusias">Sulit Antusias</th>
                    <th scope="col" class="sort" data-sort="sulit_mentoleransi">Sulit Mentoleransi</th>
                    <th scope="col" class="sort" data-sort="tegang">Tegang</th>
                    <th scope="col" class="sort" data-sort="tidak_berharga">Tidak Berharga</th>
                    <th scope="col" class="sort" data-sort="tidak_memaklumi">Tidak Memaklumi</th>
                    <th scope="col" class="sort" data-sort="ketakutan">Ketakutan</th>
                    <th scope="col" class="sort" data-sort="tidak_ada_harapan">Tidak Ada Harapan</th>
                    <th scope="col" class="sort" data-sort="hidup_tidak_berarti">Hidup Tidak Berarti</th>
                    <th scope="col" class="sort" data-sort="mudah_gelisah">Mudah Gelisah</th>
                    <th scope="col" class="sort" data-sort="khawatir_panik">Khawatir dan Panik</th>
                    <th scope="col" class="sort" data-sort="gemetar">Gemetar</th>
                    <th scope="col" class="sort" data-sort="sulit_inisiatif">Sulit Inisiatif</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>

                <?php 
          if ($result->num_rows > 0) {
             // output data of each row
             
             while($row = $result->fetch_assoc()) {
                 ?>


                <tbody class="list">

				    <tr>
				      <td scope="row"><?= $row["no_pendaftaran"]; ?></td>
              <td scope="row"><?= $row["tgl_daftar"]; ?></td>
				      <td scope="row"><?= $row["nama_lengkap"]; ?></td>
				      <td scope="row"><?= $row["nama_panggilan"]; ?></td>
				      <td scope="row"><?= $row["email"]; ?></td>
				      <td scope="row"><?= $row["no_telp"]; ?></td>
				      <td scope="row"><?= $row["pekerjaan"]; ?></td>
				      <td scope="row"><?= $row["bday"]; ?></td>
              <td scope="row"><?= $row["jenis_kelamin"]; ?></td>
              <td scope="row"><?= $row["status_hubungan"]; ?></td>
              <td scope="row"><?= $row["domisili"]; ?></td>
              <td scope="row"><?= $row["pernah_ikut_sesi"]; ?></td>
              <td scope="row"><?= $row["ketersediaan_beda_gender"]; ?></td>
              <td scope="row"><?= $row["pernah_ikut_konseling"]; ?></td>
              <td><?php
						      if ($row['file_tambahan']!=NULL) {
							      ?><a href="<?=$row['file_tambahan']?>">File <?=$row['nama_lengkap']?></a>
                    <?php
						      }
                  ?>
              </td>
              <td scope="row"><?= $row["pernah_ikut_konselingrb"]; ?></td>
              <td scope="row"><?= $row["keluhan"]; ?></td>
              <td scope="row"><?= $row["latar_belakang"]; ?></td>
              <td scope="row"><?= $row["tujuan"]; ?></td>
              <td scope="row"><?= $row["bagi_informasi"]; ?></td>
              <td scope="row"><?= $row["setuju_screening"]; ?></td>
              <td scope="row"><?= $row["menjadi_marah"]; ?></td>
              <td scope="row"><?= $row["mulut_kering"]; ?></td>
              <td scope="row"><?= $row["tidak_melihat_hal_positif"]; ?></td>
              <td scope="row"><?= $row["gangguan_pernapasan"]; ?></td>
              <td scope="row"><?= $row["tidakkuat_melakukan_kegiatan"]; ?></td>
              <td scope="row"><?= $row["reaksi_berlebihan"]; ?></td>
              <td scope="row"><?= $row["kelemahan_anggota_tubuh"]; ?></td>
              <td scope="row"><?= $row["sulit_relaksasi"]; ?></td>
              <td scope="row"><?= $row["cemas_berlebihan"]; ?></td>
              <td scope="row"><?= $row["pesimis"]; ?></td>
              <td scope="row"><?= $row["mudah_kesal"]; ?></td>
              <td scope="row"><?= $row["energi_hbs_krn_cemas"]; ?></td>
              <td scope="row"><?= $row["sedih_dan_depresi"]; ?></td>
              <td scope="row"><?= $row["tidak_sabaran"]; ?></td>
              <td scope="row"><?= $row["kelelahan"]; ?></td>
              <td scope="row"><?= $row["kehilangan_minat"]; ?></td>
              <td scope="row"><?= $row["diri_tdk_layak"]; ?></td>
              <td scope="row"><?= $row["mudah_tersinggung"]; ?></td>
              <td scope="row"><?= $row["berkeringat"]; ?></td>
              <td scope="row"><?= $row["ketakutan_tnp_alasan"]; ?></td>
              <td scope="row"><?= $row["hidup_tdk_berharga"]; ?></td>
              <td scope="row"><?= $row["sulit_istirahat"]; ?></td>
              <td scope="row"><?= $row["sulit_menelan"]; ?></td>
              <td scope="row"><?= $row["tidak_menikmati"]; ?></td>
              <td scope="row"><?= $row["perubahan_jantung"]; ?></td>
              <td scope="row"><?= $row["hilang_harapan"]; ?></td>
              <td scope="row"><?= $row["mudah_marah"]; ?></td>
              <td scope="row"><?= $row["mudah_panik"]; ?></td>
              <td scope="row"><?= $row["sulit_tenang"]; ?></td>
              <td scope="row"><?= $row["takut_terhambat"]; ?></td>
              <td scope="row"><?= $row["sulit_antusias"]; ?></td>
              <td scope="row"><?= $row["sulit_mentoleransi"]; ?></td>
              <td scope="row"><?= $row["tegang"]; ?></td>
              <td scope="row"><?= $row["tidak_berharga"]; ?></td>
              <td scope="row"><?= $row["tidak_memaklumi"]; ?></td>
              <td scope="row"><?= $row["ketakutan"]; ?></td>
              <td scope="row"><?= $row["tidak_ada_harapan"]; ?></td>
              <td scope="row"><?= $row["hidup_tidak_berarti"]; ?></td>
              <td scope="row"><?= $row["mudah_gelisah"]; ?></td>
              <td scope="row"><?= $row["khawatir_panik"]; ?></td>
              <td scope="row"><?= $row["gemetar"]; ?></td>
              <td scope="row"><?= $row["sulit_inisiatif"]; ?></td>
				      <td>
                
              <a href="edit.php?id=<?= $row["no_pendaftaran"]; ?>" class="btn btn-success btn-sm" id="modal" onclick="return confirm('Yakin ingin mengedit data ini?');">Edit</a> 
              <a href="hapus.php?id=<?= $row["no_pendaftaran"]; ?>" class="btn btn-danger btn-sm" id="delete_link" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                         
            </td>
				    </tr>
				    </tbody>
            <?php        
             }
         } else {
             echo "0 results";
         }
         
         $conn->close();
         ?>

         
              </table>
              <br>
              <form action="tambah_data.php" method="post">
              <input type="submit" class="btn btn-primary" value="Input Data" name="submit">
            
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
              <a href="register.php" class="nav-link" target="_blank">Registrasi</a>
            </li>
            <li class="nav-item">
              <a href="login.php" class="nav-link" target="_blank">Login</a>
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