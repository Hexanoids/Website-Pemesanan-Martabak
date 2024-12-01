<?php 
// koneksi database
include '../conn.php';
 
// menangkap data yang di kirim dari form
$name_category = $_POST['name_category'];



 
// menginput data ke database
mysqli_query($conn,"insert into category_martabak values('','$name_category')");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-cat-menu.php");
 
?>