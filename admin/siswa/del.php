<?php 
$del = mysqli_query($koneksi,"UPDATE tbl_siswa SET deleted=1 WHERE id=$_GET[id]");
if ($del) {
	echo "
	<script type='text/javascript'>
	    window.location.replace('?p=siswa');
	</script>";
}

 ?>