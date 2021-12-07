<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <title>Edit Data Psytalk || Ruang Berproses</title>
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
                  <li class="breadcrumb-item"><a href="../kelasberproses/tampil_data.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="../kelasberproses/tampil_data.php">Kelola data Kelas Berproses</a></li>
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
                  <h3 class="mb-0">EDIT DATA KELAS BERPROSES</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <?php        
            include "koneksi.php";
            $no_pendaftaran=$_GET['id'];    
            $sql = "SELECT * FROM pendaftaran_kelas_berproses where no_pendaftaran='$no_pendaftaran' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                $nama=$row["nama"];
                $email=$row["email"];
                $no_telp=$row["no_telp"];  
                $usia=$row["usia"];
                $domisili=$row["domisili"];
                $pekerjaan=$row["pekerjaan"];
                $alasan=$row["alasan"];
                $pernah_mengikuti=$row["pernah_mengikuti"];
                $pertanyaan=$row["pertanyaan"];      
                $asal_info=$row["asal_info"]; 
                }
            }
            else
                { 
                 
            }
            ?> 
              <form action="update.php" method="POST" enctype="multipart/form-data">
                   
                     <ul>
                        <li>Kelas Berproses 2 <span>"Psychological First Aid" </span> bersama Ellyana Dwi Farisandy, M.Psi, Psikolog (Clinical Psychologist)</li>
                        </ul>
                      
                        <!-- <p>Ruang Berproses kembali menghadirkan webinar dengan topik dan pembicara yang sangat menarik. Untuk edisi bulan Mei dengan mengangkat tema PEKERJAAN, kami mempersembahkan topik dan pembicara berikut ini :</p>
                        <br /> -->
                        <p>Event Timing :</p>
                        <ul>
                            <li>Jum'at, 27 Agustus 2021 pukul 19.00-21.00 WIB | Via Zoom Apps</li>
                        </ul>
                        
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
              <form action="update.php" method="POST" enctype="multipart/form-data">
              
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                      
                      <label class="form-control-label" for="nama">Nama Lengkap dan Gelar (Jika ada)</label>
                        <input type="text" name="nama" class="form-control" id="nama" required placeholder="Nama Lengkap dan Gelar"  value="<?php echo $nama;?>">
                        <small class="form-text text-muted font-weight-medium">Masukkan nama lengkap dan gelar bagi yang membutuhkan e-Certificate</small>  

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required placeholder="Alamat email valid"  value="<?php echo $email;?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="no_telp">No. WhatsApp</label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" required placeholder="No. WhatsApp Aktif" value="<?php echo $no_telp;?>">
                        <small class="form-text text-muted font-weight-medium">Pastikan nomor handphone yang Anda isi adalah nomor yang aktif saat ini</small>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="usia">Usia</label>
                        <input type="number" name="usia" class="form-control" id="usia" required placeholder="Usia (Angka)" value="<?php echo $usia;?>">
                      </div>
                    </div>

                    

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="domisili">Domisili</label>
                        <input type="text" name="domisili" class="form-control" id="domisili" required placeholder="Domisili saat ini"  value="<?php echo $domisili;?>">
                        
                      </div>
                    </div>
                  </div>
<br>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" required placeholder="Pekerjaan saat ini"  value="<?php echo $pekerjaan;?>" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="alasan">Alasan</label>
                        <input type="textarea" name="alasan" class="form-control" id="alasan" required placeholder="Alasan mengikuti webinar ini"  value="<?php echo $alasan;?>" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="pernah_mengikuti">Apakah Anda mengikuti rangkaian webinar @ruangberproses.id sebelumnya?</label>
                        <br><input type="radio" id="ya" name="pernah_mengikuti" value="ya" style="margin: 10px 0" <?php if($pernah_mengikuti=="ya"):?>checked="checked" <?php endif;?> required />
                            <label for="ya" style="font-weight: 400">Ya</label> <br />
                            <input type="radio" id="tidak" name="pernah_mengikuti" value="tidak"  style="margin-bottom: 25px" <?php if($pernah_mengikuti=="tidak"):?>checked="checked" <?php endif;?> required/>
                            <label for="tidak" style="font-weight: 400">Tidak</label> <br />

                            <label class="form-control-label" for="pertanyaan">Pertanyaan yang ingin diajukan terkait topik</label>
                            <input type="textarea" name="pertanyaan" class="form-control" id="pertanyaan" 
                            required placeholder="Tuliskan Pertanyaan Anda" value="<?php echo $pertanyaan;?>">

                            <label class="form-control-label" for="asal_info">Asal Info Webinar</label>
                            <select name="asal_info" class="form-control">
                            <option id="asal_info1">Instagram</option>
                            <option id="asal_info2">Twitter</option>
                            <option id="asal_info3">Broadcast</option>
                            <option id="asal_info4">Facebook</option>
                            <option id="asal_info5">Media Partner</option>
                        </select>
                      </div>
                    </div>
                  </div>

            <div class="row">
                <div class="pl-lg-4">
                  <div class="form-group"> 
                  <label for="bukti_pembayaran"> 
                  Bukti Pembayaran</label> 
                  <br><img src="image_view.php?id_gambar=<?php echo $no_pendaftaran; ?>" width="100"/></br> 
                  <br><input type="file" id="bukti_pembayaran" name="bukti_pembayaran" /> <br /> 
                <br /> 
                <input type="hidden" id="no_pendaftaran" name="no_pendaftaran" value="<?php echo $no_pendaftaran;?>"> 
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
