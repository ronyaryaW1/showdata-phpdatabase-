<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="judul">
		<h2><center>Edit data pada database</center></h2>
	</div>
	<br/>

	<section id="input-form">
		<form action="edit-aksi.php" method="post">
			<div class="form">
				<label>Id</label>
				<input type="text" name="id">
			</div>
			<div class="form">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="form">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="form">
				<label>Level</label>
				<input type="text" name="level">
			</div>
			<div class="form">
				<label>Fullname</label>
				<input type="text" name="fullname">
			</div>
			<a href="index.php">Lihat Semua Data</a>
			<div class="form">
				<input type="submit" name="submit"
				value="SUBMIT" class="bg-blue">
			</div>
		</form>
	</section>
</body>
</html>