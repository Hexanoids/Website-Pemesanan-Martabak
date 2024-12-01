<?php
                    include '../conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=9;");
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
              <a href="detail-product-ULTAH.php?id_menu=<?php echo $d['id_menu']; ?>" class="card-link">Selengkapnya</a>
            </div>
          </li>

      <?php 
				}
					?>