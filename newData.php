<?php
	require_once 'Controller.php';
	$controller = new controller();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<title>Add Data</title>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12" style="margin: 10px 0 0 0">
				<nav class="navbar navbar-expand-lg navbar-light bg-primary">
				  <a class="navbar-brand" href="#">6701174063</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link" href="dashboard.php">Dashboard</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="">Add Data</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="profile.php">Lihat Profil</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="controller.php?logout=true" style="color:red">Logout</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</div>
		</div>
	</div>	

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12" style="margin: 10px 0 0 0">
				<div class="card">
					<div class="card-body">
						
						<h2>Input Data Mahasiswa</h2>
						<table>
							<form action="" method="post">
								<tr>
									<td>Nama Depan</td>
									<td> : </td>
									<td><input type="text" name="nama_depan" class="form-control"></td>
								</tr>
								<tr>
									<td>Nama Belakang</td>
									<td> : </td>
									<td><input type="text" name="nama_belakang" class="form-control"></td>
								</tr>
								<tr>
									<td>NIM</td>
									<td> : </td>
									<td><input type="text" name="nim" class="form-control"></td>
								</tr><tr>
									<td>Kelas</td>
									<td> : </td>
									<td><input type="text" name="kelas" class="form-control"></td>
								</tr>
								<tr>
									<td>Hobi</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
										<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
										<input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>
									</td>
								</tr>
								<tr>
									<td>Genre Film</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="genre_film[]" value="Action">Action<br>
										<input type="checkbox" name="genre_film[]" value="Romance">Romance<br>
										<input type="checkbox" name="genre_film[]" value="horor">Horor<br>
										<input type="checkbox" name="genre_film[]" value="Sci-Fi">Sci-Fi<br>
										<input type="checkbox" name="genre_film[]" value="Fantasy">Fantasy<br>
									</td>
								</tr>
								<tr>
									<td>Tempat Wisata</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="tempat_wisata[]" value="bali">Bali<br>
										<input type="checkbox" name="tempat_wisata[]" value="lombok">Lombok<br>
										<input type="checkbox" name="tempat_wisata[]" value="tanjung selor">Tanjung Selor<br>
										<input type="checkbox" name="tempat_wisata[]" value="bandung">Bandung<br>
										<input type="checkbox" name="tempat_wisata[]" value="jakarta">Jakarta<br>
									</td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td> : </td>
									<td><input type="text" name="email" class="form-control"></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td> : </td>
									<td><input type="date" name="tgl_lahir" class="form-control"></td>
								</tr>
								<tr>
									<td><input type="submit" name="inputdata" value="Input Data" class="btn btn-success"></td>
								</tr>
							</form>
						</table>
						<?php $controller->newData(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>	