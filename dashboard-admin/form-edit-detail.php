<?php 
include 'header-fiks.php';
include 'config.php';

$query = mysqli_query($koneksi, "SELECT * FROM daftar_mahasiswa where nim = '$_GET[id]'");
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
			EDIT DETAIL MAHASISWA
    	</h><hr>
		<form action="config-edit-detail.php" method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
				<tr>
					<td>Nama Mahasiswa</td>
					<td><?php echo $tampil['nama_mahasiswa'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
                <tr>
					<td>Program Studi</td>
					<td><?php echo $tampil['program_studi'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
                <tr>
				<td>Semester</td>
		    	<td><?php echo $tampil['semester'] ?></td>
		        </tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
                <tr>
			    <td>Kelas</td>
                <td><?php echo $tampil['kelas'] ?></td>
			    </tr>
			    <tr>
				    <td></td>
				    <td></td>
			    </tr>
                <tr>
				    <td>Angkatan</td>
				    <td><?php echo $tampil['tahun_angkatan'] ?></td>
			    </tr>
			    <tr>
				    <td></td>
				    <td></td>
			    </tr>
                <tr>
                    <td>Tanggal Lahir</td>
				    <td><input type="date" name="tanggal_lahir" required></td>
                </tr>
                <tr>
				    <td></td>
				    <td></td>
			    </tr>
                <tr>
                    <td>Jenis Kelamin</td>
				    <td>
                        <select id="jenis_kelamin" name="jenis_kelamin" required> 
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
				    <td></td>
				    <td></td>
			    </tr>
                <tr>
                    <td>Alamat</td>
				    <td><textarea class="form-control" name="alamat" required></textarea></td>
                </tr>
                <tr>
                    <td>No Handphone</td>
				    <td><input type="int" name="no_hp"></td>
                </tr>

				<tr>
					<td></td>
					<td><input type="submit" name="simpan" class="btn btn-info" value="Simpan">
						<a href="detail-mahasiswa.php" class="btn btn-danger">Batal</a></td>
				</tr>
			</table> 
		</form>
	</div>
</body>
</html>