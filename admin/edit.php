<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM aduan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nik</td>
					<td>
          <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="nik" value="<?php echo $d['nik']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Laporan</td>
					<td><input type="text" name="isi_laporan" value="<?php echo $d['isi_laporan']; ?>"></td>
				</tr>
				<tr>
        <tr>
					<td>Tanggal pengaduan</td>
					<td><input type="date" name="tgl_pengaduan" value="<?php echo $d['tgl_pengaduan']; ?>"></td>
				</tr>
        <tr>
					<td>Status</td>
					<td><input type="text" name="status" value="<?php echo $d['status']; ?>"></td>
				</tr>
				<tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>