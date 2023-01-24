<?php 
session_start();
if(!isset($_SESSION['Username'])){
  header("Location: ../login.html");
} else {
?>

  <?php 
    include 'config.php';
    
    if(isset($_POST['simpan'])) {
      mysqli_query($koneksi, "UPDATE detail_mahasiswa SET 
      tanggal_lahir='$_POST[tanggal_lahir]', 
      jenis_kelamin='$_POST[jenis_kelamin]', 
      alamat='$_POST[alamat]', 
      no_hp='$_POST[no_hp]', 
      WHERE nim='$_GET[id]'");
        
      echo "<script> alert('Data Mahasiswa Berhasil di Edit');
      window.location.href='detail-mahasiswa.php';</script>";
    }
  
  ?>
<?php } ?>