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
$id_varian = $_GET['id_varian'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from varian_rasa where id_varian='$id_varian'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-varian.php");
 
?>