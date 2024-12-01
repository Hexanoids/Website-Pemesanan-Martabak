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
$id_order = $_POST['id_order'];


$dropdownstatus = $_POST['dropdown-status'];
if ($dropdownstatus  == 1){
    $status_order = "Pesanan Dikonfirmasi & Dalam Pembuatan Pesanan";
} else if ($dropdownstatus  == 2){
    $status_order = "Pesanan Telah Siap Diantar/Diambil";
} else if ($dropdownstatus  == 3){
    $status_order = "Pesanan Telah Selesai";
} else if ($dropdownstatus  == 4){
    $status_order = "Menunggu Konfirmasi dari Admin";
}


$dropdownverif = $_POST['dropdown-verif'];
if ($dropdownverif == 1){
    $verifikasi = "Pesanan Belum Dikonfirmasi";
} else if ($dropdownverif == 2){
    $verifikasi = "Pesanan Telah DIkonfirmasi";
}


 
// update data ke database
mysqli_query($conn,"update user_order set status_order='$status_order', verifikasi='$verifikasi' where id_order='$id_order'");
 
// mengalihkan halaman kembali ke index.php
header("location:pemesanan-table-user-order.php");
 
?>