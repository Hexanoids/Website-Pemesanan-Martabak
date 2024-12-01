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
            <h1>YOUR CART</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          


          <?php
                    include 'conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select id_cart, user_cart.id_user, menu_martabak.id_menu, menu_martabak.img_menu, menu_martabak.name_menu, 
            menu_martabak.price, user_cart.qty_item, user_cart.note_varian
            FROM user_cart INNER JOIN `menu_martabak` ON menu_martabak.id_menu=user_cart.id_menu where user_cart.id_user='$_SESSION[id_user]';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>

            <div class="cart-card">
              <input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
              <input type="hidden" name="id_menu" value="<?php echo $d['id_menu']; ?>">
            <img name="img_menu" src="./asset/<?php echo $d['img_menu']; ?>" alt="">

            <div class="jarak">
                <div class="line"></div>
            <div class="cart-title">
                <h1 name="name_menu"><?php echo $d['name_menu']; ?></h1>
                <p name="note_varian">Varian Rasa : <?php echo $d['note_varian']; ?></p>
            </div>
            <div class="line"></div>
            <div class="cart-qty">
                <h2 name="qty_item"><?php echo $d['qty_item']; ?> Pcs</h2>
            </div>
            <div class="line"></div>
            <h2 name="price" class="cart-price"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></h2>
            <div class="line"></div>

            <div class="flex-cart-btn">
              <a  value="bayar" name="bayar" href="tambah-data-transaction.php?id_cart=<?php echo $d['id_cart']; ?>" class="pay-btn">Bayar</a>
              <a  value="delete" name="delete" href="hapus-item-keranjang.php?id_cart=<?php echo $d['id_cart']; ?>" class="delete-cart">&#10006;</a>

            </div>
            
            </div>
            
            
          </div>
          
          <?php 
				}
					?>
          
          

          

        </section>

      </div>

      
    </body>
    </html>