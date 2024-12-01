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
            <li><a href="./login/logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
    
        <section class="main">
          <div class="main-top">
            <h1>YOUR PROFILE</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          
          <?php
				  require'conn.php';
				
				  $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `id_user`='$_SESSION[id_user]'") ;
				  $fetch = mysqli_fetch_array($query);
				  ?>
          <form method="post" action="update_profile.php" class="form">
          <input type="hidden" name="id_user" value="<?php echo $fetch['id_user']; ?>"/>
          <section class="profile">
            <label class="name-profile">
                <span class="span-name">your name</span>
                <div class="toogle">
                  <input type="text" name="full_name" id="edit-name" class="placeholder" value="<?php echo $fetch['full_name']; ?>"  disabled>

                </div>
                
            </label>
            <div class="profile-content">
                <label>
                  <span>Password</span>
                  <div class="toogle">
                    <input type="password" name="password" id="password" class="placeholder" value="<?php echo $fetch['password']; ?>" disabled>
                    <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>

                  </div>
                </label>
                <label>
                  <span>Email</span>
                  <div class="toogle">
                    <input type="email" name="email" id="edit-email" class="placeholder" value="<?php echo $fetch['email']; ?>" disabled>

                  </div>
                </label>
                <label>
                  <span>Nomor WhatsApp</span>
                  <div class="toogle">
                    <input type="text" name="phone_number" id="edit-nomor" class="placeholder" value="<?php echo $fetch['phone_number']; ?>" disabled>

                  </div>
                </label>
                <label>
                  <span>Alamat Lengkap Rumah</span>
                  <div class="toogle">
                    <input type="text" name="address" id="edit-alamat" class="placeholder" value="<?php echo $fetch['address']; ?>" disabled>

                  </div>
                </label>
            
            </div>
              <div class="flex-button">
                <span onclick="myFunction()" class="edit-span">
                <i class="fas fa-pencil-alt"></i><p>Edit</p>
              </span>
              <button>Simpan</button>
              </div>
              

            
            </form>

          </section>



        </section>
      </div>
      <script>
        const passwordField = document.getElementById("password");
        const togglePassword = document.querySelector(".password-toggle-icon i");
      
      togglePassword.addEventListener("click", function () {
        if (passwordField.type === "password") {
          passwordField.type = "text";
          togglePassword.classList.remove("fa-eye");
          togglePassword.classList.add("fa-eye-slash");
        } else {
          passwordField.type = "password";
          togglePassword.classList.remove("fa-eye-slash");
          togglePassword.classList.add("fa-eye");
        }
      });


        function myFunction() {
          document.getElementById("edit-name").disabled = false;
          document.getElementById("password").disabled = false;
          document.getElementById("edit-email").disabled = false;
          document.getElementById("edit-nomor").disabled = false;
          document.getElementById("edit-alamat").disabled = false;
        }

      </script>
      
      
    </body>
    </html>