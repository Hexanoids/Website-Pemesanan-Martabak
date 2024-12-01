<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header('location:home/index.html');
	}

    date_default_timezone_set('Asia/Jakarta');

    $dropdown = $_POST['dropdown'];
    if ($dropdown == 0){
        $notedropdown = "Ambil Langsung ke Toko (+ Rp. 0)";
    } else{
        $notedropdown = "Diantar Ke Rumah (+ Rp. 10000)";
    }


    $pembayaran = $_POST['pembayaran'];
    $total_order = $_POST['total_order'];
    $transaction =$_GET['id_transaction'];
    $date = date('Y-m-d H:i:s');

    include 'conn.php';

    $data = mysqli_query($conn,"select *FROM `transaction` INNER JOIN `menu_martabak` 
            ON menu_martabak.id_menu=`transaction`.id_menu INNER JOIN `user` ON `user`.id_user=transaction.id_user where id_transaction='$transaction;';");
	$d = mysqli_fetch_array($data);

    $id_user = $d['id_user'];
    $id_menu = $d['id_menu'];
    $qty_item = $d['qty_item'];
    $note_varian = $d['note_varian'];
    


    mysqli_query($conn,"insert into user_order values('','$id_user','$id_menu','$qty_item','$note_varian',
    '$pembayaran','$notedropdown','$date','Menunggu Konfirmasi dari Admin','$total_order','Pesanan Belum Dikonfirmasi')");

    mysqli_query($conn,"delete from transaction where id_transaction='$transaction;'");

    header("location:history-dashboard.php");

?>