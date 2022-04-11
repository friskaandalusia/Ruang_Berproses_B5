<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <title>Kelola Data Psytalk || RUANG BERPROSES</title>
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
              <a class="nav-link" href="../profile/profile.php">
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
                  <li class="breadcrumb-item"><a href="tampil_data.php">Kelola Data Psytalk </a></li>
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
              <h3 class="mb-0">TABEL DATA PSYTALK</h3>
          	</div>
            <!-- Light table -->

            <?php
              include "koneksi.php";     
                //tampilkan data  
               $sql = "SELECT * FROM keloladata_psytalk";
               $result = $conn->query($sql);
            ?>     
      <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  	<th scope="col" class="sort" data-sort="no_konten">No.</th>
                    <th scope="col" class="sort" data-sort="judul">Judul Psytalk</th>
                  	<th scope="col" class="sort" data-sort="hari_tgl">Hari, tanggal</th>
                    <th scope="col" class="sort" data-sort="waktu">Waktu</th>
                    <th scope="col" class="sort" data-sort="fee">Fee</th>
                    <th scope="col" class="sort" data-sort="link">Link pendaftaran</th>
                    <th scope="col" class="sort" data-sort="foto_poster">Foto Poster</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>

                <?php 
          if ($result->num_rows > 0) {
             // output data of each row
             $no=0;
             while($row = $result->fetch_assoc()) {
             	$no++;
                 ?>


                <tbody class="list">

				    <tr>
				      <td scope="row"><?= $row["no_konten"]; ?></td>
              <td scope="row"><?= $row["judul"]; ?></td>
				      <td scope="row"><?= $row["hari_tgl"]; ?></td>
				      <td scope="row"><?= $row["waktu"]; ?></td>
				      <td scope="row"><?= $row["fee"]; ?></td>
				      <td scope="row"><?= $row["link"]; ?></td>
              <td><img src="image_view.php?id_gambar=<?php echo $row['no_konten']; ?>" width="100"/></td>
				      <td>
           
              <a href="edit.php?id=<?= $row["no_konten"]; ?>" class="btn btn-success btn-sm" id="modal" onclick="return confirm('Yakin ingin mengedit data ini?');">Edit</a>
              <a href="hapus.php?id=<?= $row["no_konten"]; ?>" class="btn btn-danger btn-sm" id="delete_link" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
              
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