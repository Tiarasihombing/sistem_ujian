<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 

	<?php 
	session_start();
	if(isset($_SESSION['level'])){
		header("location:halaman_admin.php?pesan=session");

	} 

	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}else if($_GET['pesan']=="session"){
			echo "<div class='alert'>Session tidak ditemukan, silahkan loagin !</div>";
		}
		
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required" value="<?php if(isset($_COOKIE["username"])){ echo $_COOKIE['username'];}?>">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE['password'];}?>">
			<input type="checkbox" name="ingat" value="ingat">
			<label>Ingat saya</label>
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>