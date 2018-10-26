
<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql_delete=("DELETE FROM kk4 WHERE id='$id' ");
mysqli_query($conn,$sql_delete)or die(mysqli_error($conn));
echo '<script>
alert("Datamu Berhasil Dihapus");
location="index.php?"
</script>';
?>