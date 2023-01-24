<?php 
include 'header-fiks.php';
include 'config.php';

$nim = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM daftar_mahasiswa where nim = $nim");
$tampil = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="main-panel">
        <h style="font-size: 25px; color: #1F3BB3; display: flex; justify-content: center; margin-top: 20px; margin-bottom: 20px;">
        	<i class="menu-icon material-icons">edit</i>
			EDIT DATA MAHASISWA
    	</h><hr>
		<form action="config-edit-mhs.php" method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
				<tr>
					<td>Nama Mahasiswa</td>
					<td><input type="text" class="form-control" name="nama_mahasiswa" value="<?php echo $tampil['nama_mahasiswa'] ?>" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
                <tr>
					<td>Program Studi</td>
					<td>
                        <select id="program_studi" name="program_studi" value="<?php echo $tampil['program_studi'] ?>" required> 
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                        </select>
                    </td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
                <tr>
				<td>Semester</td>
		    	<td>
                    <select id="semester" name="semester" value="<?php echo $tampil['semester'] ?>" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </td>
		        </tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
                <tr>
			    <td>Kelas</td>
                <td>
                    <select id="kelas" name="kelas" value="<?php echo $tampil['kelas'] ?>" required>
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                    </select>
                </td>
			    </tr>
			    <tr>
				    <td></td>
				    <td></td>
			    </tr>
                <tr>
				    <td>Angkatan</td>
				    <td><input type="text" class="form-control" name="tahun_angkatan" value="<?php echo $tampil['tahun_angkatan'] ?>" required></td>
			    </tr>
			    <tr>
				    <td></td>
				    <td></td>
			    </tr>
				<tr>
					<td></td>
					<td><input type="submit" name="simpan" class="btn btn-info" value="Simpan">
						<a href="daftar-mahasiswa.php" class="btn btn-danger">Batal</a>
					</td>
				</tr>
			</table> 
		</form>
	</div>
</body>
</html>