<!DOCTYPE html>
<html>
<head>
	<title>Halaman</title>
</head>
<body>
	<h2>DATA COSTUMER</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Id_customer</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Telp</th>
			<th>Email</th>
			<th>Tgl_lahir</th>
			<th>Kode_pos</th>
			<th>Nama_ibu</th>
			<th>Gender</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from customer");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_customer']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['umur']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['tgl_lahir']; ?></td>
				<td><?php echo $d['kode_pos']; ?></td>
				<td><?php echo $d['nama_ibu_k']; ?></td>
				<td><?php echo $d['gender']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<br>
	<h2>DATA MAHASISWA</h2>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Prodi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['prodi']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<br>
	<h2>DATA MATAKULIAH</h2>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>kdmk</th>
			<th>nmmk</th>
			<th>sks</th>
			<th>prodi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from matakuliah");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kdmk']; ?></td>
				<td><?php echo $d['nmmk']; ?></td>
				<td><?php echo $d['sks']; ?></td>
				<td><?php echo $d['prodi']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<br>
	<h2>DATA NILAI</h2>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>thakd
			<th>NIM</th>
			<th>kdmk</th>
			<th>Nilai</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from nilai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['thakd']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['kdmk']; ?></td>
				<td><?php echo $d['nilai']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
