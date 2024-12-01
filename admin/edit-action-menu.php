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
$name_menu = $_POST['name_menu'];
$price = $_POST['price'];

$dropdown = $_POST['dropdown'];
$no_varian = $_POST['no_varian'];
$id_menu = $_POST['id_menu'];
$stok = $_POST['stok'];


$ekstensi =  array('png','jpg','jpeg','gif','jfif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:global-table-menu.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		move_uploaded_file($_FILES['foto']['tmp_name'], '../asset/'.$filename);
		mysqli_query($conn, "update menu_martabak set name_menu='$name_menu', price='$price', img_menu='$filename', id_category='$dropdown', no_varian='$no_varian', stok='$stok' where id_menu='$id_menu'");
		header("location:global-table-menu.php?alert=berhasil");
	}else{
		header("location:global-table-menu.php?alert=gagal");
	}
}
 
?>