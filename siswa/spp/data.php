<?php
    $bayar1=0;
    $bayar2=0;
    $bayar3=0;
    $bayar4=0;
    $bayar5=0;
    $bayar6=0;
    $bayar7=0;
    $bayar8=0;
    $bayar9=0;
    $bayar10=0;
    $bayar11=0;
    $bayar12=0;

    $dataspp = mysqli_query($koneksi,"select * from tbl_pembayaran_spp");
    while($spp = mysqli_fetch_array($dataspp)){
        if($data['id'] == $spp['id_siswa']){
            if($spp['bulan_bayar'] == '1'){
                $bayar1=1;
            }
            if($spp['bulan_bayar'] == '2'){
                $bayar2=1;
            }
            if($spp['bulan_bayar'] == '3'){
                $bayar3=1;
            }
            if($spp['bulan_bayar'] == '4'){
                $bayar4=1;
            }
            if($spp['bulan_bayar'] == '5'){
                $bayar5=1;
            }
            if($spp['bulan_bayar'] == '6'){
                $bayar6=1;
            }
            if($spp['bulan_bayar'] == '7'){
                $bayar7=1;
            }
            if($spp['bulan_bayar'] == '8'){
                $bayar8=1;
            }
            if($spp['bulan_bayar'] == '9'){
                $bayar9=1;
            }
            if($spp['bulan_bayar'] == '10'){
                $bayar10=1;
            }
            if($spp['bulan_bayar'] == '11'){
                $bayar11=1;
            }
            if($spp['bulan_bayar'] == '12'){
                $bayar12=1;
            }
        }
    }
