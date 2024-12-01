
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
            <h1>TABLE CATEGORY MENU</h1>
          </div>

          <div class="g-table-admin">
            <div class="card">
              <div class="">
                            <a href="add-cat-menu.php"><button class="btn-add-table">+ TAMBAH DATA KATEGORI MENU</button></a>
                        </div>
              <div class="table-content">

        <table class="admin-table">
            <thead>
                <tr>
                    <th align="center" width="800px">Nama Kategori Menu</th>

                </tr>
            </thead>
            <tbody>
                <?php 

                    include '../conn.php';
                    $data = mysqli_query($conn, "SELECT * FROM `category_martabak`");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td align="center" width="800px"><?php echo $d['name_category']; ?></td>
                            <th align="center">
                                <div class="btn-table">
                                    <a href="edit-cat-menu.php?id_category=<?php echo $d['id_category']; ?>"><button class="">EDIT</button></a>
                                    <a href="delete-cat-menu.php?id_category=<?php echo $d['id_category']; ?>"><button class="">HAPUS</button></a>
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