<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header('location:home/index.html');
	}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard Martabak Jakarta 1994</title>
      <link rel="stylesheet" href="../style/styledashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <div class="container">
      <?php
        include '../navbar.php'
        ?>
    
        <section class="main">
          <div class="main-top">
            <h1>DETAIL MENU</h1>
            <i class="fas fa-user-cog"></i>
          </div>

          <?php
		        include '../conn.php';
		        $id_menu = $_GET['id_menu'];
		        $data = mysqli_query($conn,"select * from menu_martabak where id_menu='$id_menu'");
		        while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
	          ?>


          <section class="menu-content">
            <a href="../menu-dashboard.php" class="back-btn"><i class="fa fa-arrow-left"></i>Kembali</a>


            <form action="tambah_aksi_KCP3_keranjang.php?id_menu=<?php echo $d['id_menu']; ?>" method="post">
            <div class="detail-card">
                <img src="../asset/<?php echo $d['img_menu']; ?>" name="img_menu" alt="">
                <div class="detail-card-content">
                     <h2 name="name_menu"><?php echo $d['name_menu']; ?></h2>
                     <p>Pilih Maksimal 2 Topping</p>
                     <div class="checkbox">
                     <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav1 = mysqli_query($conn,"select * from varian_rasa where id_varian='1'");
		                    $dv1 = mysqli_fetch_array($datav1);
	                    ?>
                        <input type="checkbox" name="v1" id="v1" value="<?php echo $dv1['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv1['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav2 = mysqli_query($conn,"select * from varian_rasa where id_varian='2'");
		                    $dv2 = mysqli_fetch_array($datav2);
	                    ?>
                        <input type="checkbox" name="v2" id="v2" value="<?php echo $dv2['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv2['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav3 = mysqli_query($conn,"select * from varian_rasa where id_varian='3'");
		                    $dv3 = mysqli_fetch_array($datav3);
	                    ?>
                        <input type="checkbox" name="v3" id="v3" value="<?php echo $dv3['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv3['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav4 = mysqli_query($conn,"select * from varian_rasa where id_varian='4'");
		                    $dv4 = mysqli_fetch_array($datav4);
	                    ?>
                        <input type="checkbox" name="v4" id="v4" value="<?php echo $dv4['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv4['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav5 = mysqli_query($conn,"select * from varian_rasa where id_varian='5'");
		                    $dv5 = mysqli_fetch_array($datav5);
	                    ?>
                        <input type="checkbox" name="v5" id="v5" value="<?php echo $dv5['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv5['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav6 = mysqli_query($conn,"select * from varian_rasa where id_varian='6'");
		                    $dv6 = mysqli_fetch_array($datav6);
	                    ?>
                        <input type="checkbox" name="v6" id="v6" value="<?php echo $dv6['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv6['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav7 = mysqli_query($conn,"select * from varian_rasa where id_varian='7'");
		                    $dv7 = mysqli_fetch_array($datav7);
	                    ?>
                        <input type="checkbox" name="v7" id="v7" value="<?php echo $dv7['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv7['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav8 = mysqli_query($conn,"select * from varian_rasa where id_varian='8'");
		                    $dv8 = mysqli_fetch_array($datav8);
	                    ?>
                        <input type="checkbox" name="v8" id="v8" value="<?php echo $dv8['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv8['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav9 = mysqli_query($conn,"select * from varian_rasa where id_varian='9'");
		                    $dv9 = mysqli_fetch_array($datav9);
	                    ?>
                        <input type="checkbox" name="v9" id="v9" value="<?php echo $dv9['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv9['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav10 = mysqli_query($conn,"select * from varian_rasa where id_varian='10'");
		                    $dv10 = mysqli_fetch_array($datav10);
	                    ?>
                        <input type="checkbox" name="v10" id="v10" value="<?php echo $dv10['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv10['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav11 = mysqli_query($conn,"select * from varian_rasa where id_varian='11'");
		                    $dv11 = mysqli_fetch_array($datav11);
	                    ?>
                        <input type="checkbox" name="v11" id="v11" value="<?php echo $dv11['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv11['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav12 = mysqli_query($conn,"select * from varian_rasa where id_varian='12'");
		                    $dv12 = mysqli_fetch_array($datav12);
	                    ?>
                        <input type="checkbox" name="v12" id="v12" value="<?php echo $dv12['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv12['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav13 = mysqli_query($conn,"select * from varian_rasa where id_varian='13'");
		                    $dv13 = mysqli_fetch_array($datav13);
	                    ?>
                        <input type="checkbox" name="v13" id="v13" value="<?php echo $dv13['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv13['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav14 = mysqli_query($conn,"select * from varian_rasa where id_varian='14'");
		                    $dv14 = mysqli_fetch_array($datav14);
	                    ?>
                        <input type="checkbox" name="v14" id="v14" value="<?php echo $dv14['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv14['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav15 = mysqli_query($conn,"select * from varian_rasa where id_varian='15'");
		                    $dv15 = mysqli_fetch_array($datav15);
	                    ?>
                        <input type="checkbox" name="v15" id="v15" value="<?php echo $dv15['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv15['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav16 = mysqli_query($conn,"select * from varian_rasa where id_varian='16'");
		                    $dv16 = mysqli_fetch_array($datav16);
	                    ?>
                        <input type="checkbox" name="v16" id="v16" value="<?php echo $dv16['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv16['nama_varian']; ?>
                      </div>
                  
                     
                     </div>

                      <div class="quantity">
                        <span class="minus" aria-label="Decrease">&minus;</span>
                        <input type="number" class="input-box" name="qty_item" value="1" min="1" max="50">
                        <span class="plus" aria-label="Increase">&plus;</span>
                     </div>

                    <div class="flex-price">
                      <h1 name="price"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></h1> 
                      <button id="btn_submit" class="cart-btn">Add to Cart<i class="fa fa-shopping-cart"></i></button>
                    </div>
                    
                    <?php 
	                  }
	                  ?>
                    
                </div>
                
            </div>
           
            
            
          </section>

        </section>
      </div>
      

    

      <script>
        function ckChange(ckType){
            let checked = document.getElementById(ckType.id);
            let checkedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        
            if (checked.checked && checkedCheckboxes.length > 2) {
                checked.checked = false;
            }
        }
        </script>
      

      <script>
        (function () {
  const quantityContainer = document.querySelector(".quantity");
  const minusBtn = quantityContainer.querySelector(".minus");
  const plusBtn = quantityContainer.querySelector(".plus");
  const inputBox = quantityContainer.querySelector(".input-box");

  updateButtonStates();

  quantityContainer.addEventListener("click", handleButtonClick);
  inputBox.addEventListener("input", handleQuantityChange);

  function updateButtonStates() {
    const value = parseInt(inputBox.value);
    minusBtn.disabled = value <= 1;
    plusBtn.disabled = value >= parseInt(inputBox.max);
  }

  function handleButtonClick(event) {
    if (event.target.classList.contains("minus")) {
      decreaseValue();
    } else if (event.target.classList.contains("plus")) {
      increaseValue();
    }
  }

  function decreaseValue() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : Math.max(value - 1, 1);
    inputBox.value = value;
    updateButtonStates();
    handleQuantityChange();
  }

  function increaseValue() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
    inputBox.value = value;
    updateButtonStates();
    handleQuantityChange();
  }

  function handleQuantityChange() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : value;

    // Execute your code here based on the updated quantity value
    console.log("Quantity changed:", value);
  }
})();

      </script>


