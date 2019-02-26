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
				<div class="col-md-10 col-md-offset-1">
					<a href="index.php" class="btn btn-primary">Back</a>
					<a href="tambah_nasabah.php" class="btn btn-primary" style="position: absolute; right:10px;"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
					<br>
					<br>
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="title"><b>Data Nasabah</b></span>
						</div>
						<div class="panel-body">
							<table class="table table-stripped" width="100%">
								<thead>
									<tr>
										<th>No Nasabah</th>
										<th>Alamat</th>
										<th>No HP</th>
										<th>Email</th>
										<th>Tempat</th>
										<th>No Rekening</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<?php
									include 'koneksi.php';

									$lihat	= mysqli_query($conn, "SELECT * FROM data_nasabah");
									if (mysqli_num_rows($lihat) == 0) { //jika hasil dari query menampilkan 0 data maka akan memperlihatkan data kosong
										echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
									}else{
									$no 	= 1;
									while($data = mysqli_fetch_array($lihat)) {
								?>
								<tbody>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $data['alamat']?></td>
										<td><?php echo $data['hp']?></td>
										<td><?php echo $data['email']?></td>
										<td><?php echo $data['tempat']?></td>
										<td><?php echo $data['no_rekening']?></td>
										<td>
											<a href="edit_nasabah.php?no_nasabah=<?php echo $data['no_nasabah']?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
											<a href="proses_hapus_nasabah.php?no_nasabah=<?php echo $data['no_nasabah']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-erase"></i> Hapus</a>
										</td>
									</tr>
								</tbody>
								<?php $no++;}}?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>