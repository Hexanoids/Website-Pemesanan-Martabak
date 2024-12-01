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
$id_admin_p = $_GET['id_admin_p'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from admin_pemesanan where id_admin_p='$id_admin_p'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-admin.php");
 
?>