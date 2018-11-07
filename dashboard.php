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
	
	<title>Dashboard</title>
</head>
<body>

	<div class="container-fluid">
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
				        <a class="nav-link" href="">Dashboard</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="newData.php">Add Data</a>
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

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-12" style="margin: 10px 0 0 0">
				<div class="card">
					<div class="card-body">
						<form action="" method="post">
							<input type="text" name="search" placeholder="Cari berdasarkan NIM" class="form-control" style="width: 20%">
							<input type="submit" name="submit" value="Cari" class="btn btn-primary" style="width: 20%; margin: 5px 0 0 0">
						</form>


						<table class="table" style="margin-top: 20px">
						  <thead>
						    <tr>
						      <th scope="col">Nama Depan</th>
						      <th scope="col">Nama Belakang</th>
						      <th scope="col">NIM</th>
						      <th scope="col">Kelas</th>
						      <th scope="col">Hobi</th>
						      <th scope="col">Genre Film</th>
						      <th scope="col">Wisata</th>
						      <th scope="col">Email</th>
						      <th scope="col">Tanggal Lahir</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  	  <?php
						  	  if (isset($_POST['submit'])) {
						  	  		$controller->cari();
						  	  }else{
						  	  		$controller->dashboard();
						  	  }
						  	  ?>
						  </tbody>
						</table>
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