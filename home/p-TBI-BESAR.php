<?php
                    include '../conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=6 AND no_varian='TBP8R';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>




          <li class="card">
            <div>
              <div class="card-content">
                <img src="../asset/<?php echo $d['img_menu']; ?>" alt="">
              </div>
              <h3 class="card-title"><?php echo $d['name_menu']; ?></h3>
            </div>
            <div class="card-link-wrapper">
              <a href="detail-product-TBI-B-TBP8R.php?id_menu=<?php echo $d['id_menu']; ?>" class="card-link">Selengkapnya</a>
            </div>
          </li>

      <?php 
				}
					?>
<?php
                    include '../conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=6 AND no_varian='TBP12R';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>




          <li class="card">
            <div>
              <div class="card-content">
                <img src="../asset/<?php echo $d['img_menu']; ?>" alt="">
              </div>
              <h3 class="card-title"><?php echo $d['name_menu']; ?></h3>
            </div>
            <div class="card-link-wrapper">
              <a href="detail-product-TBI-B-TBP12R.php?id_menu=<?php echo $d['id_menu']; ?>" class="card-link">Selengkapnya</a>
            </div>
          </li>

      <?php 
				}
					?>
<?php
                    include '../conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=6 AND no_varian='TBP16R';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>




          <li class="card">
            <div>
              <div class="card-content">
                <img src="../asset/<?php echo $d['img_menu']; ?>" alt="">
              </div>
              <h3 class="card-title"><?php echo $d['name_menu']; ?></h3>
            </div>
            <div class="card-link-wrapper">
              <a href="detail-product-TBI-B-TBP16R.php?id_menu=<?php echo $d['id_menu']; ?>" class="card-link">Selengkapnya</a>
            </div>
          </li>

      <?php 
				}
					?>
<?php
                    include '../conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=6 AND no_varian='NON';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>




          <li class="card">
            <div>
              <div class="card-content">
                <img src="../asset/<?php echo $d['img_menu']; ?>" alt="">
              </div>
              <h3 class="card-title"><?php echo $d['name_menu']; ?></h3>
            </div>
            <div class="card-link-wrapper">
              <a href="detail-product-TBI-B-NON.php?id_menu=<?php echo $d['id_menu']; ?>" class="card-link">Selengkapnya</a>
            </div>
          </li>

      <?php 
				}
					?>