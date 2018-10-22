<!--content for posts-->
  
<article class="blog-post">
    
     <?php if ( !is_single() ) { ?>
    
            <div class="post-heading">
                <h3 class="blog-post-title">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                </h3>
            </div>


            <p class="blog-post-meta">
                <!--date-->
                <?php the_time('F j, Y g:i a'); ?> |
                
                <!--author-->
                by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?></a> <!--| Posted in -->
                
               <!-- categories-->
                <?php 
                $categories = get_the_category();
                $separator = ", ";
                $output = '';
                
                if ($categories) {
                    
                    //each time we loop through we add on text to output
                   // foreach ($categories as $category) {
                        
                        //output categories as a link separated by comma
                      // $output .= '<a href=" ' . get_category_link($category->term_id) . ' ">' . //$category->cat_name . '</a>' . $separator;
                   // }
                    //function trim takes $output and removes $separator 
                   // echo trim($output, $separator);
                }
             } ?> 
            </p>
     

        <!--If there is a featured image - set the class 'has-thumbnail'-->
        <div class=" <?php if ( has_post_thumbnail() && !is_single() ) { ?>has-thumbnail<?php } ?>">

    
       <!--If it is not single.php - set the class 'fix'-->
              <div class="post-thumbnail <?php if ( !is_single() ) { ?>fix<?php } ?>">
                    
                    <?php if(is_single()) : ?> 

                        <h1 class="blog-post-single-title"><?php the_title(); ?></h1>

                        <?php the_post_thumbnail('banner-image'); ?>

                    <?php else : ?>

                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>

                    <?php endif; ?>   
              </div>
        
    
    
            <!--if search.php or archive.php -> show only excerpts-->
            <?php if ( is_search() OR is_archive() ) { ?>

                        <p>
                        <?php echo get_the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More&raquo;</a>
                        </p>
            <?php }

                else {

                    /*if excerpt used in GUI -> show excerpt*/
                 if ($post->post_excerpt) { ?>

                            <p>
                            <?php echo get_the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read More&raquo;</a>
                            </p>

                    <?php } 

                    else if ( !is_single() ) { ?>

                            <p>
                                <?php echo get_the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>"> <br>READ POST &raquo;</a>
                            </p>
                            
            
                    <?php }
                    
                     else { 

                            the_content();
                     }
            }?>

    </div>
</article><!-- /.blog-post -->