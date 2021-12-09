<?php
/**
 * @ Khai bao hang gia tri
 * @ THEME_URL = lay duong dan thu muc theme
 * @ CORE = lay duong dan thu muc /core
 * 
 */
define('THEME_URL',get_stylesheet_directory() );
define('CORE', THEME_URL . "/core");

/**
 * @ Nhung file /core/init.php
 */
require_once(CORE . "/init.php");
/**
 * @ Thiet lap chieu rong noi dung
 */
if(!isset($content_width) ){
    $content_width = 620;
}
/**
 * @ Khai bao chuc nang cua theme
 */

if(!function_exists('tittle_theme_steup') ){
    function tittle_theme_steup(){
        /* Thiet lap  textdomain */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('tittle', $language_folder );
        /* Tu dong them link RSS len head */
        add_theme_support('automatic-feed-links' );
        /* Them post thumbnail */
        add_theme_support('post-thumbnails');
        /* Post Format */
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ) );
        /* Them title-tag */
        add_theme_support('title-tag');
        /* Them custom background */
        $default_background = array('default-color' => '#e8e8e8');
        add_theme_support('custom-background', $default_background );
        /* Them menu */
        register_nav_menu('primary-menu', __('Primary Menu','tittle'));
         register_nav_menu('mobile-menu', __('Mobile Menu','tittle'));
        /* Tao sidebar */
        $sidebar = array(
        'name' => __('Main Sidebar', 'tittle'),
        'id' => 'main-sidebar',
        'description' => __('Default sidebar'),
        'class' => 'main-sidebar',
        'before_title' => '<h3 class="widgettitle">',
        'after_tittle' => '</h3>'
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'tittle_theme_steup' );
}
/**=================================================**/
/*==========Thiet lap menu===============*/
if(!function_exists('tittle_menu') ){
    function tittle_menu($menu){
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu
        );
        wp_nav_menu($menu);
    }
}
/** Nhung file css vao wordpress */
function tittle_style(){
    wp_register_style('main-style',get_template_directory_uri() . "/style.css", 'all');
    wp_enqueue_style('main-style');
    wp_register_style('tailwind-style',get_template_directory_uri() . "/tailwind.css", 'all');
    wp_enqueue_style('tailwind-style');
}
add_action('wp_enqueue_scripts','tittle_style');
