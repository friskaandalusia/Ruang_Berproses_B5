<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <title>Edit Konten Psytalk || Ruang Berproses</title>
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
              <a class="nav-link" href="../admin/counselingprofessional/tampil_data.php">
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
                  <li class="breadcrumb-item"><a href="../psytalk/tampil_data.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="../psytalk/tampil_data.php">Kelola data Psytalk</a></li>
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
                  <h3 class="mb-0">EDIT KONTEN PSYTALK</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <?php        
            include "koneksi.php";
            $no_konten=$_GET['id'];    
            $sql = "SELECT * FROM keloladata_psytalk where no_konten='$no_konten' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                $judul=$row["judul"];
                $hari_tgl=$row["hari_tgl"];
                $waktu=$row["waktu"];  
                $fee=$row["fee"];
                $link=$row["link"]; 
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
                        <label class="form-control-label" for="judul">Judul acara Psytalk</label>
                        <input type="text" name="judul" class="form-control" id="judul" required placeholder="Judul Acara"value="<?php echo $judul;?>">
                        <small class="form-text text-muted font-weight-medium">Contoh : "Psytalk60: Time Management"</small>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="hari_tgl">Hari, Tanggal Acara</label>
                        <input type="text" name="hari_tgl" class="form-control" id="hari_tgl" required placeholder="Hari dan Tanggal" value="<?php echo $hari_tgl;?>">
                        <small class="form-text text-muted font-weight-medium">Contoh : Jum'at, 04 Maret 2022"</small>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="waktu">Waktu Acara</label>
                        <select name="waktu" class="form-control" value="<?php echo $waktu;?>">
                        <option id="waktu1">19.00-21.00 WIB</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="fee">Fee Acara</label>
                        <select name="fee" class="form-control" value="<?php echo $fee;?>">
                        <option id="fee1">IDR 10K (E-certificate + Materi)</option>
                        <option id="fee2">IDR 15K (E-certificate + Materi)</option>
                        <option id="fee3">IDR 20K (E-certificate + Materi)</option>
                        <option id="fee4">IDR 25K (E-certificate + Materi)</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="link">Link Pendaftaran</label>
                        <input type="textarea" name="link" class="form-control" id="link" required placeholder="Link Pendaftaran yang dapat diakses" value="<?php echo $link;?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                <div class="pl-lg-4">
                  <div class="form-group">
                  <label for="foto_poster"> 
                  Foto Poster</label> 
                  <br><img src="image_view.php?id_gambar=<?php echo $no_konten; ?>" width="100"/></br> 
                  <br><input type="file" id="foto_poster" name="foto_poster" /> <br /> 
                <br /> 
                <input type="hidden" id="no_konten" name="no_konten" value="<?php echo $no_konten;?>"> 
                <br /> 

                <div> 
                  <button class="btn btn--radius-2 btn--red" type="submit" name="update">Submit</button> 
                </div> 
              </form> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div> 
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2022 <a href="dashboard.php" class="font-weight-bold ml-1" target="_blank">RUANG BERPROSES TEAM</a>
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
