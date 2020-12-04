<?php 

function setup_menus() {
    register_nav_menu("header_menu", __("Header_menu"));
    register_nav_menu("footer_menu", __("Footer_menu"));
}

add_action("init", "setup_menus");


function setup_resources() {
    wp_register_style("my-theme-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("my-theme-style");

    wp_register_style("open-sans", "https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");
    wp_enqueue_style("open-sans");

    wp_register_style("open-sans", "https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");
    wp_enqueue_style("open-sans"); 

    wp_register_style("font-jsdelivr", "https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css");
    wp_enqueue_style("font-jsdelivr");

    wp_register_style("fonts-gstatic", "https://fonts.gstatic.com");
    wp_enqueue_style("fonts-gstatic");

    wp_register_style("work-sans", "https://fonts.googleapis.com/css2?family=Work+Sans:wght@200&display=swap");
    wp_enqueue_style("work-sans");

    wp_register_style("font-gstatic", "https://fonts.gstatic.com");
    wp_enqueue_style("open-sans");

    wp_register_style("font-worksans", "https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200&display=swap");
    wp_enqueue_style("font-worksans");
}  


add_action('wp_enqueue_scripts', 'add_theme_scripts');


add_action("wp_enqueue_scripts", "setup_resources");

add_action('wp_head' , 'remove_post_list_title_links');

function load_scripts() {
    wp_enqueue_style( 'stylecss', get_stylesheet_uri() );  
}

add_action('wp_enqueue_scripts', 'load_scripts' );


?>