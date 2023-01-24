<?php 
include 'header-fiks.php';
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="main-panel">
        <h style="font-size: 25px; color: #1F3BB3; display: flex; justify-content: center; margin-top: 20px; margin-bottom: 20px;">
        	<i class="menu-icon material-icons">info</i>
			DETAIL MAHASISWA
    	</h>
        <hr>
        <div>Masukkan Nama atau Program Studi Untuk Melihat Detail Mahasiswa</div>
        </br>
        <form style="margin-bottom: 30px" action="detail-mahasiswa.php" method="get">
            <input type="text" name="kata_cari">
            <button type="submit" name="bcari" class="btn btn-success"><span class="material-icons">search</span></button>  
        </form>
        
        <!--menampilkan detail mahasiswa-->
        <?php
        include('config.php');
        if(isset($_GET['kata_cari'])) {
            $kata_cari = $_GET['kata_cari'];
            echo "<b>Hasil pencarian : ".$kata_cari."</b>";
            $query = "SELECT daftar_mahasiswa.*, detail_mahasiswa.* FROM daftar_mahasiswa JOIN detail_mahasiswa ON detail_mahasiswa.nim=daftar_mahasiswa.nim WHERE nama_mahasiswa like '%".$kata_cari."%' OR program_studi like '%".$kata_cari."%'";
            } else {
                echo "Masukkan Kata Pencarian";
            }
            $result = mysqli_query ($koneksi, $query);
            if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            }
            while ($row = mysqli_fetch_array($result)) {
        ?>

        <table class="table table-striped table-bordered">
            <tr>
                <td>NIM</td>
				<td><?php echo $row['nim']; ?></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
				<td><?php echo $row['nama_mahasiswa']; ?></td>
            </tr>
            <tr>
                <td>Program Studi</td>
				<td><?php echo $row['program_studi']; ?></td>
            </tr>
            <tr>
                <td>Semester</td>
				<td><?php echo $row['semester']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
				<td><?php echo $row['kelas']; ?></td>
            </tr>
            <tr>
                <td>Tahun Angkatan</td>
				<td><?php echo $row['tahun_angkatan']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
				<td><?php echo $row['tanggal_lahir']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
				<td><?php echo $row['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
				<td><?php echo $row['alamat']; ?></td>
            </tr>
            <tr>
                <td>No Handphone</td>
				<td><?php echo $row['no_hp']; ?></td>
            </tr>
            <tr>
                <td>Aksi</td>
				<td><a href="form-edit-detail.php?id=<?php echo $row['nim']; ?>" class="btn btn-success"><span class="material-icons">edit</span> Edit</a></td>
            </tr>        
        </table>

        <?php
            }
        ?>
    </div>
</body>
</html>