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
$id_category = $_GET['id_category'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from category_martabak where id_category='$id_category'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-cat-menu.php");
 
?>