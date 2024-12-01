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
      <link rel="stylesheet" href="./style/styledashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="./asset/logo.jpg" alt="">
              <span class="nav-item">Martabak Jakarta 1994</span>
            </a></li>
            <li><a href="./home-dashboard.php">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a></li>
            <li><a href="./profile-dashboard.php">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a></li>
            <li><a href="./menu-dashboard.php">
              <i class="fas fa-utensils"></i>
              <span class="nav-item">Menu</span>
            </a></li>
            <li><a href="./cart-dashboard.php">
              <i class="fas fa-shopping-cart"></i>
              <span class="nav-item">Cart</span>
            </a></li>
            <li><a href="transaction-dashboard.php">
              <i class="fas fa-money-bill"></i>
              <span class="nav-item">Transaction</span>
            </a></li>
            <li><a href="./history-dashboard.php">
              <i class="fas fa-clipboard-list"></i>
              <span class="nav-item">History Order</span>
            </a></li>
            <li><a href="./help-dashboard.html">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">About</span>
            </a></li>
            <li><a href="./login/logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
    
        <section class="main">
          <div class="main-top">
            <h1>YOUR DETAIL HISTORY ORDER</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          
          <?php 

          $id_order = $_GET['id_order'];

          include 'conn.php';
          $data = mysqli_query($conn,"select *FROM `user_order` 
          INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
          INNER JOIN `user` ON `user`.id_user=user_order.id_user where id_order='$id_order'");
          $d = mysqli_fetch_array($data);
          $price=$d['price'];
          $total_price=$d['total_price'];
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
                <p>Harga Menu : <?php echo "Rp " . number_format("$price", 0, ",", "."); ?></p>
                </div>
            </div>
            <div class="order-dtl">
                <h3>Informasi Pesanan</h3>
                <p>Pembayaran Dengan : <?php echo $d['pembayaran']; ?></p>
                <p>Metode Pengantaran : <?php echo $d['delivery']; ?></p>
                <p>Tanggal & Waktu Order : <?php echo $d['date_order']; ?></p>
                <p>Verifikasi Pesanan : <?php echo $d['verifikasi']; ?></p>
                <p>Status Pesanan Pesanan : <?php echo $d['status_order']; ?></p>
                <p>Total Harga Pesanan : <?php echo "Rp " . number_format("$total_price", 0, ",", "."); ?></p>
            </div>
          </div>
          

   

          

        </section>
      </div>

      
    </body>
    </html>