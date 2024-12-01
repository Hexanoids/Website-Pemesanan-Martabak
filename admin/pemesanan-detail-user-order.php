<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header('location:home/index.html');
	}
?>



<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard Martabak Jakarta 1994</title>
      <link rel="stylesheet" href="../style/styledashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
      <?php
          include 'nav-admin-pemesanan.php'
				?>
    
        <section class="main">
          <div class="main-top">
            <h1>YOUR DETAIL USER ORDER</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          
          <?php 

          $id_order = $_GET['id_order'];

          include '../conn.php';
          $data = mysqli_query($conn,"select *FROM `user_order` 
          INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
          INNER JOIN `user` ON `user`.id_user=user_order.id_user where id_order='$id_order'");
          $d = mysqli_fetch_array($data)
            ?>
          <div class="dtl-hstr">
            <div class="content-dtl">
                <div class="user-dtl">
                    <h3>Informasi Pemesan</h3>
                    <p>Nama Lengkap : <?php echo $d['full_name']; ?></p>
                    <p>Email : <?php echo $d['email']; ?></p>
                    <p>Nomor Telepon/WhatsApp : <?php echo $d['phone_number']; ?></p>
                    <p>Alamat Rumah : <?php echo $d['address']; ?></p>

                </div>
                <div class="menu-dtl">
                <h3>Informasi Menu</h3>
                <p>Nama Menu : <?php echo $d['name_menu']; ?></p>
                <p>List Varian Rasa : <?php echo $d['note_varian']; ?></p>
                <p>Jumlah Item : <?php echo $d['qty_item']; ?></p>
                <p>Harga Menu : <?php echo $d['price']; ?></p>
                </div>
            </div>
            <div class="order-dtl">
                <h3>Informasi Pesanan</h3>
                <p>Pembayaran Dengan : <?php echo $d['pembayaran']; ?></p>
                <p>Metode Pengantaran : <?php echo $d['delivery']; ?></p>
                <p>Tanggal & Waktu Order : <?php echo $d['date_order']; ?></p>
                <p>Verifikasi Pesanan : <?php echo $d['verifikasi']; ?></p>
                <p>Status Pesanan Pesanan : <?php echo $d['status_order']; ?></p>
                <p>Total Harga Pesanan : <?php echo $d['total_price']; ?></p>
            </div>
          </div>

   

          

        </section>
      </div>

      
    </body>
    </html>