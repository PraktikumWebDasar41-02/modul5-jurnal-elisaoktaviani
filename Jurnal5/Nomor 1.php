<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form">

		<table>
			
			<h2>Registrasi</h2>
			<tr>
				<td>Nim :</td>
				<td><input type="text" name="nim"></td>
			</tr>

			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td>Email :</td>
				<td><input type="text" name="email"></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="submit">
				</td>
			</tr>
			

		</table>

</body>
</html>

<?php

	$db = mysqli_connect("localhost","root","","d_modul5");

		if(isset($_POST['submit'])){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			//$email2 = "@gmail.com";
		if($nim != is_numeric($nim)){
			if(strlen($nim)==10 && strlen($nama)<=20 && filter_var($email, filter_validate_email){
				$data = "INSERT INTO t_jurnal1(Nim,Nama,Email) VALUES ($nim,'$nama','$email')";
				if(mysqli_query($db,$data)){
					echo "<script language = 'javascript'>alert('inputan sukses'); document.location=('komentar.php');</script>";
				}else{
					echo"<script language = 'javascript'>alert('inputan error'); document.location=('Nomor 1.php');</script>";
				}else{
					echo"<script language = 'javascript'>alert('inputan error'); document.location=('Nomor 1.php');</script>";
				}
			}
			else{
				 echo"<script language = 'javascript'>alert('nim harus bilangan numerik'); document.location=('Nomor 1.php');</script>";
			}

		}
		
?>