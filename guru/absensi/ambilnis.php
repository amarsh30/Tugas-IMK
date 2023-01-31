<?php
    include '../../config/koneksi.php';

    $option = '';
    $data = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE deleted=0 AND id='".$_POST['value']."' ");
    foreach($data as $d) {
        $option .= $d['nis'];
    } 
    echo $option;
?>