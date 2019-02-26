<?php

include 'koneksi.php';

$nik_nasabah			= $_POST['nik_nasabah'];
$tanggal				= $_POST['tanggal'];
$jumlah_pinjaman		= $_POST['jumlah_pinjaman'];
$jangka_waktu			= $_POST['jangka_waktu'];
$bunga					= $_POST['bunga'];

$input			= mysqli_query($conn, "INSERT INTO peminjaman (nik_nasabah, tanggal, jumlah_pinjaman, jangka_waktu, bunga) VALUES ('$nik_nasabah', '$tanggal','$jumlah_pinjaman' , '$jangka_waktu' , '$bunga')");


if($input){
	echo "<script>alert('Data Berhasil Ditambah');document.location.href='pinjaman.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Ditambah');document.location.href='tambah_pinjaman.php'</script>";
		
}
?>