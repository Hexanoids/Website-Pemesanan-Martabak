
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
      <title>Dashboard Admin Global Martabak Jakarta 1994</title>
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
            <h1>EDIT DATA</h1>
          </div>
          <div class="g-table-admin">
            <div class="card">
              <h3>Edit Data User</h3>

              <?php
		        include '../conn.php';
		        $id_user = $_GET['id_user'];
		        $data = mysqli_query($conn,"select * from user where id_user='$id_user'");
		        while($d = mysqli_fetch_array($data)){
	            ?>

              <form method="post" action="edit-action-user.php" >
              <input type="hidden" name="id_user" class="placeholder" value="<?php echo $id_user; ?>">
              <table class="add-form">
                <tr>
                  <td><span>Nama Lengkap</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="full_name" class="placeholder" value="<?php echo $d['full_name']; ?>">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Email</span></td>
                  <td>
                    <div class="toogle">
                      <input type="email" name="email" class="placeholder" value="<?php echo $d['email']; ?>">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Nomor Telepon/WhatsApp</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="phone_number" class="placeholder" value="<?php echo $d['phone_number']; ?>">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Password</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="password" class="placeholder" value="<?php echo $d['password']; ?>">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Alamat lengkap Rumah</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="address" class="placeholder" value="<?php echo $d['address']; ?>">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Level</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="level" class="placeholder" value="<?php echo $d['level']; ?>">
                    </div>
                  </td>
                </tr>

              </table>
            <div class="flex-button">
              <button>Simpan</button>
            </div>
            </form>
            </div>

            <?php 
	        }
	        ?>
            
          </div>



         
        </section>
      </div>
    </body>
    </html>