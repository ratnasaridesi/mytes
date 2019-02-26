<?php

include 'koneksi.php';

$nik_nsabah			= $_POST['nik_nasabah'];
$tanggal			= $_POST['tanggal'];
$jumlah_pinjaman	= $_POST['jumlah_pinjaman'];
$jangka_waktu		= $_POST['jangka_waktu'];
$bunga				= $_POST['bunga'];


$update			= mysqli_query($conn, "UPDATE peminjaman SET tanggal = 'tanggal', jumlah_pinjaman = '$jumlah_pinjaman', jangka_waktu = 'jangka_waktu', bunga = '$bunga' WHERE nik_nasabah = '$nik_nasabah'");

if($update){
	echo "<script>alert('Data Berhasil Diedit');document.location.href='pinjaman.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Diedit');document.location.href='edit_pinjaman.php?nik_nasabah='$nik_nasabah''</script>";
		
}
?>