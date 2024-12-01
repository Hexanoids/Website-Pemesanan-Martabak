
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
            <h1>TABLE USER ORDER</h1>
            <a href="print-laporan.php"><i class="fa fa-print" style="font-size:24px"></i></a>
          </div>

          <div class="g-table-admin">
            <div class="card">

              <div class="">

                </div>
              <div class="table-content">

        <table class="admin-table">
            <thead>
                <tr>
                    <th align="center" width="100px">Nama Pemesan</th>
                    <th align="center" width="200px">Nama Menu</th>
                    <th align="center" width="50px">Jumlah Item</th>
                    <th align="center" width="100px">Tanggal Order</th>
                    <th align="center" width="150px">Status Order</th>
                    <th align="center" width="100px">Verifikasi</th>
                    <th align="center" width="100px">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    include '../conn.php';
                    $data = mysqli_query($conn, "select *FROM `user_order` 
                    INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
                    INNER JOIN `user` ON `user`.id_user=user_order.id_user ORDER BY date_order DESC");
                    while($d = mysqli_fetch_array($data)){
                      $price=$d['total_price'];
                        ?>
                        <tr>
                            <td align="center" width="100px"><?php echo $d['full_name']; ?></td>
                            <td align="center" width="200px"><?php echo $d['name_menu']; ?></td>
                            <td align="center" width="50px"><?php echo $d['qty_item']; ?></td>
                            <td align="center" width="100px"><?php echo $d['date_order']; ?></td>
                            <td align="center" width="150px"><?php echo $d['status_order']; ?></td>
                            <td align="center" width="100px"><?php echo $d['verifikasi']; ?></td>
                            <td align="center" width="100px"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></td>
                            <th align="center">
                                <div class="btn-table">
                                    <a href="edit-user-order.php?id_order=<?php echo $d['id_order']; ?>"><button class="">EDIT</button></a>
                                    <a href="detail-user-order.php?id_order=<?php echo $d['id_order']; ?>"><button class="">DETAIL</button></a>
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