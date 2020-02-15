    <div id="nav-wrap" class="">  

        <div class="container">
                <div class="row align-items-center">
                      <div class="col">
                            <nav class="">
                                <div class="nav-links">
                                  <?php 
                                    wp_nav_menu( array(
                                        'theme_location'  => 'primary',
                                    ) );
                                    ?>
                                </div>

                                <span class="toggle">&#9776;</span><!--hamburger-->
                            </nav>
                       </div>
               </div>
      </div>
    </div>

    <div class="nav-mobile">
          <span class="toggle">&times;</span>  <!--close-->
            
          <div class="nav-links">
                          
              <?php
              wp_nav_menu( array(
                    'theme_location'  => 'primary',
            ) );
            ?>
        
        </div>
    </div>