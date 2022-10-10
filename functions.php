<?php
 
// Change all instances of THEMENAME to your theme name.
if ( ! function_exists( 'noriko_theme_setup' ) ) :
  
   function noriko_theme_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );

     register_nav_menus(array(
        'menu_main'    =>  'Main Menu',
        'menu_footer'  =>  'Footer Menu',
        'menu_social'  =>  'Social Menu'
     )); 

   }
  
endif;
  
add_action('after_setup_theme', 'noriko_theme_setup');
  
function noriko_theme_scripts_styles(){
   wp_enqueue_style('noriko_theme_style', get_stylesheet_uri(), array(), time());

// フォントが２つ以上の場合
wp_enqueue_style( 'noriko_theme_google_fonts', 'https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&family=League+Script&family=Mukta+Mahee:wght@400;600;700', array(), null );


// font-awesome
wp_enqueue_style('noriko_theme_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' );

}

function imagepassshort($arg) {
   $content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
   return $content;
   }
   add_action('the_content', 'imagepassshort');
  
add_action('wp_enqueue_scripts', 'noriko_theme_scripts_styles');

add_filter( 'get_the_archive_title', function ($title) {
   if(is_category()){
     $title = single_cat_title('',false); //カテゴリー：を消す
   }elseif(is_tag()){
      $title = single_tag_title('',false);  //タグ：を消す
   }elseif(is_date()){
      $title = get_the_time('Y年n月');  //月：を消す
   };
   return $title;
 });

 add_filter( 'show_admin_bar', '__return_false' );

 remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );
function wpdocs_update_option_new_admin_email( $old_value, $value ) {

    update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );

