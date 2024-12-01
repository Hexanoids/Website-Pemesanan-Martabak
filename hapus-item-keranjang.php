<?php 
// koneksi database
include 'conn.php';
 
// menangkap data id yang di kirim dari url
$id_cart = $_GET['id_cart'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from user_cart where id_cart='$id_cart'");
 
// mengalihkan halaman kembali ke index.php
header("location:cart-dashboard.php");
 
?>