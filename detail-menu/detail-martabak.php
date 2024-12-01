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


            <form action="tambah_aksi_martabak_keranjang.php?id_menu=<?php echo $d['id_menu']; ?>" method="post">
            <div class="detail-card">
                <img src="../asset/<?php echo $d['img_menu']; ?>" name="img_menu" alt="">
                <div class="detail-card-content">
                     <h2 name="name_menu"><?php echo $d['name_menu']; ?></h2>
                     <p>Pilih Salah Satu Topping</p>
                     <div class="checkbox">
                     <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav1 = mysqli_query($conn,"select * from varian_rasa where id_varian='33'");
		                    $dv1 = mysqli_fetch_array($datav1);
	                    ?>
                        <input type="checkbox" name="v1" id="v1" value="<?php echo $dv1['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv1['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav2 = mysqli_query($conn,"select * from varian_rasa where id_varian='34'");
		                    $dv2 = mysqli_fetch_array($datav2);
	                    ?>
                        <input type="checkbox" name="v2" id="v2" value="<?php echo $dv2['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv2['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav3 = mysqli_query($conn,"select * from varian_rasa where id_varian='35'");
		                    $dv3 = mysqli_fetch_array($datav3);
	                    ?>
                        <input type="checkbox" name="v3" id="v3" value="<?php echo $dv3['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv3['nama_varian']; ?>
                      </div>

                      <div class="varian-box">
                      <?php
		                    include '../conn.php';
		                    $datav4 = mysqli_query($conn,"select * from varian_rasa where id_varian='36'");
		                    $dv4 = mysqli_fetch_array($datav4);
	                    ?>
                        <input type="checkbox" name="v4" id="v4" value="<?php echo $dv4['nama_varian']; ?>" tabIndex="1" onClick="ckChange(this)"><?php echo $dv4['nama_varian']; ?>
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
        
            if (checked.checked && checkedCheckboxes.length > 1) {
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
        if(v1==0 && v2==0 && v3==0 && v4==0 ){
        return false;
        }
     });
   });
</script>




    </body>
    </html>