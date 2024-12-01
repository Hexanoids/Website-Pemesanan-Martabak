
                <?php
                    include 'conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=4 and no_varian='KCP1' AND stok='Tersedia';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>


                    <ul class="cards">   
                        <li>
                          <a href="./detail-menu/detail-KCP1.php?id_menu=<?php echo $d['id_menu']; ?>" class="card">
                            <img src="./asset/<?php echo $d['img_menu']; ?>" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                                
                                <div class="card__header-text">
                                  <h3 class="card__title"><?php echo $d['name_menu']; ?></h3>
                                  <span class="card__status"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></span>
                                </div>          
                              </div>
                              <p class="card__description">click untuk melihat!</p>
                            </div>
                          </a>
                        </li>    
                      </ul>
                      <?php 
				}
					?>
                <?php
                    include 'conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=4 and no_varian='KCP2' AND stok='Tersedia';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>


                    <ul class="cards">   
                        <li>
                          <a href="./detail-menu/detail-KCP2.php?id_menu=<?php echo $d['id_menu']; ?>" class="card">
                            <img src="./asset/<?php echo $d['img_menu']; ?>" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                                
                                <div class="card__header-text">
                                  <h3 class="card__title"><?php echo $d['name_menu']; ?></h3>
                                  <span class="card__status"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></span>
                                </div>          
                              </div>
                              <p class="card__description">click untuk melihat!</p>
                            </div>
                          </a>
                        </li>    
                      </ul>
                      <?php 
				}
					?>
                <?php
                    include 'conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=4 and no_varian='KCP3' AND stok='Tersedia';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>


                    <ul class="cards">   
                        <li>
                          <a href="./detail-menu/detail-KCP3.php?id_menu=<?php echo $d['id_menu']; ?>" class="card">
                            <img src="./asset/<?php echo $d['img_menu']; ?>" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                                
                                <div class="card__header-text">
                                  <h3 class="card__title"><?php echo $d['name_menu']; ?></h3>
                                  <span class="card__status"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></span>
                                </div>          
                              </div>
                              <p class="card__description">click untuk melihat!</p>
                            </div>
                          </a>
                        </li>    
                      </ul>
                      <?php 
				}
					?>
                <?php
                    include 'conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=4 and no_varian='KP' AND stok='Tersedia';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>


                    <ul class="cards">   
                        <li>
                          <a href="./detail-menu/detail-KP.php?id_menu=<?php echo $d['id_menu']; ?>" class="card">
                            <img src="./asset/<?php echo $d['img_menu']; ?>" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                                
                                <div class="card__header-text">
                                  <h3 class="card__title"><?php echo $d['name_menu']; ?></h3>
                                  <span class="card__status"><?php echo "Rp " . number_format("$price", 0, ",", "."); ?></span>
                                </div>          
                              </div>
                              <p class="card__description">click untuk melihat!</p>
                            </div>
                          </a>
                        </li>    
                      </ul>
                      <?php 
				}
					?>
                <?php
                    include 'conn.php';
                    $no = 1;
				    $data = mysqli_query($conn,"select * FROM menu_martabak where id_category=4 AND stok='Tidak Tersedia';");
				    while($d = mysqli_fetch_array($data)){
              $price=$d['price'];
                ?>


                      <ul class="cards">   
                        <li>
                          <button class="card" disabled>
                            <img src="./asset/<?php echo $d['img_menu']; ?>" class="card__image" alt="" />
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                                
                                <div class="card__header-text">
                                  <h3 class="card__title"><?php echo $d['name_menu']; ?></h3>
                                  <span class="card__status">MENU HABIS</span>
                                </div>          
                              </div>
                              <p class="card__description">MENU HABIS</p>
                            </div>
                          </button>
                        </li>    
                      </ul>
                      <?php 
				}
					?>
