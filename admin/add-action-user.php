<?php 
// koneksi database
include '../conn.php';
 
// menangkap data yang di kirim dari form
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$address = $_POST['address'];
$level = $_POST['level'];


 
// menginput data ke database
mysqli_query($conn,"insert into user values('','$full_name','$email','$phone_number','$password','$address','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-user.php");
 
?>