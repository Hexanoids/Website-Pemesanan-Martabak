
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
      <title>Dashboard Admin Pemesanan Martabak Jakarta 1994</title>
      <link rel="stylesheet" href="../style/styledashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
      <?php
          include 'nav-admin-pemesanan.php'
				?>
    


    <?php
				require '../conn.php';
				
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `id_user`='$_SESSION[id_user]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
				?>

        <section class="main">
          <div class="main-top">
            <h1>HOME ADMIN PEMESANAN</h1>
          </div>
          <div class="main-skills">
            <div class="card">
              <img src="../asset/wave.png" alt="Hai">
              <div class="card-content">
                <h1>Selamat Datang Admin Pemesanan <?php echo $fetch['full_name']; ?></h1>

              </div>
              
            </div>
            
          </div>

          <section class="main-course">
            
            <div class="course-box">
              <div class="course">
                <div class="box1">
                  <h1>LIST TABLE</h1>
                </div>
                <div class="box2">
                  <h1>Table User Order</h1>
                </div>
              </div>



            </div>

            
          </section>


        </section>
      </div>
    </body>
    </html>