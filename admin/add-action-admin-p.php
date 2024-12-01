<?php 
// koneksi database
include '../conn.php';
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];
$password = $_POST['password'];


 
// menginput data ke database
mysqli_query($conn,"insert into admin_pemesanan values('','$email','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-admin.php");
 
?>