

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard Martabak Jakarta 1994</title>
      <link rel="stylesheet" href="./style/styledashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h1>PILIH PEMBAYARAN</h1>
            <i class="fas fa-user-cog"></i>
          </div>



          <section class="menu-content">

<?php

$choose_pay = $_POST['pay'];
$id_transaction = $_POST['id_transaction'];


    $dropdown = $_POST['dropdown'];
    if ($dropdown == 0){
        $notedropdown = "Ambil Langsung ke Toko (+ Rp. 0)";
    } else{
        $notedropdown = "Diantar Ke Rumah (+ Rp. 10000)";
    }
?>
            <?php
                    include 'conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select *FROM `transaction` INNER JOIN `menu_martabak` 
            ON menu_martabak.id_menu=`transaction`.id_menu where id_transaction='$id_transaction';");
				    while($d = mysqli_fetch_array($data)){

              $price = $d['price'];
              $qty_item = $d['qty_item'];
              $random = (rand(1,9));;

              $count = $price*$qty_item+$dropdown+$random;
              
              


                ?>
            

            <form  action="add-order.php?id_transaction=<?php echo $d['id_transaction']; ?>" class="pay-form"  method="post">
            <h2>PEMBAYARAN DENGAN <?php echo $choose_pay; ?></h2>
            <img src="./asset/QR-DANA-crop.jpeg" alt="" class="qr-code">

            <div class="pay-content">
                <input type="hidden" name="dropdown" value="<?php echo $dropdown; ?>">
                <input type="hidden" name="total_order" value="<?php echo $count?>">
                <input type="hidden" name="pembayaran" value="<?php echo $choose_pay; ?>">
                
                <h3>Total Biaya Pesanan =<?php echo "Rp " . number_format("$count", 0, ",", "."); ?></h3>
                <p class="warning" >*Harap Bayar Sesuai Dengan Total Biaya Yang Tertera, Angka Terakhir Pada Biaya Pesanan
                   Merupakan Kode Unik Pada Transaksi Anda*</p>
            </div>

            <button class="order-btn">Saya Telah Membayar</button>
            
            <?php 
				}
					?>
            </form>
          </section>

        </section>
      </div>
      

    

     







    </body>
    </html>