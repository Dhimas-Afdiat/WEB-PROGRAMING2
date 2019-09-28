<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
</head>
<body>

	<h2>DATA MAHASISWA</h2>
	<br/>
	<a href="tambah.php">TAMBAH DATA MAHASISWA</a>
	<br/>
	<br/>
	<table border="2">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
            <th>EMAIL</th>
			<th>PILIHAN</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
                <td><?php echo $d['email']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>