?>
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
                                <input type="hidden" name="idsiswa" value="<?=$data['id']?>">
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">JANUARI</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar1=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('1')"
                                                        id="imagecheck1">
                                                    <input type="hidden" name="status1" id="status1" value="0">
                                                    <input type="hidden" name="statusbayar1" id="statusbayar1"
                                                        value="<?=$bayar1?>">
                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar1=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar1=='0'?'Belum Lunas':'Lunas'?>
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
                                                    <img src="../assets/images/<?=$bayar2=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="belum-lunas" width="50" onclick="rubahstatus('2')"
                                                        id="imagecheck2">
                                                    <input type="hidden" name="status2" id="status2" value="0">
                                                    <input type="hidden" name="statusbayar2" id="statusbayar2"
                                                        value="<?=$bayar2?>">
                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar2=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar2=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">MARET</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar3=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('3')"
                                                        id="imagecheck3">
                                                    <input type="hidden" name="status3" id="status3" value="0">
                                                    <input type="hidden" name="statusbayar3" id="statusbayar3"
                                                        value="<?=$bayar3?>">
                                                </div>
                                                <div class="border border-secondary-light">
                                                    <<p
                                                        class="card-text text-white <?=$bayar3=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar3=='0'?'Belum Lunas':'Lunas'?>
                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">APRIL</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar4=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('4')"
                                                        id="imagecheck4">
                                                    <input type="hidden" name="status4" id="status4" value="0">
                                                    <input type="hidden" name="statusbayar4" id="statusbayar4"
                                                        value="<?=$bayar4?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar4=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar4=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
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
                                                    <img src="../assets/images/<?=$bayar5=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('5')"
                                                        id="imagecheck5">
                                                    <input type="hidden" name="status5" id="status5" value="0">
                                                    <input type="hidden" name="statusbayar5" id="statusbayar5"
                                                        value="<?=$bayar5?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar5=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar5=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">JUNI</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar6=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="belum-lunas" width="50" onclick="rubahstatus('6')"
                                                        id="imagecheck6">
                                                    <input type="hidden" name="status6" id="status6" value="0">
                                                    <input type="hidden" name="statusbayar6" id="statusbayar6"
                                                        value="<?=$bayar6?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar6=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar6=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">JULI</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar7=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('7')"
                                                        id="imagecheck7">
                                                    <input type="hidden" name="status7" id="status7" value="0">
                                                    <input type="hidden" name="statusbayar7" id="statusbayar7"
                                                        value="<?=$bayar7?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar7=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar7=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">AGUSTUS</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar8=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('8')"
                                                        id="imagecheck8">
                                                    <input type="hidden" name="status8" id="status8" value="0">
                                                    <input type="hidden" name="statusbayar8" id="statusbayar8"
                                                        value="<?=$bayar8?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar8=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar8=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
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
                                                    <img src="../assets/images/<?=$bayar9=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('9')"
                                                        id="imagecheck9">
                                                    <input type="hidden" name="status9" id="status9" value="0">
                                                    <input type="hidden" name="statusbayar9" id="statusbayar9"
                                                        value="<?=$bayar9?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar9=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar9=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">OKTOBER</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar10=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="belum-lunas" width="50" onclick="rubahstatus('10')"
                                                        id="imagecheck10">
                                                    <input type="hidden" name="status10" id="status10" value="0">
                                                    <input type="hidden" name="statusbayar10" id="statusbayar10"
                                                        value="<?=$bayar10?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar10=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar10=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">NOVEMBER</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar11=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('11')"
                                                        id="imagecheck11">
                                                    <input type="hidden" name="status11" id="status11" value="0">
                                                    <input type="hidden" name="statusbayar11" id="statusbayar11"
                                                        value="<?=$bayar11?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar11=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar11=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card border border-secondary">
                                            <div class="card-body-month">
                                                <h5 class="card-title mt-2 ms-3 fw-bold">DESEMBER</h5>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img src="../assets/images/<?=$bayar12=='0'?'belum-':''?>lunas-icon.png"
                                                        alt="lunas" width="50" onclick="rubahstatus('12')"
                                                        id="imagecheck12">
                                                    <input type="hidden" name="status12" id="status12" value="0">
                                                    <input type="hidden" name="statusbayar12" id="statusbayar12"
                                                        value="<?=$bayar12?>">

                                                </div>
                                                <div class="border border-secondary-light">
                                                    <p
                                                        class="card-text text-white <?=$bayar12=='0'?'bg-danger':'bg-success'?> text-center fs-5">
                                                        <?=$bayar12=='0'?'Belum Lunas':'Lunas'?>
                                                    </p>
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
                                <input type="text" id="inputTotalBayar" name="inputTotalBayar" class="form-control"
                                    placeholder="" value="0" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 input-bayar d-flex mb-3">
                            <div class="col-auto">
                                <label for="inputBayar" class="col-form-label fw-normal fs-5">Bayar Rp.</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="inputBayar" name="inputBayar" class="form-control" placeholder=""
                                    value="0" onkeypress="return checkNumber(event)" onkeyup="hitungbayar()">
                            </div>
                        </div>
                        <div class="col-md-3 input-kembalian d-flex mb-3">
                            <div class="col-auto">
                                <label for="inputKembalian" class="col-form-label fw-normal fs-5">Kembalian Rp. </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="inputKembalian" name="inputKembalian" class="form-control"
                                    placeholder="" value="0" readonly>
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
    function hitungbayar() {
        var total = $("#inputTotalBayar").val();
        if ($("#inputBayar").val() == '') {
            var bayar = 0;
        } else {
            var bayar = $("#inputBayar").val();
        }
        var kembali = parseInt(bayar) - parseInt(total);
        $('#inputKembalian').val(kembali);
    }

    function rubahstatus(no) {
        var kondisi = $("#statusbayar" + no).val();
        var total = $("#inputTotalBayar").val();
        var bayar = $("#inputBayar").val();
        if (kondisi == 0) {
            if ($("#status" + no).val() == "0") {
                $("#status" + no).val('1');
                $("#imagecheck" + no).attr("src", "../assets/images/lunas-icon.png");
                total = parseInt(total) + parseInt(450000);
            } else {
                $("#status" + no).val('0');
                $("#imagecheck" + no).attr("src", "../assets/images/belum-lunas-icon.png");
                total = parseInt(total) - parseInt(450000);
            }
            $("#inputTotalBayar").val(total);
        }
        var kembali = parseInt(bayar) - parseInt(total);
        $('#inputKembalian').val(kembali);
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
    $total = $_POST['inputTotalBayar'];
    $bayar = $_POST['inputBayar'];
    $kembali = $_POST['inputKembalian'];

    $bulan1 = $_POST['status1'];
    $statusbulan1 = $_POST['statusbayar1'];
    if($bulan1 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'1','2023','450000','$bayar','$kembali') ");
    }

    $bulan2 = $_POST['status2'];
    $statusbulan2 = $_POST['statusbayar2'];
    if($bulan2 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'2','2023','450000','$bayar','$kembali') ");
    }

    $bulan3 = $_POST['status3'];
    $statusbulan3 = $_POST['statusbayar3'];
    if($bulan3 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'3','2023','450000','$bayar','$kembali') ");
    }

    $bulan4 = $_POST['status4'];
    $statusbulan4 = $_POST['statusbayar4'];
    if($bulan4 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'4','2023','450000','$bayar','$kembali') ");
    }

    $bulan5 = $_POST['status5'];
    $statusbulan5 = $_POST['statusbayar5'];
    if($bulan5 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'5','2023','450000','$bayar','$kembali') ");
    }

    $bulan6 = $_POST['status6'];
    $statusbulan6 = $_POST['statusbayar6'];
    if($bulan6 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'6','2023','450000','$bayar','$kembali') ");
    }

    $bulan7 = $_POST['status7'];
    $statusbulan7 = $_POST['statusbayar7'];
    if($bulan7 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'7','2023','450000','$bayar','$kembali') ");
    }

    $bulan8 = $_POST['status8'];
    $statusbulan8 = $_POST['statusbayar8'];
    if($bulan8 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'8','2023','450000','$bayar','$kembali') ");
    }

    $bulan9 = $_POST['status9'];
    $statusbulan9 = $_POST['statusbayar9'];
    if($bulan9 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'9','2023','450000','$bayar','$kembali') ");
    }

    $bulan10 = $_POST['status10'];
    $statusbulan10 = $_POST['statusbayar10'];
    if($bulan10 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'10','2023','450000','$bayar','$kembali') ");
    }

    $bulan11 = $_POST['status11'];
    $statusbulan11 = $_POST['statusbayar11'];
    if($bulan11 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'11','2023','450000','$bayar','$kembali') ");
    }
    
    $bulan12 = $_POST['status12'];
    $statusbulan12 = $_POST['statusbayar12'];
    if($bulan12 == '1'){
        $save= mysqli_query($koneksi,"INSERT INTO tbl_pembayaran_spp VALUES(NULL,'$_POST[idsiswa]',NOW(),'12','2023','450000','$bayar','$kembali') ");
    }

    if ($save) {
        echo "
            <script type='text/javascript'>
                window.location.replace('?p=spp');  
            </script>";
        }

    }
?>