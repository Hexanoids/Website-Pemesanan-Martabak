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


            <form action="tambah_aksi_KP_keranjang.php?id_menu=<?php echo $d['id_menu']; ?>" method="post">
            <div class="detail-card">
                <img src="../asset/<?php echo $d['img_menu']; ?>" name="img_menu" alt="">
                <div class="detail-card-content">
                     <h2 name="name_menu"><?php echo $d['name_menu']; ?></h2>
                     <input type="hidden" name="varian" value="Tidak Ada">Tidak Ada Varian Topping Tersedia

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
        
            if (checked.checked && checkedCheckboxes.length > 3) {
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







    </body>
    </html>