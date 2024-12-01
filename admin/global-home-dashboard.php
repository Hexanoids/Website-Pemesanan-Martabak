
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
      <title>Dashboard Super Admin Martabak Jakarta 1994</title>
      <link rel="stylesheet" href="../style/styledashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
      <?php
          include 'nav-admin.php'
				?>
    


        <?php
				require '../conn.php';
				
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `id_user`='$_SESSION[id_user]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
				?>

        <section class="main">
          <div class="main-top">
            <h1>HOME SUPER ADMIN</h1>
          </div>
          <div class="main-skills">
            <div class="card">
              <img src="../asset/wave.png" alt="Hai">
              <div class="card-content">
                <h1>Selamat Datang <?php echo $fetch['full_name']; ?></h1>

              </div>
              
            </div>
            
          </div>

          <section class="main-course">
            
            <div class="course-box">
              <div class="course">
                <div class="box1">
                  <h1>LIST TABLE</h1>
                </div>

              </div>

              <div class="course">
                <div class="box3">
                  <h1>Table User</h1>
                </div>
                <div class="box4">
                  <h1>User Cart Report</h1>
                </div>
                <div class="box5">
                  <h1>Table Menu</h1>
                </div>
              </div>

              <div class="course">
                <div class="box6">
                  <h1>Table Category Menu</h1>
                </div>
                <div class="box7">
                  <h1>Transaction Report</h1>
                </div>
              </div>

              <div class="course">
                <div class="box8">
                  <h1>Table User Order</h1>
                </div>
              </div>



            </div>

            
          </section>


        </section>
      </div>
    </body>
    </html>