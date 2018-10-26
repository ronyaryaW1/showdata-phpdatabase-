<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h2><center>Input Data DATABASE</center></h2>
	<section id="input-form">
		<form action="input-aksi.php" method="post">
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