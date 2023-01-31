<html>
    <title>LAPORAN ABSENSI SISWA</title>
    <link rel="shortcut icon" href="../../assets/images/logo.png" />
<body>

  <head>
    <link rel="stylesheet" href="style.css" />
  </head>
  <table class="table responsive-3">
  <center><h2 class="text-center">LAPORAN ABSENSI SISWA</h2></center>
    <thead>
      <tr>
        <th class="column-primary" data-header="User"><span>NIS</span></th>
        <th>Nama</th>
        <th>Tanggal Pembayaran</th>
        <th>Jumlah Pembayaran</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../../config/koneksi.php';
      $sql = mysqli_query($koneksi, "SELECT tbl_siswa.nis, tbl_siswa.nama, tbl_pembayaran_spp.tgl_pembayaran,       tbl_pembayaran_spp.total
                    FROM tbl_pembayaran_spp
                    JOIN tbl_siswa ON tbl_siswa.id = tbl_pembayaran_spp.id_siswa WHERE tbl_siswa.deleted=0");
      foreach ($sql as $data) {
      ?>
        <tr>
          <td data-header="NIS"><?= $data['nis']; ?></td>
          <td data-header="Nama"><?= $data['nama']; ?></td>
          <td data-header="TanggalBayar" style="text-align: center;"><?= date('d F Y', strtotime($data['tgl_pembayaran'])); ?></td>
          <td data-header="JumlahlBayar" style="text-align: right;"><?= "Rp. " . number_format($data['total'], 2, ',', '.'); ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>