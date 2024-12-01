<?php 
// koneksi database
include '../conn.php';
 
// menangkap data yang di kirim dari form
$name_varian = $_POST['name_varian'];



 
// menginput data ke database
mysqli_query($conn,"insert into varian_rasa values('','$name_varian')");
 
// mengalihkan halaman kembali ke index.php
header("location:global-table-varian.php");
 
?>