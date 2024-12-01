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
$nama_varian = $_POST['nama_varian'];
$id_varian = $_POST['id_varian'];


 
// update data ke database
mysqli_query($conn,"update varian_rasa set nama_varian='$nama_varian' where id_varian='$id_varian'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-varian.php");
 
?>