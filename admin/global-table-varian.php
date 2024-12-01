
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
            <h1>TABLE VARIAN</h1>
          </div>

          <div class="g-table-admin">
            <div class="card">

              <div class="">
                    <a href="add-varian.php"><button class="btn-add-table">+ TAMBAH DATA VARIAN RASA</button></a>
                </div>
              <div class="table-content">

        <table class="admin-table">
            <thead>
                <tr>
                    <th align="center" width="100px">No</th>
                    <th align="center" width="600px">Nama Varian Rasa</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    include '../conn.php';
                    $no = 1;
                    $data = mysqli_query($conn, "select * from varian_rasa;");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td align="center" width="100px"><?php echo $no++; ?></td>
                            <td align="center" width="600px"><?php echo $d['nama_varian']; ?></td>
                            <th align="center">
                                <div class="btn-table">
                                    <a href="edit-varian.php?id_varian=<?php echo $d['id_varian']; ?>"><button class="">EDIT</button></a>
                                    <a href="delete-varian.php?id_varian=<?php echo $d['id_varian']; ?>"><button class="">HAPUS</button></a>
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