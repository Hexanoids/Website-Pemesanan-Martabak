
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
      <title>Dashboard Admin Pemesanan Martabak Jakarta 1994</title>
      <link rel="stylesheet" href="../style/styledashboard.css" />
      <link rel="stylesheet" href="../style/styledashboardnew.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
      <?php
          include 'nav-admin-pemesanan.php'
				?>


        <section class="main">
        <div class="main-top">
            <h1>CETAK LAPORAN</h1>
          </div>

          <div class="g-table-admin">
            <div class="card">

              <div class="print-date">
              <form method="get">
			    <label>PILIH TANGGAL MULAI</label>
			    <input type="date" name="tanggal_awal">
                <label>PILIH TANGGAL AKHIR</label>
			    <input type="date" name="tanggal_akhir">
			    <button >FILTER</button>
          
		      </form>

          <?php 
          if(isset($_GET['tanggal_awal'], $_GET['tanggal_akhir'])){
            $tanggal_awal = $_GET['tanggal_awal'];
            $tanggal_akhir = $_GET['tanggal_akhir'];
          }
        ?>
          <a href="final-print-pemesanan.php?tanggal_awal=<?php echo $tanggal_awal; ?>&tanggal_akhir=<?php echo $tanggal_akhir; ?>" style="color:#db0001"><i class="fa fa-download" style="font-size:20px" >Print</i></a>
              </div>
              <div class="table-content">

        <table class="admin-table">
            <thead>
                <tr>
                    <th align="center" width="50px">No</th>
                    <th align="center" width="100px">Nama Pemesan</th>
                    <th align="center" width="230px">Nama Menu</th>
                    <th align="center" width="50px">Jumlah Item</th>
                    <th align="center" width="200px">Tanggal Order</th>
                    <th align="center" width="150px">Status Order</th>
                    <th align="center" width="100px">Total Harga</th>
                    <th align="center" width="100px">Verifikasi</th>
                </tr>
            </thead>
            <tbody>

            <?php 
            include '../conn.php';
			$no = 1;
 
			if(isset($_GET['tanggal_awal'], $_GET['tanggal_akhir'])){
				$tanggal_awal = $_GET['tanggal_awal'];
				$tanggal_akhir = $_GET['tanggal_akhir'];

				$data = mysqli_query($conn, "select *FROM `user_order` 
                INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
                INNER JOIN `user` ON `user`.id_user=user_order.id_user WHERE (date_order BETWEEN '$tanggal_awal' AND '$tanggal_akhir') ORDER BY date_order ASC");
			}else{
				$data = mysqli_query($conn,"select *FROM `user_order` 
                INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
                INNER JOIN `user` ON `user`.id_user=user_order.id_user ORDER BY date_order ASC");
			}
            
			while($d = mysqli_fetch_array($data)){
			?>

                        <tr>
                            <td align="center" width="50px"><?php echo $no++; ?></td>
                            <td align="center" width="100px"><?php echo $d['full_name']; ?></td>
                            <td align="center" width="230px"><?php echo $d['name_menu']; ?></td>
                            <td align="center" width="50px"><?php echo $d['qty_item']; ?></td>
                            <td align="center" width="200px"><?php echo $d['date_order']; ?></td>
                            <td align="center" width="150px"><?php echo $d['status_order']; ?></td>
                            <td align="center" width="100px">Rp. <?php echo $d['total_price']; ?></td>
                            <td align="center" width="100px"><?php echo $d['verifikasi']; ?></td>

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