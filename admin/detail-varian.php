
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
            <h1>List Varian Rasa</h1>
          </div>
          <div class="g-table-admin">
            <div class="card">

              <table class="add-form">
                <tr>
                  <td width="200px"><span>List Varian Rasa "NON"</span></td>
                  <td width="800px" align="left">: Tidak Ada
                    </td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "KCP1 (Max 4 Rasa)"</span></td>
                  <td width="800px" align="left">: Nutella, Ovomaltine, Skiphy, Toblerone Coklat, Toblerone Putih, Toblerone Hitam, 
                            Silverqueen Coklat, Silverqueen Putih, Silverqueen Hitam, Silverqueen Green Tea, Silverqueen Yugurth ( Very Bery ),
                            Chungkybar Coklat,  Chungkybar Putih, Chungkybar Hitam, Chungkybar Hitam Rasa Orange, Van Hautten</td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "KCP2 (Max 3 Rasa)"</span></td>
                  <td width="800px" align="left">: Nutella, Ovomaltine, Skiphy, Toblerone Coklat, Toblerone Putih, Toblerone Hitam, 
                            Silverqueen Coklat, Silverqueen Putih, Silverqueen Hitam, Silverqueen Green Tea, Silverqueen Yugurth ( Very Bery ),
                            Chungkybar Coklat,  Chungkybar Putih, Chungkybar Hitam, Chungkybar Hitam Rasa Orange, Van Hautten</td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "KCP3 (Max 2 Rasa)"</span></td>
                  <td width="800px" align="left">: Nutella, Ovomaltine, Skiphy, Toblerone Coklat, Toblerone Putih, Toblerone Hitam, 
                            Silverqueen Coklat, Silverqueen Putih, Silverqueen Hitam, Silverqueen Green Tea, Silverqueen Yugurth ( Very Bery ),
                            Chungkybar Coklat,  Chungkybar Putih, Chungkybar Hitam, Chungkybar Hitam Rasa Orange, Van Hautten</td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "KP"</span></td>
                  <td width="800px" align="left">: Tidak Ada</td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "TBP8R (Max 8 Rasa)"</span></td>
                  <td width="800px" align="left">: Nutella, Ovomaltine, Skiphy, Toblerone Coklat, Toblerone Putih, Toblerone Hitam, 
                            Silverqueen Coklat, Silverqueen Putih, Silverqueen Hitam, Silverqueen Green Tea, Silverqueen Yugurth ( Very Bery ),
                            Chungkybar Coklat,  Chungkybar Putih, Chungkybar Hitam, Chungkybar Hitam Rasa Orange, Van Hautten</td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "TBP12R (Max 12 Rasa)"</span></td>
                  <td width="800px" align="left">: Nutella, Ovomaltine, Skiphy, Toblerone Coklat, Toblerone Putih, Toblerone Hitam, 
                            Silverqueen Coklat, Silverqueen Putih, Silverqueen Hitam, Silverqueen Green Tea, Silverqueen Yugurth ( Very Bery ),
                            Chungkybar Coklat,  Chungkybar Putih, Chungkybar Hitam, Chungkybar Hitam Rasa Orange, Van Hautten</td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "TBP16R (Max 16 Rasa)"</span></td>
                  <td width="800px" align="left">: Nutella, Ovomaltine, Skiphy, Toblerone Coklat, Toblerone Putih, Toblerone Hitam, 
                            Silverqueen Coklat, Silverqueen Putih, Silverqueen Hitam, Silverqueen Green Tea, Silverqueen Yugurth ( Very Bery ),
                            Chungkybar Coklat,  Chungkybar Putih, Chungkybar Hitam, Chungkybar Hitam Rasa Orange, Van Hautten</td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "TBK (Max 8 Rasa)"</span></td>
                  <td width="800px" align="left">: Keju, Coklat Meses, Kacang Sangrai, Coklat Marcolade Rasa Green Tea,
Coklat Marcolade Rasa Tiramisu, Coklat Marcolade Rasa Blueberry, Coklat Marcolade Rasa Strawberry
Oreo Vanilla, Oreo Red Valvet, Chochocip Warna, Chochochip Coklat, 
Pisang, Jagung, Wijen, Ketan, Selai Strawberry</td>
                </tr>
                <tr>
                  <td width="200px"><span>List Varian Rasa "TBKTK (Max 2 Rasa)"</span></td>
                  <td width="800px" align="left">: Keju, Coklat Meses, Kacang Sangrai, Coklat Marcolade Rasa Green Tea,
Coklat Marcolade Rasa Tiramisu, Coklat Marcolade Rasa Blueberry, Coklat Marcolade Rasa Strawberry
Oreo Vanilla, Oreo Red Valvet, Chochocip Warna, Chochochip Coklat, 
Pisang, Jagung, Wijen, Ketan, Selai Strawberry</td>
                </tr>


              </table>

            </div>

            
          </div>
     
        </section>
      </div>
    </body>
    </html>