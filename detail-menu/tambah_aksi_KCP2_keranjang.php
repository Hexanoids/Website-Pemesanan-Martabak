

<?php

session_start();
if(!ISSET($_SESSION['id_user'])){
    header('location:home/index.html');
}



   $v1=isset($_POST["v1"]) ? $_POST["v1"] : "";
   $v2=isset($_POST["v2"]) ? $_POST["v2"] : "";
   $v3=isset($_POST["v3"]) ? $_POST["v3"] : "";
   $v4=isset($_POST["v4"]) ? $_POST["v4"] : "";
   $v5=isset($_POST["v5"]) ? $_POST["v5"] : "";
   $v6=isset($_POST["v6"]) ? $_POST["v6"] : "";
   $v7=isset($_POST["v7"]) ? $_POST["v7"] : "";
   $v8=isset($_POST["v8"]) ? $_POST["v8"] : "";
   $v9=isset($_POST["v9"]) ? $_POST["v9"] : "";
   $v10=isset($_POST["v10"]) ? $_POST["v10"] : "";
   $v11=isset($_POST["v11"]) ? $_POST["v11"] : "";
   $v12=isset($_POST["v12"]) ? $_POST["v12"] : "";
   $v13=isset($_POST["v13"]) ? $_POST["v13"] : "";
   $v14=isset($_POST["v14"]) ? $_POST["v14"] : "";
   $v15=isset($_POST["v15"]) ? $_POST["v15"] : "";
   $v16=isset($_POST["v16"]) ? $_POST["v16"] : "";
   $list_varian=array($v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10,$v11,$v12,$v13,$v14,$v15,$v16);
   $note_varian="";
   for($x=0; $x<count($list_varian); $x++){
     if($list_varian[$x]==null)continue;
     $note_varian .=$list_varian[$x].", ";
   }
   $note_varian=substr($note_varian,0,-2);
   
    

include '../conn.php';
$id_menu = $_GET['id_menu'];
$data = mysqli_query($conn,"select * from menu_martabak where id_menu='$id_menu'");
$d = mysqli_fetch_array($data);


    $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `id_user`='$_SESSION[id_user]'") ;
    $fetch = mysqli_fetch_array($query);


    $cart_id_user = $fetch['id_user'];
    $cart_id_menu = $d['id_menu'];
    $cart_qty_item = $_POST['qty_item'];
    $note_varian;

    echo $cart_id_user;
    echo $cart_id_menu;
    echo $cart_qty_item;
    echo $note_varian;


    mysqli_query($conn,"insert into user_cart values('','$cart_id_user','$cart_id_menu','$cart_qty_item','$note_varian')");

    header("location:../cart-dashboard.php");
?>