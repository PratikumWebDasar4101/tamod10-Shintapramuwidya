<?php

	class controller{

		function login(){
			require_once 'koneksi.php';
			if (isset($_POST['login'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];

				$sql = "SELECT * FROM user WHERE username='$username' && password='$password'";
				$query = mysqli_query($db, $sql);
				if (mysqli_num_rows($query) == 1) {
					session_start();
					$_SESSION['username'] = $username;
					header("Location: dashboard.php");
				}else{
					echo "<div class='alert alert-danger' role='alert'>";
					echo "Login Gagal !!";
					echo "</div>";
				}
			}
		}

		function registrasi(){
			require_once 'koneksi.php';
			if (isset($_POST['registrasi'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				

				$sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password')";

				if(mysqli_query($db, $sql)){
					header("Location: index.php");
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);
				}
			}
		}

		function dashboard(){
			require_once 'koneksi.php';
			$sql = "SELECT * from list";

			$result = mysqli_query($db, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$nim = $row['nim'];
					echo "<tr>";
					echo "<td>" . $nim . "</td>";
					echo "<td>" . $row['nama_depan'] . "</td>";
					echo "<td>" . $row['nama_belakang']  . "</td>";
					echo "<td>" . $row['email']  . "</td>";
					echo "<td>" . $row['kelas']  . "</td>";
					echo "<td>" . $row['hobi']  . "</td>";
					echo "<td>" . $row['genre_film']  . "</td>";
					echo "<td>" . $row['tempat_wisata']  . "</td>";
					echo "<td>" . $row['tgl_lahir']  . "</td>";
					echo "<td> <a href='form_edit.php?nim=$nim'>Edit</a> | <a href='controller.php?delete=true&nim=$nim'>Hapus</a> </td>";
					echo "</tr>";
				}
			}else{
				echo "0 result";
			}

			mysqli_close($db);
		}

		function newData(){
			if (isset($_POST['inputdata'])) {

			require_once 'koneksi.php';
				$nim = $_POST['nim'];
				$nama_depan = $_POST['nama_depan'];
				$nama_belakang = $_POST['nama_belakang'];
				$email = $_POST['email'];
				$kelas = $_POST['kelas'];	
				$hobi = $_POST['hobi'];
				$genre_film = $_POST['genre_film'];
				$tempat_wisata = $_POST['tempat_wisata'];
				$tanggal_lahir = $_POST['tgl_lahir'];

				$hobi = implode(", ", $hobi);
				$genre_film = implode(", ", $genre_film);
				$tempat_wisata = implode(", ", $tempat_wisata);	

				$sql = "INSERT INTO `list` (`nim`, `nama_depan`, `nama_belakang`, `email`, `kelas`, `hobi`, `genre_film`, `tempat_wisata`, `tgl_lahir`)
						VALUES ('$nim', '$nama_depan', '$nama_belakang', '$email', '$kelas', '$hobi', '$genre_film', '$tempat_wisata', '$tanggal_lahir')";

				if (mysqli_query($db, $sql)) {
					echo "<br>";
					echo "Data Berhasil di Input";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);

				}

			mysqli_close($db);
			}
		}

		function profile(){
			require_once 'koneksi.php';
			session_start();
			$username = $_SESSION['username'];

			$sql = "SELECT * FROM user WHERE username='$username'";

			$result = mysqli_query($db, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$username = $row['username'];
					echo "<tr>";
					echo "<td>" . $username . "</td>";
					echo "<td>" . $row['password'] . "</td>";
					echo "<td><a href=editpass.php?username=$username>Edit Password</a></td>";
					echo "</tr>";
				}
			}else{
				echo "0 result";
			}

			mysqli_close($db);
		}

		function delete($nim){
			if (!empty($_GET['nim'])) {
			require_once 'koneksi.php';
				$sql = "DELETE FROM list WHERE nim='$nim'";
				if (mysqli_query($db, $sql)) {
					header("Location: dashboard.php");
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($conn);
				}
			}
			mysqli_close($db);
		}

		function ambil_data($nim){
				require_once 'koneksi.php';
				$sql = "SELECT * from list where nim='$nim'";
				return mysqli_query($db, $sql);

		}

		function edit(){
			if (isset($_POST['editdata'])) {
				$nim = $_POST['nim'];
				$nama_depan = $_POST['nama_depan'];
				$nama_belakang = $_POST['nama_belakang'];
				$email = $_POST['email'];
				$kelas = $_POST['kelas'];	
				$hobi = $_POST['hobi'];
				$genre_film = $_POST['genre_film'];
				$tempat_wisata = $_POST['tempat_wisata'];
				$tanggal_lahir = $_POST['tgl_lahir'];

				$hobi = implode(", ", $hobi);
				$genre_film = implode(", ", $genre_film);
				$tempat_wisata = implode(", ", $tempat_wisata);	
				
				$db = new mysqli("localhost", "root", "", "webdas");
				$sql = "UPDATE `list` SET `nama_depan`='$nama_depan',`nama_belakang`='$nama_belakang',`email`='$email',
						`kelas`='$kelas',`hobi`='$hobi',`genre_film`='$genre_film',`tempat_wisata`='$tempat_wisata',`tanggal_lahir`='$tgl_lahir' WHERE 
						`nim`='$nim'";

				if (mysqli_query($db, $sql)) {
					echo "<br>";
					echo "Data Mahasiswa Berhasil Diubah";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);
				}
				mysqli_close($db);
			}
		}

		function datapass($username){
			require_once 'koneksi.php';
			$sql = "SELECT * FROM `user` WHERE username='$username'";
			return mysqli_query($db, $sql);

		}

		function editpass(){
			if (isset($_POST['editpass'])) {
				$username = $_POST['username'];
				$newpass = $_POST['newpassword'];
				$db = new mysqli("localhost", "root", "", "webdas");
				$sql = "UPDATE `user` SET password='$newpass' WHERE username='$username'";

				if (mysqli_query($db, $sql)) {
					echo "<br>";
					echo "Password Berhasil Diubah";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);
				}
				mysqli_close($db);
			}
		}

		function cari(){
			require_once 'koneksi.php';
			$cari = $_POST['cari'];
			$sql = "SELECT * FROM list WHERE nim LIKE '%$cari%'";
			$result = mysqli_query($db, $sql);

			if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['nim'] . "</td>";
				echo "<td>" . $row['nama_depan'] . "</td>";
				echo "<td>" . $row['nama_belakang']  . "</td>";
				echo "<td>" . $row['email']  . "</td>";
				echo "<td>" . $row['kelas']  . "</td>";
				echo "<td>" . $row['hobi']  . "</td>";
				echo "<td>" . $row['genre_film']  . "</td>";
				echo "<td>" . $row['tempat_wisata']  . "</td>";
				echo "<td>" . $row['tgl_lahir']  . "</td>";
				echo "</tr>";
			}
			}
		}

		function logout(){
			session_start();
			session_destroy();
			header("Location: index.php");
		}
	}

	$controller = new Controller();
	if (isset($_GET['logout'])) {
		$controller->logout();
	}

	if (isset($_GET['delete'])) {
		$nim = $_GET['nim'];
		$controller->delete($nim);
	}
?>