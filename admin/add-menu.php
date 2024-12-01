
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
      <link rel="stylesheet" href="../style/styledashboardnew.css" />
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
              <h3>Tambah Data Menu Martabak</h3>

              <form method="post" action="add-action-menu.php" enctype="multipart/form-data">
              <table class="add-form">
                <tr>
                  <td><span>Nama Menu</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="name_menu" class="placeholder" placeholder="Masukkan Nama Menu" required="required">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Harga</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="price" class="placeholder" placeholder="Masukkan Harga Menu" required="required">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Image Menu</span></td>
                  <td>
                    <div class="toogle">
                    <input class="placeholder" type="file" name="foto" value="" required="required"/>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <div class="toogle">
                      <p class="note-category">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif | .jfif</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Kategori Menu</span></td>
                  <td>
                  <div class="dropdown">


                    <select name="dropdown" class="dropdown-select">
                      <option>Pilih Kategori Menu</option>

                    <?php
                    include '../conn.php';
				            $data = mysqli_query($conn,"select * FROM category_martabak;");
                    while($d = mysqli_fetch_array($data)){
              
                    ?>

                      <option  value="<?php echo $d['id_category']; ?>"><?php echo $d['name_category']; ?></option>
                      
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
                    <div class="dropdown">
                      <select name="dropdown_varian" class="dropdown-select">
                        <option>Pilih Nomor Varian Rasa</option>
                        <option  value="NON">NON</option>
                        <option  value="KCP1">KCP1</option>
                        <option  value="KCP2">KCP2</option>
                        <option  value="KCP3">KCP3</option>
                        <option  value="KP">KP</option>
                        <option  value="TBP8R">TBP8R</option>
                        <option  value="TBP12R">TBP12R</option>
                        <option  value="TBP16R">TBP16R</option>
                        <option  value="TBK">TBK</option>
                        <option  value="TBKTK">TBKTK</option>
                      </select>
                    </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div class="btn-table">
                      <a href="detail-varian.php">Lihat Detail Nomor Varian Rasa</a>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Stok Menu</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="stok" class="placeholder" placeholder="Masukkan Stok Menu" required="required">
                    </div>
                  </td>
                </tr>

              </table>
            <div class="flex-button">
              <button type="submit" name="upload">Simpan</button>
            </div>
            </form>
            </div>

            
          </div>



         
        </section>
      </div>
    </body>
    </html>