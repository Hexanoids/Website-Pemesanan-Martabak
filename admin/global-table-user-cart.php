
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
            <h1>TABLE USER CART</h1>
          </div>

          <div class="g-table-admin">
            <div class="card">

              <div class="">

                </div>
              <div class="table-content">

        <table class="admin-table">
            <thead>
                <tr>
                    <th align="center" width="200px">ID User</th>
                    <th align="center" width="200px">Nama Lengkap</th>
                    <th align="center" width="300px">Nama Menu</th>
                    <th align="center" width="400px">Varian Rasa</th>
                    <th align="center" width="200px">Harga Menu</th>
                    <th align="center" width="200px">Jumlah Item</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    include '../conn.php';
                    $data = mysqli_query($conn, "select *FROM user_cart 
                    INNER JOIN `menu_martabak` ON menu_martabak.id_menu=user_cart.id_menu 
                    INNER JOIN `user` ON `user`.id_user=user_cart.id_user");
                    while($d = mysqli_fetch_array($data)){
                      $price=$d['price'];
                        ?>
                        <tr>
                            <td align="center" width="200px"><?php echo $d['id_user']; ?></td>
                            <td align="center" width="200px"><?php echo $d['full_name']; ?></td>
                            <td align="center" width="300px"><?php echo $d['name_menu']; ?></td>
                            <td align="center" width="400px"><?php echo $d['note_varian']; ?></td>
                            <td align="center" width="200px"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></td>
                            <td align="center" width="200px"><?php echo $d['qty_item']; ?></td>

                        
                        </tr>
                        <?php 
                    }
                        ?>
            </tbody>
        </table>

              </div>
              
            </div>
            
          </div>
        </section>
      </div>
    </body>
    </html>