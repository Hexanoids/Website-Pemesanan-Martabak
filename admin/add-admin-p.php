
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
    

        <section class="main">
          <div class="main-top">
            <h1>ADD DATA</h1>
          </div>
          <div class="g-table-admin">
            <div class="card">
              <h3>Tambah Data Admin Pemesanan</h3>

              <form method="post" action="add-action-admin-p.php" >
              <table class="add-form">
                <tr>
                  <td><span>Email</span></td>
                  <td>
                    <div class="toogle">
                      <input type="email" name="email" class="placeholder">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Password</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="password" class="placeholder" >
                    </div>
                  </td>
                </tr>

              </table>
            <div class="flex-button">
              <button>Simpan</button>
            </div>
            </form>
            </div>

            
          </div>



         
        </section>
      </div>
    </body>
    </html>