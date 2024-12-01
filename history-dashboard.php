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
            <h1>YOUR HISTORY ORDER</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          
          <div class="table-history">
            <table>
              <tr>
                <td class="row-rincian">RINCIAN</td>
                <td class="row-tgl">TANGGAL</td>
                <td class="row-status">VERIFIKASI PESANAN</td>
                <td class="row-status">STATUS PESANAN</td>
                <td class="row-detail">DETAIL</td>
              </tr>


              <?php 

				include 'conn.php';
				$no = 1;
				$data = mysqli_query($conn,"select *FROM `user_order` 
        INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
        INNER JOIN `user` ON `user`.id_user=user_order.id_user where user_order.id_user='$_SESSION[id_user]'");
				while($d = mysqli_fetch_array($data)){
          ?>
              <tr>
                <td class="row-rincian"><?php echo $d['name_menu']; ?></td>
                <td class="row-tgl"><?php echo $d['date_order']; ?></td>
                <td class="row-status"><?php echo $d['verifikasi']; ?></td>
                <td class="row-status"><?php echo $d['status_order']; ?></td>
                <td class="row-detail"><a href="detail-history.php?id_order=<?php echo $d['id_order']; ?>"><button class="dtl-btnn">Detail</button></a></td>
              </tr>
<?php 
				}
					?>

            </table>
          </div>
          

   

          

        </section>
      </div>

      
    </body>
    </html>