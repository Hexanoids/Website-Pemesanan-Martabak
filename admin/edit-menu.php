
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
              <h3>Edit Data Menu</h3>

              <?php
		        include '../conn.php';
		        $id_menu = $_GET['id_menu'];
		        $data = mysqli_query($conn,"select *FROM menu_martabak INNER JOIN category_martabak
            ON menu_martabak.id_category=category_martabak.id_category where id_menu='$id_menu'");
		        while($d = mysqli_fetch_array($data)){
	            ?>

              <form method="post" action="edit-action-menu.php" enctype="multipart/form-data">
              <input type="hidden" name="id_menu" class="placeholder" value="<?php echo $id_menu; ?>">
              <table class="add-form">
                <tr>
                  <td><span>Nama Menu</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="name_menu" class="placeholder" value="<?php echo $d['name_menu']; ?>">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Harga</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="price" class="placeholder" value="<?php echo $d['price']; ?>">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Image Menu</span></td>
                  <td>
                    <div class="toogle">
                    <input class="placeholder" type="file" name="foto" value="<?php echo $d['img_menu']; ?>" placeholder="<?php echo $d['img_menu']; ?>" required="required"/>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <div class="toogle">
                      <p class="note-category">Image Menu yang tersimpan saat ini "<?php echo $d['img_menu']; ?>"</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Kategori Menu</span></td>
                  <td>
                  <div class="dropdown">


                    <select name="dropdown" class="dropdown-select">
                      <option  value="<?php echo $d['id_category']; ?>"><?php echo $d['name_category']; ?></option>

                    <?php
                    include '../conn.php';
				            $data1 = mysqli_query($conn,"select * FROM category_martabak;");
                    while($d1 = mysqli_fetch_array($data1)){
              
                    ?>

                      <option  value="<?php echo $d1['id_category']; ?>"><?php echo $d1['name_category']; ?></option>
                      
                      <?php 
                    }
                        ?>

                    </select>
                  </div>
                    
                  </td>
                  
                </tr>
                
                <tr>
                  <td><span>Nomor Varian Rasa</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="no_varian" class="placeholder" value="<?php echo $d['no_varian']; ?>">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <p class="note-category">Note Nomor Varian : <br>
                      - NON <br>
                      - KCP1 <br>
                      - KCP2<br>
                      - KCP3<br>
                      - KP<br>
                      - TBP8R<br>
                      - TBP12R<br>
                      - TBP16R<br>
                      - TBK<br>
                      - TBKTK<br>
                  </td>
                </tr>
                <tr>
                  <td><span>Stok Menu</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="stok" class="placeholder" value="<?php echo $d['stok']; ?>">
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