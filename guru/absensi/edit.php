<?php 
	$edit = mysqli_query($koneksi,"SELECT tbl_absensi.tgl_absen, tbl_absensi.pertemuan, tbl_absensi.keterangan, tbl_siswa.nis,     tbl_siswa.nama, tbl_siswa.kelas, tbl_guru.nama as namaguru
    FROM tbl_absensi
    JOIN tbl_guru ON tbl_guru.id = tbl_absensi.id_guru
    JOIN tbl_siswa ON tbl_siswa.id = tbl_absensi.id_siswa WHERE tbl_siswa.deleted=0 AND tbl_absensi.id='$_GET[id]' ");
	foreach ($edit as $d)?>
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
                                <p class="mb-0 caption-sub-title">Guru</p>
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
                            <h1>Absensi Siswa</h1>
                            <p>Pengelolaan Data Absensi Siswa</p>
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
                        <h4 class="card-title">Mengubah Data Absensi Siswa</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <form action="" method="post" id="formabsen">
                            <input type="hidden" name="idguru" id="idguru" value="<?=$data['id']?>">
                            <input type="hidden" name="idabsen" id="idabsen" value="<?=$_GET['id']?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="">
                                        <button type="button" class="btn btn-secondary my-4">Daftar Hadir Siswa</button>
                                        <input type="text" class="btn btn-primary dropdown-toggle mx-3" value="Pertemuan Ke : <?=$d['pertemuan']?>">
                                    </div>
                                    <div class="date-absence my-3">
                                        <p>Tanggal</p>
                                        <input type="date" class="form-control" id="tgl" name="tgl"
                                            value="<?=$d['tgl_absen']?>" required>
                                    </div>
                                    <div class="grade-absence my-3">
                                        <p>Kelas</p>
                                        <input type="text" class="form-control" value="<?=$d['kelas']?>" readonly style="background-color:white" required>
                                    </div>
                                    <div class="name-absence my-3">
                                        <p>Nama Siswa</p>
                                        <input type="text" class="form-control" value="<?=$d['nama']?>" readonly style="background-color:white" required>
                                    </div>
                                    <div class="nis-absence">
                                        <p>NIS</p>
                                        <input class="form-control" type="text" name="nis" id="nis" value="<?=$d['nis']?>" readonly
                                            style="background-color:white" required>
                                    </div>
                                    <div class="description-absence my-5 d-flex justify-content-between">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="statushadir" id="hadir"
                                                value="H" <?=$d['keterangan']=='H'?'checked':''?>>
                                            <label class="form-check-label" for="hadir">Hadir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="statushadir" id="sakit"
                                                value="S" <?=$d['keterangan']=='S'?'checked':''?>>
                                            <label class="form-check-label" for="sakit">Sakit</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="statushadir" id="izin"
                                                value="I" <?=$d['keterangan']=='I'?'checked':''?>>
                                            <label class="form-check-label" for="inlineRadio1">Izin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="statushadir" id="alpa"
                                                value="A" <?=$d['keterangan']=='A'?'checked':''?>>
                                            <label class="form-check-label" for="alpa">Tanpa Keterangan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button name="saveSiswa" type="button" class="btn btn-primary" onclick="savedata()">Ubah
                                Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function savedata() {
        Swal.fire({
            title: 'Apakah Anda Ingin Mengubah <br>Data Absen Ini ?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Ya',
            denyButtonText: `Tidak`,
            confirmButtonColor: '#3A57E8',
        }).then((result) => {
            if (result.isConfirmed) {
                $("#formabsen").submit();
            }
        })
    }
</script>

<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $save= mysqli_query($koneksi,"UPDATE tbl_absensi SET keterangan='$_POST[statushadir]' WHERE id='$_POST[idabsen]'");
    if ($save) {
        echo "
        <script type='text/javascript'>
            window.location.replace('?p=absensi');  
        </script>";
        }

    }
?>