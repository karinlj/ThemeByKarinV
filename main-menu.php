    <div id="nav-wrap" class="">  

    <div class="container">
                <div class="row align-items-center">
                        <div class="col">
                               <h2 class="site-title">
                                        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                            K
                                            <!--extra double size image for retina-->
                                           <!-- <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang.png"
                                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang@2x.png 325w"
                                                 width="208" height="51" alt="boozang-logo"/>-->
                                        </a> 
                                </h2>
                        </div>
                    
                        <div class="col">
                            <nav class="">

                                <div class="nav-links">

                                  <?php 
                                    wp_nav_menu( array(
                                        'theme_location'  => 'primary',
                                    ) );
                                    ?>
                                   
                                </div>

                                    <span class="toggle">&#9776;</span> <!--hamburger-->
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