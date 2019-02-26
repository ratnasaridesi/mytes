<?php

include 'koneksi.php';

$no_nasabah		= $_GET['no_nasabah'];

$hapus			= mysqli_query($conn, "DELETE FROM data_nasabah WHERE no_nasabah = '$no_nasabah'");

if($hapus){
	echo "<script>alert('Data Berhasil Dihapus');document.location.href='nasabah.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Dihapus');document.location.href='nasabah.php''</script>";
		
}

?>