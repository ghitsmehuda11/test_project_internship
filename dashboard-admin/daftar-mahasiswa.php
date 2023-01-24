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
        	<i class="menu-icon material-icons">view_list</i>
			DAFTAR MAHASISWA
    	</h><hr>
		<a href="form-tambah-mhs.php" class="btn btn-success"><span class="material-icons small">add_box</span>Tambah Mahasiswa</a>
		<div style="margin: 0 0 10px 0"></div>
		<div class="table-responsive">
			<table class="table table-hover table-bordered table-sm">
				<thead class="bg-primary">
				<tr>
					<th class="col-md-1">No</th>
					<th class="col-md-1">NIM</th>
					<th class="col-md-2">Nama Mahasiswa</th>
					<th class="col-md-2">Program Studi</th>
                	<th class="col-md-1">Semester</th>
                	<th class="col-md-1">kelas</th>
					<th class="col-md-1">Angkatan</th>
					<th class="col-md-2">Aksi</th>
				</tr>
				</thead>
				
				<tbody>
				<?php
				$batas   = 10;
				$halaman = @$_GET['halaman'];
				if(empty($halaman)){
					$posisi  = 0;
					$halaman = 1;
				}
				else{
					$posisi  = ($halaman-1) * $batas;
				}
				$no=$posisi+1;
				$query = mysqli_query($koneksi, "SELECT * From daftar_mahasiswa ORDER BY program_studi,semester,kelas,tahun_angkatan desc limit $posisi, $batas");
				while($view=mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $view['nim'] ?></td>
					<td><?php echo $view['nama_mahasiswa'] ?></td>
					<td><?php echo $view['program_studi'] ?></td>
                    <td><?php echo $view['semester'] ?></td>
                    <td><?php echo $view['kelas'] ?></td>
					<td><?php echo $view['tahun_angkatan'] ?></td>
					<td>
						<a href="form-edit-mhs.php?id=<?php echo $view['nim']; ?>" class="btn btn-success"><span class="material-icons">edit</span> Edit</a>
						<a onclick="if(confirm('Anda Akan Menghapus Data Ini ?')){ location.href='config-hapus-mhs.php?id=<?php echo $view['nim']; ?>' }" class="btn btn-danger"><span class="material-icons">delete</span> Hapus</a>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
                    <td></td>
					<td></td>
				</tr>		
				<?php 
					} 
				?>
				</tbody>
			</table>
		</div>
		<?php
		$sql     = mysqli_query($koneksi, "select * from daftar_mahasiswa");
		$jmldata    = mysqli_num_rows($sql);
		$jmlhalaman = ceil($jmldata/$batas);
		?>
		<div class="text-left">
			<ul class="pagination">
				<?php
				for($i=1;$i<=$jmlhalaman;$i++) {
					if ($i != $halaman) {
						echo "<li class='page-item'><a class='page-link' href='daftar-mahasiswa.php?halaman=$i'>$i</a></li>";
					} else {
						echo "<li class='page-item active'><a class='page-link' href='daftar-mahasiswa.php'>$i</a></li>";
					}
				}
				?>
			</ul>
		</div>
	</div>
</body>
</html>