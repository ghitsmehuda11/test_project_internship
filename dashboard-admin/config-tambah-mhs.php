<?php 
session_start();
if(!isset($_SESSION['Username'])){
	header("Location: ../login.html");
} else {
?>

<?php 
    include 'config.php';

    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $program_studi = $_POST['program_studi'];
    $semester = $_POST['semester'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['tahun_angkatan'];

    $query = mysqli_query($koneksi, "INSERT INTO daftar_mahasiswa values('$nim','$nama_mahasiswa','$program_studi','$semester','$kelas','$angkatan')");
    if($query) {
        echo "<script> alert('Mahasiswa berhasil ditambahkan');
            window.location.href='daftar-mahasiswa.php';</script>";
        } else {
            echo "<script> alert('Gagal menambahkan Tempat');
            window.location.href='daftar-mahasiswa.php';</script>";
        }
?>
<?php } ?>