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
$id_menu = $_GET['id_menu'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from menu_martabak where id_menu='$id_menu'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-menu.php");
 
?>