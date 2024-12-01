<?php 
// Mengaktifkan session pada PHP
session_start();

// Menghubungkan PHP dengan koneksi database
include '../conn.php';

// Menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND password='$password'");

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// Cek apakah email dan password ditemukan pada database
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    // Buat session id_user
    $_SESSION['id_user'] = $data['id_user'];

    // Cek jika user login sebagai admin
    if ($data['level'] == "super_admin") {
        // Buat session login dan level
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "super_admin";
        // Alihkan ke halaman dashboard admin
        header("Location: ../admin/global-home-dashboard.php");

    // Cek jika user login sebagai admin_pemesanan
    } else if ($data['level'] == "admin_pemesanan") {
        // Buat session login dan level
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "admin_pemesanan";
        // Alihkan ke halaman dashboard pegawai
        header("Location: ../admin/pemesanan-home-dashboard.php");

    // Cek jika user login sebagai pelanggan
    } else if ($data['level'] == "pelanggan") {
        // Buat session login dan level
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "pelanggan";
        // Alihkan ke halaman dashboard pelanggan
        header("Location: ../home-dashboard.php");

    } else {
        // Alihkan ke halaman login kembali dengan pesan gagal
        header("Location: ../home/index.php?pesan=gagal");
    }   
} else {
    // Alihkan ke halaman login kembali dengan pesan gagal
    header("Location: ../home/index.php?pesan=gagal");
}
?>
