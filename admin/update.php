<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$isi_laporan = $_POST['isi_laporan'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE aduan SET nik='$nik', nama='$nama', isi_laporan='$isi_laporan', tgl_pengaduan='$tgl_pengaduan', status='$status' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>