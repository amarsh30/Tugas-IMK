<div class="position-relative iq-banner">
    <!--Nav Start-->
    <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
        <div class="container-fluid navbar-inner">
            <a href="../dashboard/index.html" class="navbar-brand">
                <!--Logo start-->
                <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                        transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)"
                        fill="currentColor" />
                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)"
                        fill="currentColor" />
                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                        transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
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
                                <p class="mb-0 caption-sub-title">Siswa</p>
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
                            <h1>Pembayaran SPP</h1>
                            <p>Pengelolaan Data Pembayaran SPP Siswa</p>
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 input-nis d-flex mb-3">
                            <div class="col-md-3">
                                <label for="inputNis" class="col-form-label fw-bold">NIS</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="inputNis" class="form-control" placeholder="" readonly
                                    value="<?=$data['nis']?>">
                            </div>
                        </div>
                        <div class="col-md-8 input-nama d-flex mb-3">
                            <div class="col-md-3">
                                <label for="inputNama" class="col-form-label fw-bold">Nama</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="inputNama" class="form-control" placeholder="" readonly
                                    value="<?=$data['nama']?>">
                            </div>
                        </div>
                        <div class="col-md-8 input-kelas d-flex mb-3">
                            <div class="col-md-3">
                                <label for="inputKelas" class="col-form-label fw-bold">Kelas</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="inputKelas" class="form-control" placeholder="" readonly
                                    value="<?=$data['kelas']?>">
                            </div>
                        </div>
                        <div class="col-md-8 input__tahun-ajaran d-flex mb-3">
                            <div class="col-md-3">
                                <label for="inputTahunAjaran" class="col-form-label fw-bold">Tahun Ajaran</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="inputTahunAjaran" class="form-control" placeholder="" readonly
                                    value="2022/2023">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-5">
                            <form action="" method="post" id="formspp">
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">JANUARI</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/lunas-icon.png" alt="lunas" width="50" onclick="rubahstatus('1')">
                                                    <input type="text" name="status1" id="status1" value="0">
                                                    <input type="text" name="statusbayar1" id="statusbayar1" value="0">
                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-success text-center fs-5">Lunas
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">FEBRUARI</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="belum-lunas"
                                                        width="50" onclick="rubahstatus('2')">
                                                    <input type="text" name="status2" id="status2" value="0">
                                                    <input type="text" name="statusbayar2" id="statusbayar2" value="0">
                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">MARET</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="lunas"
                                                        width="50" onclick="rubahstatus('3')">
                                                        <input type="text" name="status3" id="status3" value="0">
                                                    <input type="text" name="statusbayar3" id="statusbayar3" value="0">
                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">APRIL</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="lunas"
                                                        width="50" onclick="rubahstatus('4')">
                                                        <input type="text" name="status4" id="status4" value="0">
                                                    <input type="text" name="statusbayar4" id="statusbayar4" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">MEI</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="lunas"
                                                        width="50" onclick="rubahstatus('5')>
                                                        <input type="text" name="status5" id="status5" value="0">
                                                    <input type="text" name="statusbayar5" id="statusbayar5" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">JUNI</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="belum-lunas"
                                                        width="50" onclick="rubahstatus('6')">
                                                        <input type="text" name="status6" id="status6" value="0">
                                                    <input type="text" name="statusbayar6" id="statusbayar6" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">JULI</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="lunas"
                                                        width="50" onclick="rubahstatus('7')">
                                                        <input type="text" name="status7" id="status7" value="0">
                                                    <input type="text" name="statusbayar7" id="statusbayar7" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">AGUSTUS</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="lunas"
                                                        width="50" onclick="rubahstatus('8')">
                                                        <input type="text" name="status8" id="status8" value="0">
                                                    <input type="text" name="statusbayar8" id="statusbayar8" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">SEPTEMBER</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="lunas"
                                                        width="50" onclick="rubahstatus('9')">
                                                        <input type="text" name="status9" id="status9" value="0">
                                                    <input type="text" name="statusbayar9" id="statusbayar9" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">OKTOBER</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="belum-lunas"
                                                        width="50" onclick="rubahstatus('10')">
                                                        <input type="text" name="status10" id="status10" value="0">
                                                    <input type="text" name="statusbayar10" id="statusbayar10" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">NOVEMBER</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="lunas"
                                                        width="50" onclick="rubahstatus('11')">
                                                        <input type="text" name="status11" id="status11" value="0">
                                                    <input type="text" name="statusbayar11" id="statusbayar11" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">DESEMBER</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/belum-lunas-icon.png" alt="lunas"
                                                        width="50" onclick="rubahstatus('12')">
                                                        <input type="text" name="status12" id="status12" value="0">
                                                    <input type="text" name="statusbayar12" id="statusbayar12" value="0">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p class="card-text text-white bg-danger text-center fs-5">Belum
                                                        Lunas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row d-flex mt-3 justify-content-between">
                        <div class="col-md-3 input-total-bayar d-flex mb-3">
                            <div class="col-auto">
                                <label for="inputTotalBayar" class="col-form-label fw-normal fs-5">Total Tagihan Rp.
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="inputTotalBayar" class="form-control" placeholder="" value="0"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-3 input-bayar d-flex mb-3">
                            <div class="col-auto">
                                <label for="inputBayar" class="col-form-label fw-normal fs-5">Bayar Rp.</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="inputBayar" class="form-control" placeholder="" value="0">
                            </div>
                        </div>
                        <div class="col-md-3 input-kembalian d-flex mb-3">
                            <div class="col-auto">
                                <label for="inputKembalian" class="col-form-label fw-normal fs-5">Kembalian Rp. </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="inputKembalian" class="form-control" placeholder="" value="0"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button name=" saveSPP" type="button" class="btn btn-success"
                                onclick="savedata()">Bayar</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function rubahstatus(no){
        var kondisi = $("#statusbayar"+no).val();
    }

    function savedata() {
        Swal.fire({
            title: 'Apakah Anda Ingin <br>Membayar SPP ?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Ya',
            denyButtonText: `Tidak`,
            confirmButtonColor: '#3A57E8',
        }).then((result) => {
            if (result.isConfirmed) {
                $("#formspp").submit();
            }
        })
    }
</script>

<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    // $pass= md5($_POST['nis']);

    // $save= mysqli_query($koneksi,"INSERT INTO tbl_siswa VALUES(NULL,'$_POST[nis]','$_POST[nama]','$_POST[kelas]','$_POST[jk]','$_POST[telp]','$_POST[alamat]','$_POST[email]','$pass','0') ");
    if ($save) {
        echo "
        <script type='text/javascript'>
            window.location.replace('?p=spp');  
        </script>";
        }

    }
?>