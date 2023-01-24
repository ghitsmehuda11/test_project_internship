<?php 
session_start();
if(!isset($_SESSION['Username'])){
	header("Location: ../login.html");
} else {
?>

  <?php 
    include 'config.php';
    
    if(isset($_POST['simpan'])) {
      $sql=mysqli_query($koneksi, "UPDATE daftar_mahasiswa SET 
      nama_mahasiswa='$_POST[nama_mahasiswa]', 
      program_studi='$_POST[program_studi]', 
      semester='$_POST[semester]', 
      kelas='$_POST[kelas]', 
      tahun_angkatan='$_POST[tahun_angkatan]'
      WHERE nim='$_GET[id]'");

    }
  
?>
<?php } ?>