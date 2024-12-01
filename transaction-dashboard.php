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
            <h1>YOUR TRANSACTION</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          
          <form  action="dana-pay.php"   method="post">
          
                      
          
          <div class="transaction-card">
            <h1>Transaction Card</h1>

            <?php
                    include 'conn.php';
				    $data = mysqli_query($conn,"select *FROM `transaction` INNER JOIN `menu_martabak` 
            ON menu_martabak.id_menu=`transaction`.id_menu where id_user='$_SESSION[id_user]';");
            while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>
            <div class="tran-content">
              <input type="hidden" name="id_transaction" value="<?php echo $d['id_transaction']; ?>">
              <input type="hidden" name="pay" value="DANA">
              <table>
                <tr>
                  <td><p>Nama Menu :</p></td>
                  <td><p><?php echo $d['name_menu']; ?></p></td>
                </tr>
                <tr>
                  <td><p>List Varian :</p></td>
                  <td><p><?php echo $d['note_varian']; ?></p></td>
                </tr>
                <tr>
                  <td><p>Harga Menu :</p></td>
                  <td><p><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></td>
                </tr>
                <tr>
                  <td><p>Jumlah Pesanan :</p></td>
                  <td><p><?php echo $d['qty_item']; ?> pcs</p></td>
                </tr>
                <tr>
                  <td><p>Pilih Pengiriman :</p></td>
                  <td>
                    <div class="dropdown">

                      <select name="dropdown" class="dropdown-select">
                        <option>Pilih Pengiriman</option>
                        <option  value="0">Ambil Langsung ke Toko (+ Rp. 0)</option>
                        <option  value="10000">Diantar Ke Rumah (+ Rp. 10000)</option>
                      </select>
                    </div>
                  </td>
                </tr>
              </table>
              <button name="payndlt" class="payment-btn">Bayar Dengan DANA  &#8594;</button>
              <button name="payndlt" formaction="hapus-item-transaksi.php?id_transaction=<?php echo $d['id_transaction']; ?>" class="dlt-payment-btn">Hapus Transaksi &#10006;</button>
            
            
           
            

              
              
            </div>
            <?php 
                    }
                        ?>
           
          </div>

          </form>

          

        </section>

      </div>

      
    </body>
    </html>