<?php 
include 'koneksi.php';
 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$isi_laporan = $_POST['isi_laporan'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$status = $_POST['status'];
 
mysqli_query($koneksi,"INSERT INTO aduan VALUES('','$nik','$nama','$isi_laporan','$tgl_pengaduan','$status')");
 
header("location:halaman_admin.php");
 
?>