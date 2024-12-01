
<!DOCTYPE html>
<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header('location:home/index.html');
	}
?>



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
            <li><a href="./login/logout.php" class="logout" >
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
    


        <?php
				require'conn.php';
				
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `id_user`='$_SESSION[id_user]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
				?>

        <section class="main">
          <div class="main-top">
            <h1>HOME</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="main-skills">
            <div class="card">
              <img src="./asset/wave.png" alt="Hai">
              <div class="card-content">
                <h1>Selamat Datang <?php echo $fetch['full_name']; ?></h1>
                <p>Yuk mulai cari menu martabak atau terang bulan yang kamu inginkan!</p>
                <button><a href="./menu-dashboard.php">Cari Menu</a></button>
              </div>
              
            </div>
            
          </div>

          <section class="main-course">
            
            <div class="course-box">
              <div class="course">
                <div class="box1">
                  <h1>Berbagai Macam Kategori Menu</h1>
                </div>
                <div class="box2">
                  <h1>Martabak Telur Ayam/Bebek</h1>
                </div>
              </div>

              <div class="course">
                <div class="box3">
                  <h1>Terang Bulan Dilipat Super ( Ukuran Loyang 28 cm Olesan Blue Band )</h1>
                </div>
                <div class="box4">
                  <h1>Terang Bulan Dilipat Spesial ( Ukuran Loyang 28 cm Olesan Simas )</h1>
                </div>
                <div class="box5">
                  <h1>Terang Bulan Dilipat Biasa ( Ukuran Loyang 2 cm Olesan Simas )</h1>
                </div>
              </div>

              <div class="course">
                <div class="box6">
                  <h1>Terang Bulan Istimewa Medium ( Model Pizza / 8 Rasa )</h1>
                </div>
                <div class="box7">
                  <h1>Terang Bulan Istimewa Besar Loyang 28 cm ( Model Pizza / 8 Rasa )</h1>
                </div>
              </div>

              <div class="course">
                <div class="box8">
                  <h1>Terang Bulan Premium Dilipat Besar Ukuran 23 cm</h1>
                </div>
                <div class="box9">
                  <h1>Terang Bulan Premium Dilipat Besar Ukuran 28 cm</h1>
                </div>
              </div>
            <div class="course">
              <div class="box10">
                <h1>Paket Ulang Tahun</h1>
              </div>
              <div class="box11">
                <h1>Martabak Mini 13 cm</h1>
              </div>
              <div class="box12">
                <h1>Paket Combo</h1>
              </div>
            </div>
            <div class="course">
              <div class="box13">
                <h1>Extra Topping</h1>
              </div>
              <div class="box14">
                <h1>Minuman</h1>
              </div>
              <div class="box15">
                <h1>Tipker (Tipis Kering)</h1>
              </div>
              <div class="box16">
                <h1>Jagung Susu Keju</h1>
              </div>
            </div>


            </div>

            
          </section>


        </section>
      </div>
    </body>
    </html>