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
                <!-- <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        
                    </div>
                </div> -->
                <div class="card-body">
                        <table width="100%" border=0>
                            <tr>
                                <td><h4 class="card-title">Daftar Data Absensi Siswa</h4></td>
                                <td align="right"><a href="?p=absensi&h=add" class="btn btn-primary">Tambah Data Baru</a></td>
                            </tr>
                        </table><br>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="3%">No.</th>
                                    <th width="15%" style="text-align: center;">NIS</th>
                                    <th width="40%" style="text-align: center;">Nama Siswa</th>
                                    <th width="15%" style="text-align: center;">Tanggal</th>
                                    <th width="15%" style="text-align: center;">Pertemuan</th>
                                    <th width="15%" style="text-align: center;">Status Kehadiran</th>
                                    <th width="10%" style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                $datamst = mysqli_query($koneksi,"SELECT tbl_absensi.id, tbl_absensi.pertemuan, tbl_absensi.tgl_absen, tbl_absensi.keterangan, tbl_siswa.nis,     tbl_siswa.nama, tbl_siswa.kelas, tbl_guru.nama as namaguru
                                FROM tbl_absensi
                                JOIN tbl_guru ON tbl_guru.id = tbl_absensi.id_guru
                                JOIN tbl_siswa ON tbl_siswa.id = tbl_absensi.id_siswa WHERE tbl_siswa.deleted=0 ORDER BY tbl_absensi.id DESC");
                                foreach ($datamst as $d) {?>
                                <tr>
                                    <td><?=number_format($no++);?></td>
                                    <td><?=$d['nis'];?></td>
                                    <td><?=$d['nama'];?></td>
                                    <td><?= date('d/m/Y', strtotime($d['tgl_absen'])); ?></td>
                                    <td style="text-align: center;"><?=$d['pertemuan'];?></td>
                                    <td style="text-align: center;"><?php if ($d['keterangan'] == 'H') {
                                                echo 'Hadir';
                                            } elseif ($d['keterangan'] == 'S') {
                                                echo 'Sakit';
                                            } elseif ($d['keterangan'] == 'I') {
                                                echo 'Izin';
                                            } elseif ($d['keterangan'] == 'A') {
                                                echo 'Alpa';
                                            } ?></td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="?p=absensi&h=edit&id=<?=$d['id'] ?>">Ubah</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function deletedata(id) {
        Swal.fire({
            title: 'Apakah Anda Ingin Menghapus <br>Data Siswa Ini ?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Ya',
            denyButtonText: `Tidak`,
            confirmButtonColor: '#3A57E8',
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "?p=siswa&h=del&id=" + id;
            }
        })
    }
</script>