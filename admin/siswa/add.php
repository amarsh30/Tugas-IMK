<div class="position-relative iq-banner">
    <!--Nav Start-->
    <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
        <div class="container-fluid navbar-inner">
            <a href="../dashboard/index.html" class="navbar-brand">
                <!--Logo start-->
                <img src="../assets/images/logo.png" style="width:28px;">
                </svg>
                <!--logo End-->
                <h4 class="logo-title">BPK Penabur</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20px" height="20px" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                    </svg>
                </i>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="mt-2 navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/images/avatars/01.png" alt="User-Profile"
                                class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                            <div class="caption ms-3 d-none d-md-block ">
                                <h6 class="mb-0 caption-title"><?=$data['nama']?></h6>
                                <p class="mb-0 caption-sub-title">Admin</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="logout()">Keluar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> <!-- Nav Header Component Start -->
    <div class="iq-navbar-header" style="height: 215px;">
        <div class="container-fluid iq-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-wrap d-flex justify-content-between align-items-center">
                        <div>
                            <h1>Data Siswa</h1>
                            <p>Pengelolaan Data Siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-header-img">
            <img src="../assets/images/dashboard/top-header.png" alt="header"
                class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        </div>
    </div> <!-- Nav Header Component End -->
    <!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Menambah Data Siswa</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <form action="" method="post" id="formsiswa">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="nis">NIS</label>
                                    <input type="text" class="form-control" id="nis" name="nis" onkeypress="return checkNumber(event)" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="jk">Jenis Kelamin</label><br>
                                    <input type="radio" id="jkl" name="jk" class="form-check-input" value="L" checked>
                                    <label class="form-check-label" for="jkl" value="P">Laki-laki</label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="jkp" name="jk" class="form-check-input">
                                    <label class="form-check-label" for="jkp">Perempuan</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="telp">No Telepon</label>
                                    <input type="text" class="form-control" id="telp" name="telp" onkeypress="return checkNumber(event)" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="kelas">Kelas</label>
                                    <select class="form-select" id="kelas" name="kelas" aria-label="Floating label select example">
                                        <option value="7A" selected>7A</option>
                                        <option value="7B">7B</option>
                                        <option value="7C">7C</option>
                                        <option value="8A">8A</option>
                                        <option value="8B">8B</option>
                                        <option value="8C">8C</option>
                                        <option value="9A">9A</option>
                                        <option value="9B">9B</option>
                                        <option value="9C">9C</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" required rows="3"></textarea>
                                </div>
                            </div>
                            <button name="saveSiswa" type="button" class="btn btn-primary" onclick="savedata()">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function savedata(){
        Swal.fire({
            title: 'Apakah Anda Ingin Menambah <br>Data Siswa Ini ?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Ya',
            denyButtonText: `Tidak`,
            confirmButtonColor: '#3A57E8',
        }).then((result) => {
            if (result.isConfirmed) {
                $("#formsiswa").submit();
            }
        })
    }
</script>

<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $pass= md5($_POST['nis']);

    $save= mysqli_query($koneksi,"INSERT INTO tbl_siswa VALUES(NULL,'$_POST[nis]','$_POST[nama]','$_POST[kelas]','$_POST[jk]','$_POST[telp]','$_POST[alamat]','$_POST[email]','$pass','0') ");
    if ($save) {
        echo "
        <script type='text/javascript'>
            window.location.replace('?p=siswa');  
        </script>";
        }

    }
?>