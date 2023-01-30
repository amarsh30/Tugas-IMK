<?php
session_start();
include 'config/koneksi.php';
if(isset($_SESSION['admin'])){
    echo "<script type='text/javascript'>
    window.location.replace('admin/index.php');
    </script>";
}elseif(isset($_SESSION['guru'])){
    echo "<script type='text/javascript'>
    window.location.replace('guru/index.php');
    </script>";
}elseif(isset($_SESSION['siswa'])){
    echo "<script type='text/javascript'>
    window.location.replace('siswa/index.php');
    </script>";
}
?>
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Masuk | Aplikasi SI BPK Penabur</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="assets/images/logo.png" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="assets/css/core/libs.min.css" />
      
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="assets/css/hope-ui.min.css?v=1.2.0" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="assets/css/custom.min.css?v=1.2.0" />
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="assets/css/dark.min.css"/>
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="assets/css/customizer.min.css" />
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="assets/css/rtl.min.css"/>

      <!-- Sweet Alert -->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">            
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <a href="#" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <img src="assets/images/logo.png" style="width:70px;">
                              <!--logo End-->                              <h4 class="logo-title ms-3">BPK Penabur</h4>
                           </a>
                           <h2 class="mb-2 text-center">Masuk</h2>
                           <p class="text-center">Masukkan Email dan Kata Sandi</p>
                           <form method="post" action="">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder=" " required value="<?= isset($_SESSION['saveemail']) ? $_SESSION['saveemail'] : '' ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Kata Sandi</label>
                                       <input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder=" " required>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="checkingat" name="checkingat" <?= isset($_SESSION['saveemail']) ? 'checked' : '' ?>>
                                       <label class="form-check-label" for="checkingat">Ingat saya?</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Masuk</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="assets/images/auth/01.png" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
      </div>
    
      <?php 
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if($_POST['checkingat'] == 'on'){
                $_SESSION['saveemail'] = $_POST['email'];
            }else{
                unset($_SESSION['saveemail']);
            }
            $pass= md5($_POST['password']);
            $sqlCek = mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE email='$_POST[email]' AND password='$pass'");
            $jml = mysqli_num_rows($sqlCek);
            $d = mysqli_fetch_array($sqlCek);
        
            if ($jml > 0) {
                $_SESSION['admin']= $d['id'];
                echo "
                <script type='text/javascript'>
                window.location.replace('admin/index.php');   
                </script>";
            }else{
                $sqlCek = mysqli_query($koneksi,"SELECT * FROM tbl_guru WHERE email='$_POST[email]' AND password='$pass'");
                $jml = mysqli_num_rows($sqlCek);
                $d = mysqli_fetch_array($sqlCek);
                if ($jml > 0) {
                    $_SESSION['guru']= $d['id'];
                    echo "
                    <script type='text/javascript'>
                    window.location.replace('guru/index.php');
                    </script>";
                }else{
                    $sqlCek = mysqli_query($koneksi,"SELECT * FROM tbl_siswa WHERE email='$_POST[email]' AND password='$pass'");
                    $jml = mysqli_num_rows($sqlCek);
                    $d = mysqli_fetch_array($sqlCek);
                    if ($jml > 0) {
                        $_SESSION['siswa']= $d['id'];
                        echo "
                        <script type='text/javascript'>
                        window.location.replace('siswa/index.php');
                        </script>";
                    }else{
                        echo "
                        <script type='text/javascript'>
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Username / Password Salah!',
                            confirmButtonColor: '#3A57E8',
                          })
                        </script>";
                    }
                }
            }
        }
        ?>

    <!-- Library Bundle Script -->
    <script src="assets/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="assets/js/core/external.min.js"></script>
    
    <!-- Widgetchart Script -->
    <script src="assets/js/charts/widgetcharts.js"></script>
    
    <!-- mapchart Script -->
    <script src="assets/js/charts/vectore-chart.js"></script>
    <script src="assets/js/charts/dashboard.js" ></script>
    
    <!-- fslightbox Script -->
    <script src="assets/js/plugins/fslightbox.js"></script>
    
    <!-- Settings Script -->
    <script src="assets/js/plugins/setting.js"></script>
    
    <!-- Slider-tab Script -->
    <script src="assets/js/plugins/slider-tabs.js"></script>
    
    <!-- Form Wizard Script -->
    <script src="assets/js/plugins/form-wizard.js"></script>
    
    <!-- AOS Animation Plugin-->
    
    <!-- App Script -->
    <script src="assets/js/hope-ui.js" defer></script>
  </body>
</html>