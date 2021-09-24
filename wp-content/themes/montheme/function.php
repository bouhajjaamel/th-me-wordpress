<?php 
//add menu support
register_nav_menus( array(
    'pluginbuddy_mobile' => 'PluginBuddly Mobile Navigation Menu',
    'footer_menu' => 'My Custom Footer Menu', 
    ) );

// add feature image in post
add_theme_support( 'post-thumbnails' );

//add header support
add_theme_support('custom-header');


    add_action('wp_head', function () {
        die('salut les gens');
    });
    add_theme_support('title-tag');


    /**
 *lien bootstrap
 */
function supertheme_register_assets (){
    wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' , []);
    wp_register_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/dist/js/bootstrap.min.js', ['popper','jquery'],false, true);
    wp_register_script('poppar','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' , [], null, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'monprefixe_charger_css_js_web');



?>