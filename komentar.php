<?php
	session_start();
	$db = mysqli_connect("localhost","root","","d_modul5");
	$nama = $_SESSION["nama"];
	$nim =$_SESSION["komentar"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>komentar</title>
</head>
<body>
	<form action="" method="POST">
	<table>

	<h2>Masukkan Komentar Anda</h2>

	<tr>
		<td>Nama :</td>
		<td><?php echo "$nama"?>;</td>
	</tr>

	<tr>
		<td>Komentar:</td>
		<input type="text" name="komentar">
	</tr>

	<tr>
		<td><input type="submit" name="submit" value="submit"></td>
		<
	</table>
</body>
</html>

<?php
	$db = mysqli_connect("localhost","root","","d_modul5");
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$komentar = $_POST['komentar'];
	}




?>