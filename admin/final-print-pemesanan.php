<!DOCTYPE html>
<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header('location:home/index.html');
	}
?>

<?php 
				$tanggal_awal = $_GET['tanggal_awal'];
				$tanggal_akhir = $_GET['tanggal_akhir'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Laporan Pemesanan</title>
    <link rel="stylesheet" href="../style/styledashboardnew.css" />
</head>
<body>
    <div class="container-print">
        <h3>LAPORAN PENJUALAN PESANAN PADA MARTABAK JAKARTA 1994 </BR> 
            DARI TANGGAL <?php echo $tanggal_awal; ?> SAMPAI DENGAN TANGGAL <?php echo $tanggal_akhir; ?></h3>
        

            <table class="print-table">
                <thead>
                    <tr>
                        <th align="center" width="30px">No</th>
                        <th align="center" width="80px">Nama Pemesan</th>
                        <th align="center" width="200px">Nama Menu</th>
                        <th align="center" width="50px">Jumlah Item</th>
                        <th align="center" width="130px">Tanggal Order</th>
                        <th align="center" width="100px">Status Order</th>
                        <th align="center" width="100px">Verifikasi</th>
                        <th align="center" width="100px">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php 
            include '../conn.php';
			$no = 1;

				$data = mysqli_query($conn, "select * FROM `user_order` 
                INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
                INNER JOIN `user` ON `user`.id_user=user_order.id_user 
                WHERE (date_order BETWEEN '$tanggal_awal' AND '$tanggal_akhir')
                AND status_order='Pesanan Telah Selesai'
                ORDER BY date_order ASC");

			    while($d = mysqli_fetch_array($data)){
                    $price=$d['total_price'];
			?>
    
                            <tr>
                                <td align="center" width="30px"><?php echo $no++; ?></td>
                                <td align="center" width="80px"><?php echo $d['full_name']; ?></td>
                                <td align="center" width="200px"><?php echo $d['name_menu']; ?></td>
                                <td align="center" width="50px"><?php echo $d['qty_item']; ?></td>
                                <td align="center" width="130px"><?php echo $d['date_order']; ?></td>
                                <td align="center" width="100px"><?php echo $d['status_order']; ?></td>
                                <td align="center" width="100px"><?php echo $d['verifikasi']; ?></td>
                                <td align="center" width="100px">Rp. <?php echo $d['total_price']; ?></td>
            
                            </tr>
                    <?php 
                    }
                        ?>
                </tbody>
                
                <tbody>
    
                <?php 
                include '../conn.php';
			    $no = 1;

				$data1 = mysqli_query($conn, "select SUM(total_price) as total_penjualan FROM `user_order` 
                INNER JOIN `menu_martabak` ON menu_martabak.id_menu=`user_order`.id_menu 
                INNER JOIN `user` ON `user`.id_user=user_order.id_user 
                WHERE (date_order BETWEEN '$tanggal_awal' AND '$tanggal_akhir')
                AND status_order='Pesanan Telah Selesai'
                ORDER BY date_order ASC");

			    $d1 = mysqli_fetch_array($data1);
                $price1=$d1['total_penjualan'];
			?>
    
                            <tr>
                                <td align="left" width="50px" colspan="7">Total Pemasukan Pada Tanggal <?php echo $tanggal_awal; ?> s/d <?php echo $tanggal_akhir; ?></td>
                                <td align="center" width="100px"><?php echo "Rp " . number_format("$price1", 0, ",", "."); ?></td>
    
                            </tr>

                </tbody>
            </table>
    </div>

    <script>

        window.print();

    </script>
</body>
</html>