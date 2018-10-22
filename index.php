
<?php get_header(); ?>


<div class="container-blog">
 
    <?php get_template_part('parts/blog-sidebar'); ?>
      
    <div class="blog-flow">
                     <!--main post loop-->
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
            
                   <!-- get content.php-->
                    <?php get_template_part('content', get_post_format()); ?>
            
            <?php endwhile; ?>
            
            <!--<?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>-->
            
            <?php echo paginate_links(); ?>
            
            <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
        
        </div><!-- /.blog-flow -->


      </div>

<?php get_footer(); ?>
