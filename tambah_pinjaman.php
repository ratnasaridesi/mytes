<?php
	include_once 'koneksi.php';

	// $host	= 'localhost';
	// $user	= 'root';
	// $pass	= '';
	// $db		= 'mytes';

	// $conn = mysqli_connect($host, $user, $pass, $db);
	// // Check connection
	// if (!$conn) {
	//     die("Connection failed: " . mysqli_connect_error());
	// }else{
	// 	echo 'berhasil';
	// }

	$sql = 'SELECT no_nasabah FROM data_nasabah';
	$result = $conn->query($sql);
?>
<!DOCTYPE>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.1/css/select2.min.css"> -->
	<!-- <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css">   -->
</head>
<body>
	<div class="row">
		<div class="container-fuild">
			<div class="row">
				<br>
				<br>
				<div class="col-md-8 col-md-offset-2">
					<a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
					<br>
					<br>
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="title"><b>Tambah Data Peminjaman</b></span>
						</div>
						<div class="panel-body">
							<form action="proses_tambah_pinjaman.php" method="POST" class="form">
								<div class="form-group">
									<label class="title">NIK Nasabah</label>
									<!-- <input type="text" name="nik_nasabah" class="form-control" placeholder="Pilih NIK Nasabah"> -->
												<?php
												$something = '<select  name="nik_nasabah" class="form-control">
															<option value="">Pilih Data Nasabah</option>
															';
												if($result->num_rows > 0) {
											    while($row = $result->fetch_assoc()) {
	        									$something.='<option value="'.$row['no_nasabah'].'">'.$row['no_nasabah'].'</option>';
												}
												} else {
												    echo "0 results";
												}
												$something .='</select>';
												echo $something;
												$conn->close();
														?>
								</div>
	
								<div class="form-group">
									<label class="title">Tanggal</label>
									<div class='input-group date' id='tanggal'>
									       <input type="date" class="form-control" id="tanggal" name="tanggal"/>
									       <span class="input-group-addon">
									                  <span class="glyphicon glyphicon-calendar"></span>
									        </span>
								</div>
								<br/>
								<div class="form-group">
									<label class="title">Jumlah Pinjaman</label>
									<input type="text" name="jumlah_pinjaman" class="form-control" placeholder="Jumlah Pinjaman">
								</div>
								<div class="form-group">
									<label class="title">Jangka Waktu</label>
									<input type="text" name="jangka_waktu" class="form-control" placeholder="Jangka Waktu">
								</div>
								<div class="form-group">
									<label class="title">Bunga</label>
									<input type="text" name="bunga" class="form-control" placeholder="Bunga">
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- <script src="js/bootstrap-datetimepicker.min.js"></script>

 <script type="text/javascript">
  $(document).ready(function(){

    $('#dtp').datetimepicker({
     format : 'DD/MM/YYYY'
    });

    $('#dtp_icon').datetimepicker({
     format : 'DD/MM/YYYY'
    });

    $('#dtp_jam').datetimepicker({
     format : 'HH:mm'
    });

  });
 </script> -->
</body>

</html>