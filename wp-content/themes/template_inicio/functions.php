<?php
/**
 * local da documantação
 */
if ( is_user_logged_in() ) { // checar se é um usuário autenticado
    show_admin_bar( true ); 
    // mostrar a barra administrativa
}
function flaviene_lab_scripts()
{
    
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '5.0.2', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.0.2', 'all' );
    wp_enqueue_style( 'my-style-css', get_template_directory_uri() . '/inc/style.css', array(),  'all' );

   
    

    wp_enqueue_script( 'jquery-min-js', get_template_directory_uri() . '/inc/jquery.min.js');
    //wp_enqueue_script( 'owl-carousel-min.js', get_template_directory_uri() . '/inc/carousel.js');


 wp_enqueue_script('style-js', get_template_directory_uri() . '/inc/style.js', array('jquery'), '2.7.2', true);
}

add_action( 'wp_enqueue_scripts', 'flaviene_lab_scripts' );


function flaviene_lab_config(){

    require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';
        register_nav_menus(
            array(
                'flaviene_lab_main_menu1'=>'flaviene lab Main Menu - 1',
                //'flaviene_lab_main_menu2'=>'flaviene lab Main Menu - 2'
                            )
            );
      
add_theme_support( 'custom-logo');

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
 
add_theme_support('post-thumbnails', array(
    'post',
    'page',
    'custom-post-type-name',
    ));
}



add_action('after_setup_theme', 'flaviene_lab_config');


function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'be1453d5989c78';
    $phpmailer->Password = '2d70fea2c1d844';
  }
  
  add_action('phpmailer_init', 'mailtrap');
	
// call inside the loop or with ID
// taken from has_excerpt() 
// https://developer.wordpress.org/reference/functions/has_excerpt
function mytheme_has_content( $post = 0 ){
  $post = get_post( $post );
  return ( !empty(apply_filters('the_content', $post->post_content)) );
}

