

<footer class="footer-main" id="contact">
    
     <div class="container">
        <div class="row">
            <div class="col-12">
                
                <h2 class="section-heading text-center">Contact</h2>
                
                 <?php
                    if (function_exists('acf_add_options_page')) { ?>

                        <ul class="social">

                                <?php   
                                $link = get_field('mail_link', 'option'); ?> 

                                      <li class="social-item">
                                             <a href="mailto:<?php echo $link; ?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i>kaljunggren@gmail.com</a>
                                        </li>
                            
                                <?php
                                if(have_rows('social_icons','option')) {  // check if repeater field has rows 
                                ?>
                                            <?php
                                                 while(have_rows('social_icons','option')) {
                                                    the_row();

                                                    $social_url = get_sub_field('social_url');
                                                    $social_site = get_sub_field('social_site');
                                                    $social_text = get_sub_field('text');  
                                                    ?>

                                                        <li class="social-item">
                                                            <a href="<?php echo $social_url; ?>"><i class="fa fa-<?php echo $social_site; ?>"></i><?php echo $social_text; ?></a>
                                                        </li>

                                                <?php

                                                } ?>

                                <?php
                                } ?>
                        </ul>
                <?php  
                }
                ?>

            </div>
         </div>
   
          <div class="row">
            <div class="col-12">
                
                <div class="footer-copy">
                        <p class="text-center">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
                </div>
             
            </div>
         </div>
    </div> <!--container-->

</footer>   <!--/ footer-main--->


<?php wp_footer(); ?>


</body>
</html>



