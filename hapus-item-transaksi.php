<?php 
// koneksi database
include 'conn.php';
 
// menangkap data id yang di kirim dari url
$id_transaction = $_GET['id_transaction'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from transaction where id_transaction='$id_transaction'");
 
// mengalihkan halaman kembali ke index.php
header("location:transaction-dashboard.php");
 
?>