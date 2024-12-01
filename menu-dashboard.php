<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard Martabak Jakarta 1994</title>
      <link rel="stylesheet" href="./style/styledashboard.css" />
      <link rel="stylesheet" href="./style/card-product.css" />
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
            <h1>MENU</h1>
            <i class="fas fa-user-cog"></i>
          </div>


          <!--Martabak Telur Ayam-->

          <section class="menu-content">
            <h1>Martabak Telur Ayam</h1>
            <div class="list-card">
                <div class="card-menu">
                    <?php
                      include './Menu/martabak-telur.php';
                    ?>
                </div>
            </div>
          </section>


          <!--Martabak Telur Bebek-->

          <section class="menu-content">
            <h1>Martabak Telur Bebek</h1>
            <div class="list-card">
                <div class="card-menu">
                    <?php
                      include './Menu/martabak-telur-bebek.php';
                    ?>
                </div>
            </div>
          </section>


          <!--TERANG BULAN SUPER DILIPAT ( UKURAN LOYANG 28 CM OLESAN BLUE BAND )-->

          <section class="menu-content">
            <h1>TERANG BULAN SUPER DILIPAT ( UKURAN LOYANG 28 CM OLESAN BLUE BAND )</h1>
            <div class="list-card">
                <div class="card-menu">
                    <?php
                      include './Menu/TB-SUPER-DILIPAT.php';
                    ?>
                </div>
            </div>
          </section>


          <!--TERANG BULAN SPESIAL DILIPAT ( UKURAN LOYANG 28 CM OLESAN SIMAS )-->

          <section class="menu-content">
            <h1>TERANG BULAN SPESIAL DILIPAT ( UKURAN LOYANG 28 CM OLESAN SIMAS )</h1>
            <div class="list-card">
                <div class="card-menu">
                  <?php
                      include './Menu/TB-SPESIAL-DILIPAT.php';
                    ?>
                </div>
            </div>
          </section>

          <!--TERANG BULAN BIASA DILIPAT ( UKURAN LOYANG 23 CM OLESAN SIMAS )-->

          <section class="menu-content">
            <h1>TERANG BULAN BIASA DILIPAT ( UKURAN LOYANG 23 CM OLESAN SIMAS )</h1>
            <div class="list-card">
                <div class="card-menu">
                    <?php
                      include './Menu/TB-BIASA-DILIPAT.php';
                    ?>
                </div>
            </div>
          </section>


          <!--TERANG BULAN ISTIMEWA MEDIUM ( MODEL PIZZA / 8 RASA )-->

          <section class="menu-content">
            <h1>TERANG BULAN ISTIMEWA MEDIUM ( MODEL PIZZA / 8 RASA )</h1>
            <div class="list-card">
                <div class="card-menu">
                <?php
                      include './Menu/TBI-MEDIUM.php';
                    ?>
                </div>
            </div>
          </section>

          
          <section class="menu-content">
            <h1>TERANG BULAN ISTIMEWA BESAR LOYANG 28 CM ( MODEL PIZZA / 8 RASA )</h1>
            <div class="list-card">
                <div class="card-menu">
                <?php
                      include './Menu/TBI-BL.php';
                    ?>
                </div>
            </div>
          </section>
          <section class="menu-content">
            <h1>TERANG BULAN PREMIUM DILIPAT BESAR UK 28CM</h1>
            <div class="list-card">
                <div class="card-menu">
                <?php
                      include './Menu/TBP-DB.php';
                    ?>
                </div>
            </div>
          </section>


          <section class="menu-content">
            <h1>TERANG BULAN PREMIUM DILIPAT UK 23 CM</h1>
            <div class="list-card">
                <div class="card-menu">
                    <?php
                      include './Menu/TBP-D.php';
                    ?>
                </div>
            </div>
          </section>


          <section class="menu-content">
            <h1>PAKET ULANG TAHUN</h1>
            <div class="list-card">
                <div class="card-menu">
                    <?php
                      include './Menu/P-Ultah.php';
                    ?>
                </div>
            </div>
          </section>


          <section class="menu-content">
            <h1>MARTABAK MINI 13CM</h1>
            <div class="list-card">
                <div class="card-menu">
                    <?php
                      include './Menu/Mini.php';
                    ?>
                </div>
            </div>
          </section>


          <section class="menu-content">
            <h1>NASI PUTIH</h1>
            <div class="list-card">
                <div class="card-menu">
                    <?php
                      include './Menu/Nasi.php';
                    ?>
                </div>
            </div>
          </section>



        </section>
      </div>
      
      
    </body>
    </html>