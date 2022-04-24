<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <title>Edit Testimoni || Ruang Berproses</title>
  <!-- Favicon -->
  <link rel="icon" href="../img/icon.png" type="image/png" sizes="16x16">
  <!-- Fonts -->
  <link rel="stylesheet" href="../https://fonts.googlea   pis.com/css?family=Open+Sans:300,400,600,700">
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
                <i class="ni ni-notification-70 text-primary"></i>
                <span class="nav-link-text">Kelola Data Psytalk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../kelasberproses/tampil_data.php">
                <i class="ni ni-notification-70 text-primary"></i>
                <span class="nav-link-text">Kelola Data Kelas Berproses</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ig_live/tampil_data.php">
                <i class="ni ni-notification-70 text-primary"></i>
                <span class="nav-link-text">Kelola Data IG LIVE</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../artikel/tampil_data.php">
                <i class="ni ni-notification-70 text-primary"></i>
                <span class="nav-link-text">Kelola Artikel</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../testimoni/tampil_data.php">
                <i class="ni ni-notification-70 text-primary"></i>
                <span class="nav-link-text">Kelola Testimoni</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <ul class="navbar-nav mb-md-3">  
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">
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
                  <li class="breadcrumb-item"><a href="../testimoni/tampil_data.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="../testimoni/tampil_data.php">Kelola data Testimoni</a></li>
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

<div class="container-fluid mt-- 5">
            <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">EDIT KONTEN TESTIMONI</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <?php        
            include "koneksi.php";
            $id_testi=$_GET['id'];     
            $sql = "SELECT * FROM testimoni where id_testi='$id_testi' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                $nama=$row["nama"];
                $isi_testi=$row["isi_testi"];
                $hari_tgl=$row["hari_tgl"]; 
                $foto=$row["foto"];  
                }
            }
            else
                { 
                 
            }
            ?> 
              <form action="update.php" method="POST" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required placeholder="nama pemberi testimoni (boleh inisial/tidak)"value="<?php echo $nama;?>">
                        <small class="form-text text-muted font-weight-medium">Contoh : "Mr.A"</small>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="isi_testi">Komentar atau testimoni</label>
                        <input type="text" name="isi_testi" class="form-control" id="isi_testi" required placeholder="Isi komentar" value="<?php echo $isi_testi;?>">
                        <small class="form-text text-muted font-weight-medium">Contoh : "Layanan yang diberikan sangat baik"</small>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="hari_tgl">Waktu input komentar</label>
                        <input type="text" name="hari_tgl" class="form-control" id="hari_tgl" required placeholder="Hari & Tanggal input komentar" value="<?php echo $hari_tgl;?>">
                        <small class="form-text text-muted font-weight-medium">Contoh : "Jumat, 22 April 2022"</small>
                      </div>
                    </div>

                    <div class="row">
                <div class="pl-lg-4">
                  <div class="form-group">
                  <label for="foto"> 
                  Foto </label> 
                  <br><img src="image_view.php?id_gambar=<?php echo $id_testi; ?>" width="100"/></br> 
                  <br><input type="file" id="foto" name="foto" /> <br /> 
                <br /> 
                <input type="hidden" id="id_testi" name="id_testi" value="<?php echo $id_testi;?>"> 
                <br /> 

                  </div>
                  <button class="btn btn--radius-2 btn--red" type="submit" name="update">Submit</button> 
                </div> 
              </form> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div> 
    
     
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
