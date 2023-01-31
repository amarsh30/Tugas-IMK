<html>
    <title>LAPORAN PEMBAYARAN SPP</title>
    <link rel="shortcut icon" href="../../assets/images/logo.png" />
<body>

    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <table class="table responsive-3">
        <center><h2 class="text-center">LAPORAN PEMBAYARAN SPP</h2></center>
        <thead>
            <tr>
                <th class="column-primary" data-header="User"><span>NIS</span></th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Guru</th>
                <th>Tanggal Absen</th>
                <th>Absen</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../../config/koneksi.php';
            $sql = mysqli_query($koneksi, "SELECT tbl_absensi.tgl_absen, tbl_absensi.keterangan, tbl_siswa.nis,     tbl_siswa.nama, tbl_siswa.kelas, tbl_guru.nama as namaguru
                    FROM tbl_absensi
                    JOIN tbl_guru ON tbl_guru.id = tbl_absensi.id_guru
                    JOIN tbl_siswa ON tbl_siswa.id = tbl_absensi.id_siswa");
            foreach ($sql as $data) {
            ?>
                <tr>
                    <td data-header="NIM"><?= $data['nis']; ?></td>
                    <td data-header="Nama"><?= $data['nama']; ?></td>
                    <td data-header="Kelas"><?= $data['kelas']; ?></td>
                    <td data-header="Guru"><?= $data['namaguru']; ?></td>
                    <td data-header="TanggalAbsen" style="text-align: center;"><?= date('d F Y', strtotime($data['tgl_absen'])); ?></td>
                    <td data-header="Absen"><?php if ($data['keterangan'] == 'H') {
                                                echo 'Hadir';
                                            } elseif ($data['keterangan'] == 'S') {
                                                echo 'Sakit';
                                            } elseif ($data['keterangan'] == 'I') {
                                                echo 'Izin';
                                            } elseif ($data['keterangan'] == 'A') {
                                                echo 'Alpa';
                                            } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>