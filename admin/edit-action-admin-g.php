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
$id_admin_g = $_POST['id_admin_g'];

 
// update data ke database
mysqli_query($conn,"update admin_global set email='$email', password='$password' where id_admin_g='$id_admin_g'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-admin.php");
 
?>