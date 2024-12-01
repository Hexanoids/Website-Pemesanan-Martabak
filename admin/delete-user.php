<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header('location:home/index.html');
	}
?>

<?php 
// koneksi database
include '../conn.php';
 
// menangkap data id yang di kirim dari url
$id_user = $_GET['id_user'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from user where id_user='$id_user'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-user.php");
 
?>