
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
            <h1>TABLE USER</h1>
          </div>

          <div class="g-table-admin">
            <div class="card">

              <div class="">
                            <a href="add-user.php"><button class="btn-add-table">+ TAMBAH DATA USER</button></a>
                        </div>
              <div class="table-content">

        <table class="admin-table">
            <thead>
                <tr>
                    <th align="center" width="400px">Nama Lengkap User</th>
                    <th align="center" width="300px">Email User</th>
                    <th align="center" width="300px">Nomor Telepon/WhatsApp</th>
                    <th align="center" width="200px">Password</th>
                    <th align="center" width="300px">Alamat Lengkap Rumah</th>
                    <th align="center" width="300px">Level</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    include '../conn.php';
                    $data = mysqli_query($conn, "SELECT * FROM `user`");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td align="center" width="200px"><?php echo $d['full_name']; ?></td>
                            <td align="center" width="200px"><?php echo $d['email']; ?></td>
                            <td align="center" width="200px"><?php echo $d['phone_number']; ?></td>
                            <td align="center" width="200px"><?php echo $d['password']; ?></td>
                            <td align="center" width="200px"><?php echo $d['address']; ?></td>
                            <td align="center" width="200px"><?php echo $d['level']; ?></td>
                            <th align="center">
                                <div class="btn-table">
                                    <a href="edit-user.php?id_user=<?php echo $d['id_user']; ?>"><button class="">EDIT</button></a>
                                    <a href="delete-user.php?id_user=<?php echo $d['id_user']; ?>"><button class="">HAPUS</button></a>
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