<!DOCTYPE html>
<html>
<head>
	<title>Sistem Kelola Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="../dashboard-admin/template-admin/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../dashboard-admin/template-admin/assets/js/jquery-ui/jquery-ui.css"> 
	<script type="text/javascript" src="../dashboard-admin/template-admin/assets/js/jquery.js"></script>
	<script type="text/javascript" src="../dashboard-admin/template-admin/assets/js/bootstrap.js"></script> 
	<script type="text/javascript" src="../dashboard-admin/template-admin/assets/js/jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" href="../dashboard-admin/template-admin/assets/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
	<script type="text/javascript" src="../dashboard-admin/template-admin/assets/js/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="Header.css">
</head>
<body style="font-family: mulilight">
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<h3 class="navbar-brand">Selamat Datang, Administrator</h3>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a role="button" href="logout.php" >
							<h4>Log Out
							<i class="dash-icon material-icons">output</i></h4>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="row"></div>
		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">		
			<li>
				<a href="daftar-mahasiswa.php">
					<span class="menu-icon material-icons">view_list</span> 
					Daftar Mahasiswa
				</a>
			</li>
			<li>
				<a href="detail-mahasiswa.php">
					<span class="menu-icon material-icons">info</span> 
					Detail Mahasiswa
				</a>
			</li>
			<li>
				<a href="logout.php">
					<span class="menu-icon material-icons">output</span>  
					Keluar
				</a>
			</li>				
		</ul>
	</div>
	<div class="col-md-10">