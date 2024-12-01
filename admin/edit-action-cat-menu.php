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
$name_category = $_POST['name_category'];
$id_category = $_POST['id_category'];


 
// update data ke database
mysqli_query($conn,"update category_martabak set name_category='$name_category' where id_category='$id_category'");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-cat-menu.php");
 
?>