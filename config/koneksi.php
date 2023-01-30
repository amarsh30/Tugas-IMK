<?php 
$koneksi = mysqli_connect("103.93.56.27","tugasimk","satuduatiga","db_sisekolah");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>