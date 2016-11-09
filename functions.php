<?php 
//adding images
function images($images){
    echo get_template_directory_uri().'/images/'.$images;
}
//after setup theme
function peraya_setup(){
    //add title tag
    add_theme_support('title-tag');
    //adding automatic feed link
    add_theme_support('automatic-feed-links');
    //adding post thumbnail
    add_theme_support('post-thumbnails');
    
    //adding menu
    register_nav_menus(array(
        'primary'=>__('Primary Menu','peraya'),
        'footer'=>__('Footer Menu','peraya'),
        ));
}
add_action('after_setup_theme','peraya_setup');

//adding scripts to website
function peraya_scripts(){
    //adding gallery
    wp_enqueue_style('swiper',get_template_directory_uri().'/css/swiper.min.css');
        //adding bootstrap css
        wp_enqueue_style('bootstrapcss',get_template_directory_uri().'/css/bootstrap.min.css');
        //adding style
        wp_enqueue_style('stylesheet',get_stylesheet_uri());
        //adding bootstrap js
        wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'2016',true);
        //adding bootstrap js
        wp_enqueue_script('swiperjs',get_template_directory_uri().'/js/swiper.min.js',array('jquery'),'2016',true);
}
add_action('wp_enqueue_scripts','peraya_scripts');

require_once('navwalker.php');

?>