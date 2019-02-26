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
						<div class="panel-heading">
							<span class="title"><b>Tambah Data Nasabah</b></span>
						</div>
						<div class="panel-body">
							<form action="proses_tambah_nasabah.php" method="POST" class="form">
								<div class="form-group">
									<label class="title">Alamat</label>
									<textarea type="text" name="alamat" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label class="title">No HP</label>
									<input type="text" name="hp" class="form-control" placeholder="No Hp Nasabah">
								</div>
								<div class="form-group">
									<label class="title">Email</label>
									<input type="text" name="email" class="form-control" placeholder="Email Nasabah">
								</div>
								<div class="form-group">
									<label class="title">Tempat</label>
									<input type="text" name="tempat" class="form-control" placeholder="Tempat">
								</div>
								<div class="form-group">
									<label class="title">No Rekening</label>
									<input type="text" name="no_rekening" class="form-control" placeholder="No Rekening">
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
</body>
</html>