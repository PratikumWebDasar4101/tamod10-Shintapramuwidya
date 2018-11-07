<?php

	require_once 'Controller.php';
	$controller = new controller();
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<title>Registrasi</title>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8" style="margin: 10px 0 0 0">
				<div class="card">
					<div class="card-body">
						<form action="" method="post">
							<h2>Registrasi Akun</h2>
							Username : 
							<input type="text" name="username" class="form-control">
							Password : 
							<input type="password" name="password" class="form-control">
							Re-type Password : 
							<input type="password" name="repassword" class="form-control">
							<input type="submit" name="registrasi" value="Create User" class="btn btn-block btn-success" style="margin-top: 10px; margin-bottom: 10px;">

							<?php $controller->registrasi(); ?>

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
