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
					<a href="tambah_pinjaman.php" class="btn btn-primary" style="position: absolute; right:10px;"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
					<br>
					<br>
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="title"><b>Data Pinjaman</b></span>
						</div>
						<div class="panel-body">
							<table class="table table-stripped" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK Nasabah</th>
										<th>Tanggal</th>
										<th>Jumlah Pinjaman</th>
										<th>Jangka Waktu</th>
										<th>Bunga</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<?php
									include 'koneksi.php';

									$lihat	= mysqli_query($conn, "SELECT * FROM peminjaman");
									if (mysqli_num_rows($lihat) == 0) { //jika hasil dari query menampilkan 0 data maka akan memperlihatkan data kosong
										echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
									}else{
									$no 	= 1;
									while($data = mysqli_fetch_array($lihat)) {
								?>
								<tbody>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $data['nik_nasabah']?></td>
										<td><?php echo $data['tanggal']?></td>
										<td><?php echo $data['jumlah_pinjaman']?></td>
										<td><?php echo $data['jangka_waktu']?></td>
										<td><?php echo $data['bunga']?></td>
										<td>
											<a href="edit_pinjaman.php?nik_nasabah=<?php echo $data['nik_nasabah']?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
											<a href="pinjaman_proses_hapus.php?nik_nasabah=<?php echo $data['nik_nasabah']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-erase"></i> Hapus</a>
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