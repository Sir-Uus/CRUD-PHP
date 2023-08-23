<!DOCTYPE html>
<html>
<head>
	<title>INTI SARI</title>
</head>
<body>
 
	<h2>PENGADUAN MASYARAKAT</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PENGADUAN</a>
	<br/>
	<br/>
	<table border="3">
	<?php 
	include 'koneksi.php';
 
// mengaktifkan session
	session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
}
 
?>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
	</br>	
		<tr>
			<th>NO</th>
			<th>NIK</th>
			<th>NAMA</th>
			<th>ISI LAPORAN</th>
			<th>TANGGAL PENGADUAN</th>
            <th>STATUS</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM aduan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['isi_laporan']; ?></td>
                <td><?php echo $d['tgl_pengaduan']; ?></td>
                <td><?php echo $d['status']; ?></td>
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