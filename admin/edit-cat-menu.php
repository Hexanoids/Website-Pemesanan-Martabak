
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
            <h1>ADD DATA</h1>
          </div>
          <div class="g-table-admin">
            <div class="card">
              <h3>Tambah Data Admin Pemesanan</h3>

              <?php
		        include '../conn.php';
		        $id_category = $_GET['id_category'];
		        $data = mysqli_query($conn,"select * from category_martabak where id_category='$id_category'");
		        while($d = mysqli_fetch_array($data)){
	            ?>

              <form method="post" action="edit-action-cat-menu.php" >
              <input type="hidden" name="id_category" class="placeholder" value="<?php echo $id_category; ?>">
              <table class="add-form">
                <tr>
                  <td><span>Nama Kategori Menu</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="name_category" class="placeholder" value="<?php echo $d['name_category']; ?>">
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