<?php

//Including all resourses for the site
function kv_script_resourses() {
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap4/js/bootstrap.min.js', array(), false, true);

    wp_enqueue_script('custom-script-js', get_stylesheet_directory_uri() . '/js/custom_script.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'kv_script_resourses' );

function kv_style_resourses() {
    
    //name, absolute path, dependencies, version, media
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/bootstrap4/css/bootstrap.min.css');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css' );

    wp_enqueue_style( 'kv_theme-custom', get_stylesheet_directory_uri() . '/css/custom.css' );

}
add_action( 'wp_enqueue_scripts', 'kv_style_resourses' );

function google_fonts() {
    //Av någon anledning knasar det med wp_enqueue_script
    ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<?php
}
add_action('wp_head', 'google_fonts');
    
function favicon() { ?>

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/icon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/icon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/icon/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="theme-color" content="#ffffff">

<?php }
add_action('wp_head', 'favicon', 99);

//Theme support
function kv_theme_setup() {
    
    //Featured Image Support
    add_theme_support('post-thumbnails');
    //different sizes
    //width, height, hard-or soft cropping(hard)
    add_image_size('small-thumbnail', 200, 160, true);
    add_image_size('banner-image', 920, 510, true);
    /*add_image_size('banner-image', 920, 610, array('left', 'top'
    ));*/
    
    //Nav menus
   /* register_nav_menus(array(
        'primary' =>__('Primary Menu')
    ));*/
}
add_action('after_setup_theme', 'kv_theme_setup');

/* Defining some sidebars
*/

if (function_exists('register_sidebar')) {
    register_sidebar(array('name' => 'Main sidebar',
                           'id'             => 'main-sidebar',
                           'description'    => 'Main sidebar used on content pages',
                           'before_widget'  => '<section class="widget-container">',
                           'after_widget'   => '</section> <!-- /widget-container -->',
                           'before_title'   => '<div class="widget-title"><h3>',
                           'after_title'    => '</h3></div>  <!-- /widget-title -->'                   
));  
}

//ACF options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'position' => 3.33
    ));
}
?>
