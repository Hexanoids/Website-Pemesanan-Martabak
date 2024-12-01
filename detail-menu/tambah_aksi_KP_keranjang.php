

<?php

session_start();
if(!ISSET($_SESSION['id_user'])){
    header('location:home/index.html');
}
  
    

include '../conn.php';
$id_menu = $_GET['id_menu'];
$data = mysqli_query($conn,"select * from menu_martabak where id_menu='$id_menu'");
$d = mysqli_fetch_array($data);


    $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `id_user`='$_SESSION[id_user]'") ;
    $fetch = mysqli_fetch_array($query);


    $cart_id_user = $fetch['id_user'];
    $cart_id_menu = $d['id_menu'];
    $cart_qty_item = $_POST['qty_item'];
    $note_varian = $_POST['varian'];


    mysqli_query($conn,"insert into user_cart values('','$cart_id_user','$cart_id_menu','$cart_qty_item','$note_varian')");

    header("location:../cart-dashboard.php");
?>