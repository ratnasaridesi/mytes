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

							$no_nasabah	= $_GET['no_nasabah'];

							$lihat		= mysqli_query($conn, "SELECT * FROM data_nasabah WHERE no_nasabah = '$no_nasabah'");
							if (mysqli_num_rows($lihat) == 0) {
								echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
							}else{
							$no = 1;
							while($data = mysqli_fetch_array($lihat)) {
						?>
						<div class="panel-heading">
							<span class="title"><b>Edit Data Nasabah <span class="text text-danger"></span></b></span>
						</div>
						<div class="panel-body">
							<form action="proses_edit_nasabah.php" method="POST" class="form">
								<input type="hidden" name="no_nasabah" value="<?php echo $data['no_nasabah']?>">
								<div class="form-group">
									<label class="title">Alamat</label>
									<textarea type="text" name="alamat" class="form-control" ><?php echo $data['alamat']?></textarea>
								</div>
								<div class="form-group">
									<label class="title">No HP</label>
									<input type="text" name="hp" class="form-control" value="<?php echo $data['hp']?>">
								</div>
								<div class="form-group">
									<label class="title">Email</label>
									<input type="text" name="email" class="form-control" value="<?php echo $data['email']?>">
								</div>
								<div class="form-group">
									<label class="title">Tempat</label>
									<input type="text" name="tempat" class="form-control" value="<?php echo $data ['tempat']?>">
								</div>
								<div class="form-group">
									<label class="title">NO Rekening</label>
									<input type="text" name="no_rekening" class="form-control" value="<?php echo $data['no_rekening']?>">
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