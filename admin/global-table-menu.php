
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
            <h1>TABLE MENU</h1>
          </div>

          <div class="g-table-admin">
            <div class="card">

              <div class="">
                    <a href="add-menu.php"><button class="btn-add-table">+ TAMBAH DATA MENU</button></a>
                </div>
              <div class="table-content">

        <table class="admin-table">
            <thead>
                <tr>
                    <th align="center" width="200px">Nama Menu</th>
                    <th align="center" width="200px">Harga</th>
                    <th align="center" width="300px">Nama File IMG</th>
                    <th align="center" width="400px">Kategori Menu</th>
                    <th align="center" width="300px">Nomor Varian Rasa</th>
                    <th align="center" width="200px">Stok Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    include '../conn.php';
                    $data = mysqli_query($conn, "select * FROM `menu_martabak` INNER JOIN `category_martabak` 
                    ON category_martabak.id_category=`menu_martabak`.id_category
                    GROUP BY id_menu ASC;");
                    while($d = mysqli_fetch_array($data)){
                      $price=$d['price'];
                        ?>
                        <tr>
                            <td align="center" width="200px"><?php echo $d['name_menu']; ?></td>
                            <td align="center" width="200px"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></td>
                            <td align="center" width="300px"><?php echo $d['img_menu']; ?></td>
                            <td align="center" width="400px"><?php echo $d['name_category']; ?></td>
                            <td align="center" width="300px"><?php echo $d['no_varian']; ?></td>
                            <td align="center" width="200px"><?php echo $d['stok']; ?></td>
                            <th align="center">
                                <div class="btn-table">
                                    <a href="edit-menu.php?id_menu=<?php echo $d['id_menu']; ?>"><button class="">EDIT</button></a>
                                    <a href="delete-menu.php?id_menu=<?php echo $d['id_menu']; ?>"><button class="">HAPUS</button></a>
                                </div>
                            </th>
                        
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