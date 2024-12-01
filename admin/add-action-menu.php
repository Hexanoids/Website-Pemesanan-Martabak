<?php 
// koneksi database
include '../conn.php';
 
// menangkap data yang di kirim dari form
$dropdown = $_POST['dropdown'];
$name_menu = $_POST['name_menu'];
$price = $_POST['price'];
$no_varian = $_POST['no_varian'];
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
		mysqli_query($conn, "insert into menu_martabak values('','$name_menu','$price','$filename','$dropdown','$no_varian','$stok')");
		header("location:global-table-menu.php?alert=berhasil");
	}else{
		header("location:global-table-menu.php?alert=gagal");
	}
}

 
?>