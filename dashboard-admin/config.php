<?php
global $koneksi;

$host ="localhost";
$user = "tnurhuda_db";
$password = "";
$db = "tkd_yhc";
/* Koneksi ke Host MySQL */
$koneksi = mysqli_connect($host, $user, $password);
/* Koneksi ke Database */
$pilih = mysqli_select_db($koneksi, $db);
?>