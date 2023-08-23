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
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nik</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Laporan</td>
				<td><input type="text" name="isi_laporan"></td>
			</tr>
            <tr>
				<td>Tanggal</td>
				<td><input type="date" name="tgl_pengaduan"></td>
			</tr>
            <tr>
				<td>Status</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>