

<?php

    $id_cart = $_GET['id_cart'];

    include 'conn.php';
    $data = mysqli_query($conn,"SELECT * from user_cart where id_cart='$id_cart'");
    $d = mysqli_fetch_array($data);
    $id_user = $d['id_user'];
    $id_menu = $d['id_menu'];
    $qty_item = $d['qty_item']; 
    $note_varian = $d['note_varian'];


    mysqli_query($conn,"insert into transaction values('','$id_user','$id_menu','$qty_item','$note_varian')");
    mysqli_query($conn,"delete from user_cart where id_cart='$id_cart'");
    


    header("location:transaction-dashboard.php");
?>