<script>

   $(document).ready(function(){
     $("#btn_submit").click(function(){
        var v1 = $("input[name=v1]:checked").size();
        var v2 = $("input[name=v2]:checked").size();
        var v3 = $("input[name=v3]:checked").size();
        var v4 = $("input[name=v4]:checked").size();
        var v5 = $("input[name=v5]:checked").size();
        var v6 = $("input[name=v6]:checked").size();
        var v7 = $("input[name=v7]:checked").size();
        var v8 = $("input[name=v8]:checked").size();
        var v9 = $("input[name=v9]:checked").size();
        var v10 = $("input[name=v10]:checked").size();
        var v11 = $("input[name=v11]:checked").size();
        var v12 = $("input[name=v12]:checked").size();
        var v13 = $("input[name=v13]:checked").size();
        var v14 = $("input[name=v14]:checked").size();
        var v15 = $("input[name=v15]:checked").size();
        var v16 = $("input[name=v16]:checked").size();
        if(v1==0 && v2==0 && v3==0 && v4==0 && v5==0 && v6==0 && v7==0 && v8==0 && v9==0 && v10==0 && v11==0 && v12==0 && v13==0 && v14==0 && v15==0 && v16==0 ){
        return false;
        }
     });
   });
</script>




    </body>
    </html>