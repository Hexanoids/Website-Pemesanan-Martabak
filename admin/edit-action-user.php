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
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$address = $_POST['address'];
$id_user = $_POST['id_user'];
$level = $_POST['level'];

 
// update data ke database
mysqli_query($conn,"update user set full_name='$full_name', email='$email', phone_number='$phone_number', password='$password', address='$address', level='$level' where id_user='$id_user'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-user.php");
 
?>