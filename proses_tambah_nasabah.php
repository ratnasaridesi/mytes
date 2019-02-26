<?php

include 'koneksi.php';

$alamat			= $_POST['alamat'];
$hp				= $_POST['hp'];
$email			= $_POST['email'];
$tempat			= $_POST['tempat'];
$no_rekening	= $_POST['no_rekening'];

$input			= mysqli_query($conn, "INSERT INTO data_nasabah (alamat, hp, email, tempat, no_rekening) VALUES ('$alamat', 'hp','$email' , '$tempat' , '$no_rekening')");

if($input){
	echo "<script>alert('Data Berhasil Ditambah');document.location.href='nasabah.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Ditambah');document.location.href='tambah_nasabah.php'</script>";
		
}
?>