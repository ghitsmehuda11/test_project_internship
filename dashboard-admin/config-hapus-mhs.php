<?php 
include 'config.php';

$query= mysqli_query($koneksi, "SELECT * FROM daftar_mahasiswa WHERE nim='$_GET[id]'");
mysqli_query($koneksi, "DELETE FROM daftar_mahasiswa WHERE nim='$_GET[id]'");
header("location:daftar-mahasiswa.php");
?>