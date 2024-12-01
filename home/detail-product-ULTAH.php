<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/391827d54c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../asset/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/styledashboardnew.css">
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


    <?php
		        include '../conn.php';
		        $id_menu = $_GET['id_menu'];
		        $data = mysqli_query($conn,"select * from menu_martabak where id_menu='$id_menu'");
		        while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
	          ?>

    <section class="menu-content">
            <a href="./product.php" class="back-btn"><i class="fa fa-arrow-left"></i>Kembali</a>


            <form action="../login/login.php" method="post">
            <div class="detail-card">
                <img src="../asset/<?php echo $d['img_menu']; ?>" name="img_menu" alt="">
                <div class="detail-card-content">
                     <h2 name="name_menu"><?php echo $d['name_menu']; ?></h2>

                     <?php
                        $sql = "select nama_varian from varian_rasa where id_varian = 38";
                        $result = $conn->query($sql);
                        
                        $ids = array();
                        
                        // Memeriksa hasil query dan memasukkannya ke dalam array
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $ids[] = $row["nama_varian"];
                            }
                        } else {
                            echo "0 results";
                        }
                        
                        // Menggabungkan nama_varian dengan koma
                        $ids_string = implode(", ", $ids);

                     ?>
                     <p><strong>Varian Rasa Yang Tersedia : </strong><?php echo $ids_string; ?></p>
                     <p><strong>Opsi Pengiriman Yang Tersedia : </strong>Ambil Langsung Ke Toko (Biaya Ongkir = + Rp. 0) 
                     Atau Diantar Ke Rumah (Biaya Ongkir = + Rp. 10.000)</p>

                    <div class="flex-price">
                      <h1 name="price"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></h1> 

                    </div>
                    
                    <?php 
	                  }
	                  ?>
                    
                </div>
                
            </div>
           
            
            
          </section>

      




    <div class="footer">
        <div class="row">
            <div class="col">
                <a href="./index.html">Home</a>
                <a href="./product.php">Products</a>
                <a href="./about.html">About</a>
            </div>
            <div class="col">
              <a href="../admin/login-admin-global.php">Super Admin</a>
              <a href="../admin/login-admin-pemesanan.php">Admin Pemesanan</a>
            </div>
        </div>

        <p class="copyright-text">Copyright 2024</p>
    </div>
</body>
</html>