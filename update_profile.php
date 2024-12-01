<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$id_user = $_POST['id_user'];
 
// update data ke database
mysqli_query($conn,"update user set full_name='$full_name', email='$email', phone_number='$phone_number', password='$password', address='$address' where id_user='$id_user'");
 
// mengalihkan halaman kembali ke index.php
header("location:profile-dashboard.php");
 
?>