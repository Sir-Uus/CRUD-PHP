<?php 
include 'config.php';
 
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];


mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$username','$password','$level')");
 
header("location:index.php");
 
?>