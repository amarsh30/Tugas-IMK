<?php
    include '../../config/koneksi.php';

    $option = '';
    $data = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE deleted=0 AND kelas='".$_POST['value']."' ");
    foreach($data as $d) {
        $option .= '<option value="'.$d['id'].'">'.$d['nama'].'</option>';
    } 
    echo $option;
?>