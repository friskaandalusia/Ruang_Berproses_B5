?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <title>Edit Data Peer Counseling || Ruang Berproses</title>
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
                  <li class="breadcrumb-item"><a href="../peerconseling/tampil_data.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="../peerconseling/tampil_data.php">Kelola data Peer Counseling</a></li>
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
                  <h3 class="mb-0">EDIT DATA PEER COUNSELING</h3>
                </div>
              </div>
            </div>

            <div class="card-body">
            <?php        
            include "koneksi.php";
            $no_pendaftaran=$_GET['id'];    
            $sql = "SELECT * FROM pendaftaran_peercounseling where no_pendaftaran='$no_pendaftaran' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                
                    $nama_lengkap = $row["nama_lengkap"];
                    $nama_panggilan = $row["nama_panggilan"];
                    $email = $row["email"];
                    $no_telp = $row["no_telp"];
                    $pekerjaan = $row["pekerjaan"];
                    $bday = $row["bday"];
                    $jenis_kelamin = $row["jenis_kelamin"];
                    $status_hubungan = $row["status_hubungan"];
                    $domisili = $row["domisili"];
                    $pernah_ikut_sesi = $row["pernah_ikut_sesi"];
                    $ketersediaan_beda_gender = $row["ketersediaan_beda_gender"];
                    $pernah_ikut_konseling = $row["pernah_ikut_konseling"];
                    $pernah_ikut_konselingrb = $row["pernah_ikut_konselingrb"];
                    $keluhan = $row["keluhan"];
                    $latar_belakang = $row["latar_belakang"];
                    $tujuan = $row["tujuan"];
                    $bagi_informasi = $row["bagi_informasi"];
                    $setuju_screening = $row["setuju_screening"];

                    //screening test
                      $menjadi_marah = $row["menjadi_marah"];
                      $mulut_kering = $row["mulut_kering"];
                      $tidak_melihat_hal_positif = $row["tidak_melihat_hal_positif"];
                      $gangguan_pernapasan = $row["gangguan_pernapasan"];
                      $tidakkuat_melakukan_kegiatan = $row["tidakkuat_melakukan_kegiatan"];
                      $reaksi_berlebihan = $row["reaksi_berlebihan"];
                      $kelemahan_anggota_tubuh = $row["kelemahan_anggota_tubuh"];
                      $sulit_relaksasi = $row["sulit_relaksasi"];
                      $cemas_berlebihan = $row["cemas_berlebihan"];
                      $pesimis = $row["pesimis"];
                      $mudah_kesal = $row["mudah_kesal"];
                      $energi_hbs_krn_cemas = $row["energi_hbs_krn_cemas"];
                      $sedih_dan_depresi = $row["sedih_dan_depresi"];
                      $tidak_sabaran = $row["tidak_sabaran"];
                      $kelelahan = $row["kelelahan"];
                      $kehilangan_minat = $row["kehilangan_minat"];
                      $diri_tdk_layak = $row["diri_tdk_layak"];
                      $mudah_tersinggung = $row["mudah_tersinggung"];
                      $berkeringat = $row["berkeringat"];
                      $ketakutan_tnp_alasan = $row['ketakutan_tnp_alasan'];
                      $hidup_tdk_berharga = $row['hidup_tdk_berharga'];
                      $sulit_istirahat = $row['sulit_istirahat'];
                      $sulit_menelan = $row['sulit_menelan'];
                      $tidak_menikmati = $row['tidak_menikmati'];
                      $perubahan_jantung = $row['perubahan_jantung'];
                      $hilang_harapan = $row['hilang_harapan'];
                      $mudah_marah = $row['mudah_marah'];
                      $mudah_panik = $row['mudah_panik'];
                      $sulit_tenang = $row['sulit_tenang'];
                      $takut_terhambat = $row['takut_terhambat'];
                      $sulit_antusias = $row['sulit_antusias'];
                      $sulit_mentoleransi = $row['sulit_mentoleransi'];
                      $tegang = $row['tegang'];
                      $tidak_berharga = $row['tidak_berharga'];
                      $tidak_memaklumi = $row['tidak_memaklumi'];
                      $ketakutan = $row['ketakutan'];
                      $tidak_ada_harapan = $row['tidak_ada_harapan'];
                      $hidup_tidak_berarti = $row['hidup_tidak_berarti'];
                      $mudah_gelisah = $row['mudah_gelisah'];
                      $khawatir_panik = $row['khawatir_panik'];
                      $gemetar = $row['gemetar'];
                      $sulit_inisiatif = $row['sulit_inisiatif'];

                   
                }
            }
            else
                { 
                 
            }
            ?> 
              <form method="POST" action="update.php" enctype="multipart/form-data">
               
              <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                      
                        <label class="form-control-label" for="nama_lengkap">Nama Lengkap dan Gelar (Jika ada)</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required placeholder="Nama Lengkap dan Gelar" value="<?php echo $nama_lengkap;?>">
                        <small class="form-text text-muted font-weight-medium">Masukkan nama lengkap dan gelar bagi yang membutuhkan e-Certificate</small>

                        <label class="form-control-label" for="nama_panggilan">Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" class="form-control" id="nama_panggilan" required placeholder="Nama Panggilan" value="<?php echo $nama_panggilan;?>">
                        <small class="form-text text-muted font-weight-medium">Masukkan nama panggilan kamu ya!</small>
                        
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
                        <input type="text" name="no_telp" class="form-control" id="no_telp" required placeholder="No. WhatsApp Aktif"  value="<?php echo $no_telp;?>">
                        <small class="form-text text-muted font-weight-medium">Pastikan nomor handphone yang Anda isi adalah nomor yang aktif saat ini</small>
                      </div>
                    </div>
                  </div>

                <br>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" required placeholder="Pekerjaan saat ini" value="<?php echo $pekerjaan;?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                      
                        <label class="form-control-label" for="bday">Tanggal Lahir</label>  
                        <input type="date" name="bday" class="form-control" id="bday" required placeholder="Masukkan tanggal Lahir kamu" value="<?php echo $bday;?>">

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">

                      
                        <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                        <br><input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" style="margin: 10px 0" <?php if($jenis_kelamin=="Perempuan"):?>checked="checked" <?php endif;?> required />
                            <label for="perempuan" style="font-weight: 400">Perempuan</label> <br />
                            <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki"  style="margin-bottom: 25px" <?php if($jenis_kelamin=="Laki-laki"):?>checked="checked" <?php endif;?> required/>
                            <label for="laki" style="font-weight: 400">Laki-laki</label> <br />
                            <input type="radio" id="tidakjawab" name="jenis_kelamin" value="Memilih tidak menjawab"  style="margin-bottom: 25px" <?php if($jenis_kelamin=="Memilih tidak menjawab"):?>checked="checked" <?php endif;?> required/>
                            <label for="tidakjawab" style="font-weight: 400">Memilih tidak menjawab</label> <br />
                            </div>
                       </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                <label  class="form-control-label" for="status">Status</label> <br />
                      <input type="radio" id="sudah" name="status_hubungan" value="Menikah" style="margin: 10px 0;" <?php if($status_hubungan=="Menikah"):?>checked="checked" <?php endif;?> required>
                      <label for="sudah" style="font-weight: 400;">Menikah</label> <br />
                      <input type="radio" id="belum" name="status_hubungan" value="Belum Menikah" style="margin-bottom: 25px;" <?php if($status_hubungan=="Belum Menikah"):?>checked="checked" <?php endif;?>>
                      <label for="belum" style="font-weight: 400;">Belum Menikah</label> <br />
                      </div>
                    </div>
                  </div>

                <label class="form-control-label" for="domisili">Domisili</label>
                      <input type="text" name="domisili" class="form-control" id="domisili" placeholder="Domisili Saat Ini" value="<?php echo $domisili;?>" required>

                <label class="form-control-label" for="ikut_sesi">Pernah mengikuti sesi peer konseling di Ruang Berproses sebelumnya?</label> <br />
                      <input type="radio" id="ya" name="pernah_ikut_sesi" value="Ya" style="margin: 10px 0;" <?php if($pernah_ikut_sesi=="Ya"):?>checked="checked" <?php endif;?>required>
                      <label for="ya" style="font-weight: 400;">Ya</label> <br />
                      <input type="radio" id="tidak" name="pernah_ikut_sesi" value="Tidak" style="margin-bottom: 25px;"<?php if($pernah_ikut_sesi=="Tidak"):?>checked="checked" <?php endif;?>>
                      <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label class="form-control-label" for="ketersediaan">Apakah bersedia jika ditangani oleh konselor yang berbeda jenis kelamin dari anda?</label> <br />
                      <input type="radio" id="ya_bersedia" name="ketersediaan_beda_gender" value="Ya, Bersedia" style="margin: 10px 0;" <?php if($ketersediaan_beda_gender=="Ya, Bersedia"):?>checked="checked" <?php endif;?>required>
                      <label for="ya" style="font-weight: 400;">Ya, bersedia</label> <br />
                      <input type="radio" id="tidak_bersedia" name="ketersediaan_beda_gender" value="Tidak Bersedia" style="margin-bottom: 25px;"<?php if($ketersediaan_beda_gender=="Tidak Bersedia"):?>checked="checked" <?php endif;?>>
                      <label for="tidak" style="font-weight: 400;">Tidak bersedia</label> <br />

                <label class="form-control-label" for="ikut_konseling">Apakah kamu sudah pernah mengikuti konseling atau terapi psikologi sebelumnya?</label> <br />
                      <input type="radio" id="ya" name="pernah_ikut_konseling" value="Ya" style="margin: 10px 0;" <?php if($pernah_ikut_konseling=="Ya"):?>checked="checked" <?php endif;?>required>
                      <label for="ya" style="font-weight: 400;">Ya</label> <br />
                      <input type="radio" id="tidak" name="pernah_ikut_konseling" value="Tidak" style="margin-bottom: 25px;"<?php if($pernah_ikut_konseling=="Tidak"):?>checked="checked" <?php endif;?>>
                      <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label class="form-control-label" for="opsional">Opsional : Apabila ingin mengganti file tambahan (journal, hasil tes psikologi, dll)</label> <br />
                      <input type="file" id="opsional" name="file_tambahan" style="margin-bottom: 0px;"> <br />
                    <br>
                <label class="form-control-label" for="pernah_mengikuti">Apakah kamu sudah pernah mengikuti konseling di Ruang Berproses sebelumnya?</label> <br />
                      <input type="radio" id="ya" name="pernah_ikut_konselingrb" value="Ya" style="margin: 10px 0;" <?php if($pernah_ikut_konselingrb=="Ya"):?>checked="checked" <?php endif;?> required>
                      <label for="ya" style="font-weight: 400;">Ya</label> <br />
                      <input type="radio" id="tidak" name="pernah_ikut_konselingrb" value="Tidak" style="margin-bottom: 25px;"<?php if($pernah_ikut_konselingrb=="Tidak"):?>checked="checked" <?php endif;?>>
                      <label for="tidak" style="font-weight: 400;">Tidak</label> <br />

                <label class="form-control-label" for="keluhan">Mohon informasikan kami mengenai keluhanmu (informasi akan dijaga kerahasiaannya)</label>
                      <input type="textarea" name="keluhan"  id="keluhan" class="form-control" placeholder="Tuliskan Keluhan Kamu" value="<?php echo $keluhan;?>" required></textarea> <br />

                <label class="form-control-label" for="latar_belakang">Mohon informasikan latarbelakang permasalahan yang kamu alami</label>
                      <input type="textarea" name="latar_belakang" class="form-control" id="latar_belakang" placeholder="Tuliskan Latar Belakang Kamu"  value="<?php echo $latar_belakang;?>"required></textarea>

                <label class="form-control-label" for="tujuan">Tujuan yang ingin dicapai melalui konseling</label>
                      <input type="textarea" name="tujuan"  class="form-control" id="tujuan" placeholder="Tuliskan Tujuan Kamu" value="<?php echo $tujuan;?>" required></textarea>

                <label class="form-control-label" for="sadar">Dengan mengisi form ini, saya dengan kesadaran penuh membagi informasi saya kepada Ruang Berproses guna mendapatkan konseling</label> <br />
                      <input type="radio" id="setuju" name="bagi_informasi" value="Setuju" style="margin: 10px 0;" <?php if($bagi_informasi=="Setuju"):?>checked="checked" <?php endif;?> required>
                      <label for="setuju" style="font-weight: 400;">Setuju</label> <br />
                      <input type="radio" id="tidak" name="bagi_informasi" value="Tidak Setuju" style="margin-bottom: 25px;"<?php if($bagi_informasi=="Tidak Setuju"):?>checked="checked" <?php endif;?>>
                      <label for="tidak" style="font-weight: 400;">Tidak Setuju</label> <br />

                <label class="form-control-label" for="setuju">Dengan ini saya menyetujui untuk melakukan screening test terlebih dahulu, untuk memastikan bahwa kondisi saya bisa ditangani oleh peer counselor</label> <br />
                      <input type="radio" id="setuju" name="setuju_screening" value="Setuju" style="margin: 10px 0;" <?php if($setuju_screening=="Setuju"):?>checked="checked" <?php endif;?> required>
                      <label for="setuju" style="font-weight: 400;">Setuju</label> <br />
                      <input type="radio" id="tidak" name="setuju_screening" value="Tidak Setuju" style="margin-bottom: 25px;"<?php if($setuju_screening=="Tidak Setuju"):?>checked="checked" <?php endif;?>>
                      <label for="tidak" style="font-weight: 400;">Tidak Setuju</label> <br />

                <h4>Tes Screening</h4>
                  <p style="margin-bottom: 8px;">Keterangan</p>
                  <ul style="margin-bottom: 30px;">
                    <li>0 : Tidak ada atau tidak pernah</li>
                    <li>1 : Sesuai dengan yang dialami sampai tingkat tertentu, atau kadang-kadang</li>
                    <li>2 : Sering</li>
                    <li>3 : Sangat sesuai dengan yang dialami, atau hampir setiap saat</li>
                  </ul>

                  <label class="statement" >Menjadi marah karena hal-hal kecil/sepele</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="menjadi_marah" value="0" <?php if($menjadi_marah=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="menjadi_marah" value="1" <?php if($menjadi_marah=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="menjadi_marah" value="2" <?php if($menjadi_marah=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="menjadi_marah" value="3" <?php if($menjadi_marah=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mulut terasa kering</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mulut_kering" value="0" <?php if($mulut_kering=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mulut_kering" value="1" <?php if($mulut_kering=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mulut_kering" value="2" <?php if($mulut_kering=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mulut_kering" value="3" <?php if($mulut_kering=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak dapat melihat hal yang positif dari suatu kejadian</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_melihat_hal_positif" value="0" <?php if($tidak_melihat_hal_positif=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_melihat_hal_positif" value="1"<?php if($tidak_melihat_hal_positif=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_melihat_hal_positif" value="2" <?php if($tidak_melihat_hal_positif=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_melihat_hal_positif" value="3"<?php if($tidak_melihat_hal_positif=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasakan gangguan dalam bernapas (napas cepat,sulit bernapas)</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="gangguan_pernapasan" value="0" <?php if($gangguan_pernapasan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="gangguan_pernapasan" value="1" <?php if($gangguan_pernapasan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="gangguan_pernapasan" value="2" <?php if($gangguan_pernapasan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="gangguan_pernapasan" value="3" <?php if($gangguan_pernapasan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa sepertinya tidak kuat lagi untuk melakukan suatu kegiatan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidakkuat_melakukan_kegiatan" value="0" <?php if($tidakkuat_melakukan_kegiatan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidakkuat_melakukan_kegiatan" value="1" <?php if($tidakkuat_melakukan_kegiatan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidakkuat_melakukan_kegiatan" value="2" <?php if($tidakkuat_melakukan_kegiatan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidakkuat_melakukan_kegiatan" value="3" <?php if($tidakkuat_melakukan_kegiatan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Cenderung bereaksi berlebihan pada situasi</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="reaksi_berlebihan" value="0" <?php if($reaksi_berlebihan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="reaksi_berlebihan" value="1" <?php if($reaksi_berlebihan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="reaksi_berlebihan" value="2" <?php if($reaksi_berlebihan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="reaksi_berlebihan" value="3" <?php if($reaksi_berlebihan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kelemahan pada anggota tubuh</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="kelemahan_anggota_tubuh" value="0" <?php if($kelemahan_anggota_tubuh=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="kelemahan_anggota_tubuh" value="1" <?php if($kelemahan_anggota_tubuh=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="kelemahan_anggota_tubuh" value="2" <?php if($kelemahan_anggota_tubuh=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="kelemahan_anggota_tubuh" value="3" <?php if($kelemahan_anggota_tubuh=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kesulitan untuk relaksasi/bersantai</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_relaksasi" value="0" <?php if($sulit_relaksasi=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_relaksasi" value="1" <?php if($sulit_relaksasi=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_relaksasi" value="2" <?php if($sulit_relaksasi=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_relaksasi" value="3" <?php if($sulit_relaksasi=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Cemas yang berlebihan dalam suatu situasi namun bisa lega jika hal/situasi itu berakhir</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="cemas_berlebihan" value="0" <?php if($cemas_berlebihan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="cemas_berlebihan" value="1" <?php if($cemas_berlebihan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="cemas_berlebihan" value="2" <?php if($cemas_berlebihan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="cemas_berlebihan" value="3" <?php if($cemas_berlebihan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Pesimis</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="pesimis" value="0" <?php if($pesimis=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="pesimis" value="1" <?php if($pesimis=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="pesimis" value="2" <?php if($pesimis=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="pesimis" value="3" <?php if($pesimis=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah merasa kesal</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_kesal" value="0" <?php if($mudah_kesal=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_kesal" value="1" <?php if($mudah_kesal=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_kesal" value="2" <?php if($mudah_kesal=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_kesal" value="3" <?php if($mudah_kesal=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa banyak menghabiskan energi karena cemas</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="energi_hbs_krn_cemas" value="0" <?php if($energi_hbs_krn_cemas=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="energi_hbs_krn_cemas" value="1" <?php if($energi_hbs_krn_cemas=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="energi_hbs_krn_cemas" value="2" <?php if($energi_hbs_krn_cemas=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="energi_hbs_krn_cemas" value="3" <?php if($energi_hbs_krn_cemas=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa sedih dan depresi</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sedih_dan_depresi" value="0" <?php if($sedih_dan_depresi=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sedih_dan_depresi" value="1" <?php if($sedih_dan_depresi=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sedih_dan_depresi" value="2" <?php if($sedih_dan_depresi=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sedih_dan_depresi" value="3" <?php if($sedih_dan_depresi=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak sabaran</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_sabaran" value="0" <?php if($tidak_sabaran=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_sabaran" value="1" <?php if($tidak_sabaran=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_sabaran" value="2" <?php if($tidak_sabaran=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_sabaran" value="3" <?php if($tidak_sabaran=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kelelahan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="kelelahan" value="0" <?php if($kelelahan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="kelelahan" value="1" <?php if($kelelahan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="kelelahan" value="2" <?php if($kelelahan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="kelelahan" value="3" <?php if($kelelahan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kehilangan minat pada banyak hal (misal: makan,ambulasi, sosialisasi)</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="kehilangan_minat" value="0" <?php if($kehilangan_minat=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="kehilangan_minat" value="1" <?php if($kehilangan_minat=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="kehilangan_minat" value="2" <?php if($kehilangan_minat=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="kehilangan_minat" value="3" <?php if($kehilangan_minat=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa diri tidak layak </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="diri_tdk_layak" value="0" <?php if($diri_tdk_layak=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="diri_tdk_layak" value="1"<?php if($diri_tdk_layak=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="diri_tdk_layak" value="2" <?php if($diri_tdk_layak=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="diri_tdk_layak" value="3" <?php if($diri_tdk_layak=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah tersinggung</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_tersinggung" value="0" <?php if($mudah_tersinggung=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_tersinggung" value="1" <?php if($mudah_tersinggung=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_tersinggung" value="2" <?php if($mudah_tersinggung=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_tersinggung" value="3" <?php if($mudah_tersinggung=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Berkeringat (misal: tangan berkeringat) tanpa stimulasi oleh cuaca maupun latihan fisik</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="berkeringat" value="0" <?php if($berkeringat=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="berkeringat" value="1" <?php if($berkeringat=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="berkeringat" value="2" <?php if($berkeringat=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="berkeringat" value="3" <?php if($berkeringat=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Ketakutan tanpa alasan yang jelas</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="ketakutan_tnp_alasan" value="0" <?php if($ketakutan_tnp_alasan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan_tnp_alasan" value="1" <?php if($ketakutan_tnp_alasan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan_tnp_alasan" value="2" <?php if($ketakutan_tnp_alasan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan_tnp_alasan" value="3" <?php if($ketakutan_tnp_alasan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa hidup tidak berharga</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="hidup_tdk_berharga" value="0" <?php if($hidup_tdk_berharga=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tdk_berharga" value="1" <?php if($hidup_tdk_berharga=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tdk_berharga" value="2" <?php if($hidup_tdk_berharga=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tdk_berharga" value="3" <?php if($hidup_tdk_berharga=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Sulit untuk beristirahat</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_istirahat" value="0" <?php if($sulit_istirahat=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_istirahat" value="1" <?php if($sulit_istirahat=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_istirahat" value="2" <?php if($sulit_istirahat=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_istirahat" value="3" <?php if($sulit_istirahat=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kesulitan dalam menelan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_menelan" value="0" <?php if($sulit_menelan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_menelan" value="1" <?php if($sulit_menelan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_menelan" value="2" <?php if($sulit_menelan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_menelan" value="3" <?php if($sulit_menelan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak dapat menikmati hal-hal yang saya lakukan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_menikmati" value="0" <?php if($tidak_menikmati=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_menikmati" value="1" <?php if($tidak_menikmati=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_menikmati" value="2" <?php if($tidak_menikmati=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_menikmati" value="3" <?php if($tidak_menikmati=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Perubahan kegiatan jantung dan denyut nadi tanpa stimulasi oleh latihan fisik</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="perubahan_jantung" value="0" <?php if($perubahan_jantung=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="perubahan_jantung" value="1" <?php if($perubahan_jantung=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="perubahan_jantung" value="2" <?php if($perubahan_jantung=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="perubahan_jantung" value="3" <?php if($perubahan_jantung=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa hilang harapan dan putus asa</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="hilang_harapan" value="0" <?php if($hilang_harapan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="hilang_harapan" value="1" <?php if($hilang_harapan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="hilang_harapan" value="2" <?php if($hilang_harapan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="hilang_harapan" value="3" <?php if($hilang_harapan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah marah</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_marah" value="0" <?php if($mudah_marah=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_marah" value="1" <?php if($mudah_marah=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_marah" value="2" <?php if($mudah_marah=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_marah" value="3" <?php if($mudah_marah=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah panik</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_panik" value="0" <?php if($mudah_panik=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_panik" value="1" <?php if($mudah_panik=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_panik" value="2" <?php if($mudah_panik=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_panik" value="3" <?php if($mudah_panik=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Kesulitan untuk tenang setelah sesuatu yang mengganggu</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_tenang" value="0" <?php if($sulit_tenang=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_tenang" value="1" <?php if($sulit_tenang=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_tenang" value="2" <?php if($sulit_tenang=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_tenang" value="3" <?php if($sulit_tenang=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Takut diri terhambat oleh tugas-tugas yang tidak biasa dilakukan </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="takut_terhambat" value="0" <?php if($takut_terhambat=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="takut_terhambat" value="1" <?php if($takut_terhambat=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="takut_terhambat" value="2" <?php if($takut_terhambat=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="takut_terhambat" value="3" <?php if($takut_terhambat=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Sulit untuk antusias pada banyak hal</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_antusias" value="0" <?php if($sulit_antusias=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_antusias" value="1" <?php if($sulit_antusias=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_antusias" value="2" <?php if($sulit_antusias=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_antusias" value="3" <?php if($sulit_antusias=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Sulit mentoleransi gangguan-gangguan terhadap hal yang sedang dilakukan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_mentoleransi" value="0" <?php if($sulit_mentoleransi=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_mentoleransi" value="1" <?php if($sulit_mentoleransi=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_mentoleransi" value="2" <?php if($sulit_mentoleransi=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_mentoleransi" value="3" <?php if($sulit_mentoleransi=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Berada pada keadaan tegang</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tegang" value="0" <?php if($tegang=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tegang" value="1" <?php if($tegang=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tegang" value="2" <?php if($tegang=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tegang" value="3" <?php if($tegang=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa tidak berharga</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_berharga" value="0" <?php if($tidak_berharga=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_berharga" value="1" <?php if($tidak_berharga=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_berharga" value="2" <?php if($tidak_berharga=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_berharga" value="3" <?php if($tidak_berharga=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak dapat memaklumi hal apapun yang menghalangi anda untuk menyelesaikan hal yang sedang Anda lakukan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_memaklumi" value="0" <?php if($tidak_memaklumi=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_memaklumi" value="1" <?php if($tidak_memaklumi=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_memaklumi" value="2" <?php if($tidak_memaklumi=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_memaklumi" value="3" <?php if($tidak_memaklumi=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Ketakutan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="ketakutan" value="0" <?php if($ketakutan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan" value="1" <?php if($ketakutan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan" value="2" <?php if($ketakutan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="ketakutan" value="3" <?php if($ketakutan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Tidak ada harapan untuk masa depan</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="tidak_ada_harapan" value="0" <?php if($tidak_ada_harapan=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_ada_harapan" value="1" <?php if($tidak_ada_harapan=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_ada_harapan" value="2" <?php if($tidak_ada_harapan=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="tidak_ada_harapan" value="3" <?php if($tidak_ada_harapan=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Merasa hidup tidak berarti </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="hidup_tidak_berarti" value="0" <?php if($hidup_tidak_berarti=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tidak_berarti" value="1" <?php if($hidup_tidak_berarti=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tidak_berarti" value="2" <?php if($hidup_tidak_berarti=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="hidup_tidak_berarti" value="3" <?php if($hidup_tidak_berarti=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Mudah gelisah</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="mudah_gelisah" value="0" <?php if($mudah_gelisah=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_gelisah" value="1" <?php if($mudah_gelisah=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_gelisah" value="2" <?php if($mudah_gelisah=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="mudah_gelisah" value="3" <?php if($mudah_gelisah=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Khawatir dengan situasi saat diri Anda mungkin menjadi panik dan mempermalukan diri sendiri </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="khawatir_panik" value="0" <?php if($khawatir_panik=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="khawatir_panik" value="1" <?php if($khawatir_panik=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="khawatir_panik" value="2" <?php if($khawatir_panik=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="khawatir_panik" value="3" <?php if($khawatir_panik=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Gemetar</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="gemetar" value="0" <?php if($gemetar=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="gemetar" value="1" <?php if($gemetar=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="gemetar" value="2" <?php if($gemetar=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="gemetar" value="3" <?php if($gemetar=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <label class="statement">Sulit untuk meningkatkan inisiatif dalam melakukan sesuatu</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="sulit_inisiatif" value="0" <?php if($sulit_inisiatif=="0"):?>checked="checked" <?php endif;?> required>
                      <label>0</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_inisiatif" value="1" <?php if($sulit_inisiatif=="1"):?>checked="checked" <?php endif;?>>
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_inisiatif" value="2" <?php if($sulit_inisiatif=="2"):?>checked="checked" <?php endif;?>>
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="sulit_inisiatif" value="3" <?php if($sulit_inisiatif=="3"):?>checked="checked" <?php endif;?>>
                      <label>3</label>
                    </li>
                  </ul>
                  <br /> 
                <input type="hidden" id="no_pendaftaran" name="no_pendaftaran" value="<?php echo $no_pendaftaran;?>"> 
                <br />
                  <p style="margin-top: 5px; font-size: small; margin-bottom: 30px;">
                    Terima kasih telah menjawab pertanyaan pada gform dan tes screening dengan jujur. Silakan tunggu informasi lebih lanjut dari tim Ruang Berproses 😊
                  </p>

                  <button class="btn btn--radius-2 btn--red" type="submit" name="update">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
