<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
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
						<?php
							include 'koneksi.php';

							$nik_nasabah	= $_GET['nik_nasabah'];

							$lihat		= mysqli_query($conn, "SELECT * FROM peminjaman WHERE nik_nasabah = '$nik_nasabah'");
							if (mysqli_num_rows($lihat) == 0) {
								echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
							}else{
							$no = 1;
							while($data = mysqli_fetch_array($lihat)) {
						?>
						<div class="panel-heading">
							<span class="title"><b>Edit Data Peminjaman <span class="text text-danger"></span></b></span>
						</div>
						<div class="panel-body">
							<form action="proses_edit_pinjaman.php" method="POST" class="form">
								<input type="hidden" name="nik_nasabah" value="<?php echo $data['nik_nasabah']?>">
								<div class="form-group">
									<label class="title">NIK Nasabah</label>
									<input type="text" name="nik_nasabah" class="form-control" value="<?php echo $data['nik_nasabah']?>">
								</div>
								<div class="form-group">
									<label class="title">Tanggal</label>
									<input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']?>">
								</div>
								<div class="form-group">
									<label class="title">Jumlah Pinjaman</label>
									<input type="text" name="jumlah_pinjaman" class="form-control" value="<?php echo $data['jumlah_pinjaman']?>">
								</div>
								<div class="form-group">
									<label class="title">Jangka Waktu</label>
									<input type="text" name="jangka_waktu" class="form-control" value="<?php echo $data ['jangka_waktu']?>">
								</div>
								<div class="form-group">
									<label class="title">Bunga</label>
									<input type="text" name="bunga" class="form-control" value="<?php echo $data['bunga']?>">
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
								</div>
							</form>
						</div>
						<?php }}?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>