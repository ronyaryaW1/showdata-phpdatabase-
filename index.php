
<html>
<head>
  <title>Database</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA PESERTA</center></h2>
    <table class="tabel" align="center">
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Fullname</th>
    <th>Aksi</th>
  </tr></div>
  <?php
  //  1. Lakukan include koneksi.php untuk membuat koneksi
  include('koneksi.php');
  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM kk4";
  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($conn,$sql_tampil);
  // 4. Lakukan fetch dengan result type MYSQL_ASSOC
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    ?>
    <tr>
      <td><?php echo $baris_data['ID']; ?></td>
      <td><?php echo $baris_data['USERNAME']; ?></td>
      <td><?php echo $baris_data['PASSWORD']; ?></td>
      <td><?php echo $baris_data['LEVEL']; ?></td>
      <td><?php echo $baris_data['FULLNAME']; ?></td>
      <td>
      <a class="edit" href="edit.php?id=<?php echo $baris_data['ID']; ?>">Edit</a> |
      <a class="hapus" href="delete.php?id=<?php echo $baris_data['ID']; ?>">Hapus</a>
      </td>
    </tr>
<?php } ?>
</body>
</html>