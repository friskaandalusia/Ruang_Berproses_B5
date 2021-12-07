<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <title>Edit Data Support Group || Ruang Berproses</title>
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
                  <li class="breadcrumb-item"><a href="../supportgroup/tampil_data.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="../supportgroup/tampil_data.php">Kelola data Support Group</a></li>
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
                  <h3 class="mb-0">EDIT DATA SUPPORT GROUP</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
          <?php        
            include "koneksi.php";
            $no_pendaftaran=$_GET['id'];    
            $sql = "SELECT * FROM pendaftaran_support_group where no_pendaftaran ='$no_pendaftaran' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                $nama_lengkap=$row["nama_lengkap"];
                $jenis_kelamin=$row["jenis_kelamin"];
                $usia=$row["usia"];  
                $pekerjaan=$row["pekerjaan"];
                $no_telp=$row["no_telp"];
                $email=$row["email"];
                $domisili=$row["domisili"];
                $pilihan_topik=$row["pilihan_topik"];
                $pernah_gabung=$row["pernah_gabung"];      
                $pengalaman=$row["pengalaman"]; 
                $fasilitator=$row["fasilitator"]; 
                $kelompok=$row["kelompok"]; 
                $alasan=$row["alasan"]; 
                $batasan=$row["batasan"]; 
                $harapan=$row["harapan"]; 
                $bersedia_gabung=$row["bersedia_gabung"]; 
                $setuju_ikut=$row["setuju_ikut"]; 
                $setuju_aktif=$row["setuju_aktif"]; 
                $konfirmasi_fasilitator=$row["konfirmasi_fasilitator"]; 
                $mengikuti_aturan=$row["mengikuti_aturan"]; 
                }
            }
            else
                { 
                 
            }
            ?> 
            <form action="update.php" method="POST" enctype="multipart/form-data">
                  <h3 class="mb-0">EDIT DATA SUPPORT GROUP</h3>
                  <ul>
                            <li>Support Group II 2 <span>"QLC & Insecurity" </span> bersama Kak Ary Shu, M.Psi, Psikolog (Clinical Psychologist)</li>
                        </ul>
                      
                        <!-- <p>Ruang Berproses kembali menghadirkan webinar dengan topik dan pembicara yang sangat menarik. Untuk edisi bulan Mei dengan mengangkat tema PEKERJAAN, kami mempersembahkan topik dan pembicara berikut ini :</p>
                        <br /> -->
                        <p>Event Timing :</p>
                        <ul>
                            <li>Kamis, 2 & 9 September 2021 pukul 19.00-21.00 WIB | Via Zoom Apps</li>
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
                    
                    <label class="form-control-label" for="nama_lengkap">Nama Lengkap dan Gelar (Jika ada)</label>
                      <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required placeholder="Nama Lengkap dan Gelar" value="<?php echo $nama_lengkap;?>">
                      <small class="form-text text-muted font-weight-medium">Masukkan nama lengkap dan gelar bagi yang membutuhkan e-Certificate</small>  

                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" >
                      <option id="jenis_kelamin">Laki-laki</option>
                      <option id="jenis_kelamin">Perempuan</option>
                      <option id="jenis_kelamin">Tidak ingin menyebutkan</option>
                    </select>  
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
               </div>
                  

               <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                      <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan saat ini" value="<?php echo $pekerjaan;?>" required />
                          <br>
                      <label class="form-control-label" for="no_telp">No. WhatsApp</label>
                          <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="No. WhatsApp" value="<?php echo $no_telp;?>" required />
                          <small class="form-text text-muted font-weight-medium">Pastikan nomor handphone yang Anda isi adalah nomor yang aktif saat ini</small>
                   
                          <br>
                      <label class="form-control-label" for="email">Email</label>
                          <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $email;?>" required />
                          <br>
                      <label class="form-control-label" for="domisili">Domisili</label>
                        <input type="text" name="domisili" class="form-control" id="domisili" placeholder="Domisili Saat Ini" value="<?php echo $domisili;?>" required />
                        <br>
                        <label class="form-control-label" for="pilihan_topik">Pilihan Topik</label>
                        <select name="pilihan_topik" class="form-control">
                          <option id="pilihan_topik">Self Harm</option>
                          <option id="pilihan_topik">Quarter Life Crisis</option>
                          <option id="pilihan_topik">Insecurity</option>
                         </select>
                         <br>
                      
                      <label class="form-control-label" for="pernah_gabung">Apakah pernah bergabung ke acara support group sebelumnya?</label>
                          <select name="pernah_gabung" class="form-control">
                            <option id="pernah_gabung">Sudah</option>
                            <option id="pernah_gabung">Belum</option>
                          </select>
                          <br>

                      <label class="form-control-label" for="pengalaman">Bisa ceritain mungkin pengalamanmu! </label>
                         <input type="textarea" name="pengalaman"  class="form-control" id="pengalaman" placeholder="Tuliskan Pengalaman Anda (Jika ada)"  value="<?php echo $pengalaman;?>" required></textarea>

                         <label class="form-control-label" for="fasilitator">Fasilitator</label>
                      <input type="textarea" name="fasilitator" class="form-control" id="fasilitator" placeholder="Fasilitator Saat Ini" value="<?php echo $fasilitator;?>" required></textarea>

                      <label class="form-control-label" for="kelompok">Kamu lebih suka kalau support group sama siapa nih??</label>
                          <select name="kelompok" class="form-control">
                            <option id="kelompok"> Hanya Laki-laki</option>
                            <option id="kelompok"> Hanya Perempuan</option>
                            <option id="kelompok"> Keduanya</option>
                          </select>
                          <br>
                          <label class="form-control-label" for="alasan">Apa alasan kamu mengikuti  kegiatan ini?</label>
                          <input type="textarea" name="alasan"  class="form-control" id="alasan" placeholder="Tuliskan alasan Anda (Jika ada)"  value="<?php echo $alasan;?>" required></textarea>
                          <br>
                          <label class="form-control-label" for="batasan">Apa batasan yang ingin kamu beritahu pada kegiatan ini ya?</label>
                          <input type="textarea" name="batasan" class="form-control" id="batasan" placeholder="Tuliskan Batasan Anda (Jika ada)" value="<?php echo $batasan;?>" required></textarea>
                          <br>
                          <label class="form-control-label" for="harapan">Apa harapan yang ingin kamu beritahu pada kegiatan ini?</label>
                          <input type="textarea" name="harapan" class="form-control" id="harapan" placeholder="Tuliskan Harapan Anda disini" value="<?php echo $harapan;?>" required></textarea>
                          <br>
                          <label class="form-control-label" for="bersedia_gabung">Apakah kamu bersedia bergabung pada support grup kali ini?</label>
                          <select name="bersedia_gabung" class="form-control">
                            <option id="bersedia_gabung"> Ya</option>
                            <option id="bersedia_gabung"> Tidak</option>
                           
                          </select>
                          <br>
                          <label class="form-control-label" for="setuju_ikut">Apakah kamu Setuju ikut pada support grup kali ini?</label> <br />
                          <input type="radio" id="ya" name="setuju_ikut" value="ya" style="margin: 10px 0" <?php if($setuju_ikut=="ya"):?>checked="checked" <?php endif;?> required />
                          <label for="ya" style="font-weight: 400">Ya</label> <br />
                          <input type="radio" id="tidak" name="setuju_ikut" value="tidak"  style="margin-bottom: 25px" <?php if($setuju_ikut=="tidak"):?>checked="checked" <?php endif;?> />
                          <label for="tidak" style="font-weight: 400">Tidak</label> <br />
                          
                          <label class="form-control-label" for="setuju_aktif">Apakah kamu Setuju aktif pada support grup kali ini?</label> <br />
                          <input type="radio" id="ya" name="setuju_aktif" value="ya" style="margin: 10px 0" <?php if($setuju_aktif=="ya"):?>checked="checked" <?php endif;?> required />
                          <label for="ya" style="font-weight: 400">Ya</label> <br />
                          <input type="radio" id="tidak" name="setuju_aktif" value="tidak"  style="margin-bottom: 25px" <?php if($setuju_aktif=="tidak"):?>checked="checked" <?php endif;?> />
                          <label for="tidak" style="font-weight: 400">Tidak</label> <br />

                          <label class="form-control-label" for="konfirmasi_fasilitator">konfirmasi sekali lagi ya untuk fasilitator kamu!</label> <br />
                          <input type="radio" id="ya" name="konfirmasi_fasilitator" value="ya" style="margin: 10px 0" <?php if($konfirmasi_fasilitator=="ya"):?>checked="checked" <?php endif;?> required />
                          <label for="ya" style="font-weight: 400">Ya</label> <br />
                          <input type="radio" id="tidak" name="konfirmasi_fasilitator" value="tidak"  style="margin-bottom: 25px" <?php if($konfirmasi_fasilitator=="tidak"):?>checked="checked" <?php endif;?> />
                          <label for="tidak" style="font-weight: 400">Tidak</label> <br />

                          <label class="form-control-label" for="mengikuti_aturan">Apakah kamu bersedia untuk mengikuti aturan yang ada?</label> <br />
                          <input type="radio" id="ya" name="mengikuti_aturan" value="ya" style="margin: 10px 0" <?php if($mengikuti_aturan=="ya"):?>checked="checked" <?php endif;?> required />
                          <label for="ya" style="font-weight: 400">Ya</label> <br />
                          <input type="radio" id="tidak" name="mengikuti_aturan" value="tidak"  style="margin-bottom: 25px" <?php if($mengikuti_aturan=="tidak"):?>checked="checked" <?php endif;?> />
                          <label for="tidak" style="font-weight: 400">Tidak</label> <br />

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
