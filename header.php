<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" <?php bloginfo('description'); ?>" >
   <!-- <link rel="icon" href="../../favicon.ico">-->
      
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

      <?php wp_head(); ?>
     
  </head>

  <body <?php body_class(); ?> >
      
      
    <?php //header field variables
      
    $header_class = '';
    $style = '';
    $color = get_field('color_theme');  
    $header_image = get_field('header_image');
    $overlay_color = '';

      
    if ( is_front_page() || is_home() || is_single() || is_archive() ) { 
          $header_class = 'header-big'; 
    } 
                
    else { 
         $header_class = 'header-small';
    }

    if ( $header_image ) {
            $style = 'style="background-image:url(\'' . wp_get_attachment_url( $header_image, 'full' ) . '\')"';
            $overlay_color = get_field('overlay_color');
    } 
    ?>
      
     <?php //get_template_part('main-menu'); ?>
 
      <div class="header-wrapper">
             <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="<?php echo $header_class; ?> <?php echo $color; ?> <?php echo $overlay_color; ?>" <?php echo $style; ?>>

                            <?php get_template_part('main-menu'); ?>
                            
                                    <div class="header-items-section">
                                        <div class="container">
                                          <div class="row">
                                                <div class="col-12">
                                                    <div class="header-text-section text-center">

                                                        <?php //Loopa ACF flex Content for layouts of header_items
                                                        if(have_rows('header_items')) {  

                                                            while (have_rows('header_items')) {  
                                                                the_row();

                                                                    $layout = get_row_layout();  
                                                                    get_template_part( 'templates/'.$layout ); ?>
                                                            <?php
                                                            }
                                                        } ?>
                                                      </div>
                                              </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                            
                              <div class="social-section">
                                <div class="container">
                                  <div class="row">
                                     <div class="col-12">
                                        <?php
                                        if (function_exists('acf_add_options_page')) { ?>

                                            <ul class="social">
                                                    <?php   
                                                    $link = get_field('mail_link', 'option'); ?> 

                                                          <li class="social-item">
                                                                 <a href="mailto:<?php echo $link; ?>" target="_top"><i class="fa fa-envelope" aria-hidden="true"></i></a>
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
                               </div>
                            </div>
                            
                     
                  
                        </header>
                    </div>
            
                    
                    
                </div>
            </div>
          </div>
      
      
    
          