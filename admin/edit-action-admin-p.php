<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header('location:home/index.html');
	}
?>

<?php 
// koneksi database
include '../conn.php';
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
$id_admin_p = $_POST['id_admin_p'];

 
// update data ke database
mysqli_query($conn,"update admin_pemesanan set email='$email', password='$password' where id_admin_p='$id_admin_p'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-admin.php");
 
?>