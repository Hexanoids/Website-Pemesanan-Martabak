<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/391827d54c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../asset/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css">
    <title>Martabak Jakarta 1994</title>
</head>
<body>




  <script>
    function updateButtonState() {
        const buttons = [
            { id: 'loginButton', originalText: 'Login' },
            { id: 'signUpButton', originalText: 'Sign Up' },
            { id: 'mulaiButton', originalText: 'Mulai' }
        ];

        const currentDateTime = new Date();
        // Konversi waktu ke zona waktu WIB (UTC+7)
        const wibTime = new Date(currentDateTime.toLocaleString('en-US', { timeZone: 'Asia/Jakarta' }));
        const hours = wibTime.getHours();

        buttons.forEach(button => {
            const btnElement = document.getElementById(button.id);
            if (hours >= 0 && hours < 12) {
                btnElement.disabled = true;
                btnElement.textContent = 'Close';
            } else {
                btnElement.disabled = false;
                btnElement.textContent = button.originalText;
            }
        });
    }

    window.onload = function() {
        updateButtonState();
        // Cek setiap menit untuk memperbarui status tombol
        setInterval(updateButtonState, 60000);
    }
</script>

    

    <div class="product-nav">
        <nav>
            <img class="logo" src="../asset/logo.jpg" alt="logo">
            <ul id="MenuItems">
                <li><a href="./index.html">Home</a></li>
                <li><a href="./product.php">Product</a></li>
                <li><a href="./about.html">About</a></li>
            </ul>
            <div>
              <a href="../login/login.php"><button id="loginButton">Login</button></a>
              <a href="../login/register.php"><button class="lang-btn" id="signUpButton">Sign Up</button></a>
            </div>
        </nav>
    </div>
    
    <div class="product-header">
        <h2>Cari Produk yang Kamu Sukai Disini</h2>
    </div>

    <div class="container-scrolling">
        <h2 class="scrolling-title">MARTABAK TELUR AYAM</h2>
        <ul class="cards">
          <?php
            include 'p-martabak-telur-ayam.php';
          ?>
        </ul>
    </div>    

      <div class="container-scrolling">
        <h2 class="scrolling-title">MARTABAK TELUR BEBEK</h2>
        <ul class="cards">
        <?php
            include 'p-martabak-telur-bebek.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">TERANG BULAN SUPER DILIPAT ( UKURAN LOYANG 28 CM OLESAN SIMAS )</h2>
        <ul class="cards">
        <?php
            include 'p-TB-SUPER-DILIPAT.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">TERANG BULAN SPESIAL DILIPAT ( UKURAN LOYANG 28 CM OLESAN SIMAS )</h2>
        <ul class="cards">
        <?php
            include 'p-TB-SPESIAL-DILIPAT.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">TERANG BULAN BIASA DILIPAT ( UKURAN LOYANG 23 CM OLESAN SIMAS )</h2>
        <ul class="cards">
        <?php
            include 'p-TB-BIASA-DILIPAT.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">TERANG BULAN ISTIMEWA MEDIUM ( MODEL PIZZA / 8 RASA )</h2>
        <ul class="cards">
        <?php
            include 'p-TBI-MEDIUM.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">TERANG BULAN ISTIMEWA BESAR LOYANG 28 CM ( MODEL PIZZA / 8 RASA )</h2>
        <ul class="cards">
        <?php
            include 'p-TBI-BESAR.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">TERANG BULAN PREMIUM DILIPAT BESAR UK 28CM</h2>
        <ul class="cards">
        <?php
            include 'p-TBP-28.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">TERANG BULAN PREMIUM DILIPAT UK 23 CM</h2>
        <ul class="cards">
          <?php
            include 'p-TBP-23.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">PAKET ULANG TAHUN</h2>
        <ul class="cards">
        <?php
            include 'p-ULTAH.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">MARTABAK MINI 13CM</h2>
        <ul class="cards">
        <?php
            include 'p-MM.php';
          ?>
        </ul>
      </div>

      <div class="container-scrolling">
        <h2 class="scrolling-title">LAINNYA</h2>
        <ul class="cards">
        <?php
            include 'p-LAINNYA.php';
          ?>
        </ul>
      </div>

      




    <div class="footer">
        <div class="row">
            <div class="col">
                <a href="./index.html">Home</a>
                <a href="./product.php">Products</a>
                <a href="./about.html">About</a>
            </div>
        </div>

        <p class="copyright-text">Copyright 2024</p>
    </div>
</body>
</html>