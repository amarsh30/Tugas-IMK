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
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Menambah Data Absensi Siswa</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <form action="" method="post" id="formabsen">
                            <input type="hidden" name="idguru" id="idguru" value="<?=$data['id']?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="">
                                        <button type="button" class="btn btn-secondary my-4">Daftar Hadir Siswa</button>
                                        <select class="btn btn-primary dropdown-toggle mx-3" name="pertemuan" id="pertemuan" required>
                                            <option value="1" selected>Pertemuan Ke : 1</option>
                                            <option value="2">Pertemuan Ke : 2</option>
                                            <option value="3">Pertemuan Ke : 3</option>
                                            <option value="4">Pertemuan Ke : 4</option>
                                            <option value="5">Pertemuan Ke : 5</option>
                                            <option value="6">Pertemuan Ke : 6</option>
                                            <option value="7">Pertemuan Ke : 7</option>
                                            <option value="8">Pertemuan Ke : 8</option>
                                            <option value="9">Pertemuan Ke : 9</option>
                                            <option value="10">Pertemuan Ke : 10</option>
                                            <option value="11">Pertemuan Ke : 11</option>
                                            <option value="12">Pertemuan Ke : 12</option>
                                            <option value="13">Pertemuan Ke : 13</option>
                                            <option value="14">Pertemuan Ke : 14</option>
                                            <option value="15">Pertemuan Ke : 15</option>
                                            <option value="16">Pertemuan Ke : 16</option>
                                            <select>
                                    </div>
                                    <div class="date-absence my-3">
                                        <p>Tanggal</p>
                                        <input type="date" class="form-control" id="tgl" name="tgl"
                                            value="<?=date("Y-m-d")?>" required>
                                    </div>
                                    <div class="grade-absence my-3">
                                        <p>Kelas</p>
                                        <select class="form-select" id="kelas" name="kelas" onchange="gantisiswa()"
                                            required>
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
                                    <div class="name-absence my-3">
                                        <p>Nama Siswa</p>
                                        <select class="form-select" id="siswa" name="siswa"  onchange="gantinis()" required>
                                            <option value="">-- Pilih Siswa --</option>
                                            <?php
                                            $data = mysqli_query($koneksi,"SELECT * FROM tbl_siswa WHERE deleted=0 AND kelas='7A' ");
                                            foreach ($data as $d) {
                                                echo "<option value='".$d['id']."'>".$d['nama']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="nis-absence">
                                        <p>NIS</p>
                                        <input class="form-control" type="text" name="nis" id="nis" value="" readonly
                                            style="background-color:white" required>
                                    </div>
                                    <div class="description-absence my-5 d-flex justify-content-between">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="statushadir" id="hadir"
                                                value="H" checked>
                                            <label class="form-check-label" for="hadir">Hadir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="statushadir" id="sakit"
                                                value="S">
                                            <label class="form-check-label" for="sakit">Sakit</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="statushadir" id="izin"
                                                value="I">
                                            <label class="form-check-label" for="inlineRadio1">Izin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="statushadir" id="alpa"
                                                value="A">
                                            <label class="form-check-label" for="alpa">Tanpa Keterangan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button name="saveSiswa" type="button" class="btn btn-primary" onclick="savedata()">Tambah
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
    function gantisiswa() {
        $.ajax({
            url: "absensi/ambilsiswa.php",
            data: { "value": $("#kelas").val() },
            type: "post",
            success: function(data){
                $('#nis').val('');
                $('#siswa').find('option').remove();
                $('#siswa').append('<option value="">-- Pilih Siswa --</option>');
                $('#siswa').append(data);
            }
        });
    }

    function gantinis(){
        $.ajax({
            url: "absensi/ambilnis.php",
            data: { "value": $("#siswa").val() },
            type: "post",
            success: function(data){
                $('#nis').val(data);
            }
        });
    }

    function savedata() {
        Swal.fire({
            title: 'Apakah Anda Ingin Menambah <br>Data Absen Ini ?',
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
    $save= mysqli_query($koneksi,"INSERT INTO tbl_absensi VALUES(NULL,'$_POST[siswa]','$_POST[idguru]','$_POST[tgl]','$_POST[pertemuan]','$_POST[statushadir]') ");
    if ($save) {
        echo "
        <script type='text/javascript'>
            window.location.replace('?p=absensi');  
        </script>";
        }

    }
?>