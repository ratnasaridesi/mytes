<?php

include 'koneksi.php';

$no_nasabah		= $_POST['no_nasabah'];
$alamat			= $_POST['alamat'];
$hp				= $_POST['hp'];
$email			= $_POST['email'];
$tempat			= $_POST['tempat'];
$no_rekening	= $_POST['no_rekening'];

$update			= mysqli_query($conn, "UPDATE data_nasabah SET alamat = '$alamat', hp = '$hp', email = 'email', tempat = '$tempat', no_rekening = 'no_rekening' WHERE no_nasabah = '$no_nasabah'");

if($update){
	echo "<script>alert('Data Berhasil Diedit');document.location.href='nasabah.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Diedit');document.location.href='edit_nasabah.php?no_nasabah='$no_nasabah''</script>";
		
}
?>