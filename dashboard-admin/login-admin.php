<?php 
session_start();
include 'config.php';

if(isset($_POST['submit'])){
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$pass=($password);

	$query = mysqli_query($koneksi, "select * from admin where Username = '$username' and Password = '$pass'");
	$count = mysqli_num_rows($query);

	if($count==1){
		$_SESSION['Username'] = $username;
		$_SESSION['Password'] = $password;

		header("location: daftar-mahasiswa.php");
	}else{
		echo "<script>
		alert('Login Gagal!!!');
		window.location.href= '../login.html';
		</script>";
	}
}
?>