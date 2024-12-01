
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
              <h3>Edit Data User Order</h3>

              <?php
		        include '../conn.php';
		        $id_order = $_GET['id_order'];
		        $data = mysqli_query($conn,"select *FROM `user_order` 
                INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
                INNER JOIN `user` ON `user`.id_user=user_order.id_user where id_order='$id_order'");
		        while($d = mysqli_fetch_array($data)){
	            ?>

              <form method="post" action="edit-action-user-order.php" >
              <input type="hidden" name="id_order" class="placeholder" value="<?php echo $id_order; ?>">
              <table class="add-form">
                <tr>
                  <td><span>ID USER</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="id_user" class="placeholder" value="<?php echo $d['id_user']; ?>" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>ID MENU</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="id_menu" class="placeholder" value="<?php echo $d['id_menu']; ?>" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Jumlah Item</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="qty_item" class="placeholder" value="<?php echo $d['qty_item']; ?>" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Varian Rasa</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="note_varian" class="placeholder" value="<?php echo $d['note_varian']; ?>" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Metode Pembayaran</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="pembayaran" class="placeholder" value="<?php echo $d['pembayaran']; ?>" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Sistem Pengantaran</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="delivery" class="placeholder" value="<?php echo $d['delivery']; ?>" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Tanggal Order</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="date_order" class="placeholder" value="<?php echo $d['date_order']; ?>" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Total Harga</span></td>
                  <td>
                    <div class="toogle">
                      <input type="text" name="total_price" class="placeholder" value="<?php echo $d['total_price']; ?>" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span>Status Order</span></td>
                  <td>
                  <div class="dropdown">

                    <select name="dropdown-status" class="dropdown-select">
                        <option>Status Order</option>
                        <option  value="1">Pesanan Dikonfirmasi & Dalam Pembuatan Pesanan</option>
                        <option  value="2">Pesanan Telah Siap</option>
                        <option  value="3">Pesanan Telah Selesai</option>
                        <option  value="4">Menunggu Konfirmasi dari Admin</option>
                        </select>
                    </div>
                  </td>
                </tr>
                
                <tr>
                  <td><span>Verifikasi Pesanan</span></td>
                  <td>
                  <div class="dropdown">

                    <select name="dropdown-verif" class="dropdown-select">
                        <option>Verifikasi Pesanan</option>
                        <option  value="1">Pesanan Belum Dikonfirmasi</option>
                        <option  value="2">Pesanan Telah DIkonfirmasi</option>
                        </select>
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