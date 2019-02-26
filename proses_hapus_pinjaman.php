<?php

include 'koneksi.php';

$nik_nasabah		= $_GET['nik_nasabah'];

$hapus			= mysqli_query($conn, "DELETE FROM peminjaman WHERE nik_nasabah = '$nik_nasabah'");

if($hapus){
	echo "<script>alert('Data Berhasil Dihapus');document.location.href='pinjaman.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Dihapus');document.location.href='pinjaman.php''</script>";
		
}

?>