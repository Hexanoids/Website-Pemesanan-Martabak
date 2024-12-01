
<?php 
// koneksi database
include '../conn.php';
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];

 
// menginput data ke database
mysqli_query($conn,"insert into user values('','$full_name','$email','$phone_number','$password','$address','pelanggan')");
 
echo "<script>alert('Login Successfully!')</script>";

// mengalihkan halaman kembali ke index.php
header("location:login.php");
 
?>