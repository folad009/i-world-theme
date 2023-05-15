<?php

function folaremidixon_theme_support(){
    /* `add_theme_support('title_tag')` adds support for the `title-tag` feature in the theme. This feature
allows WordPress to manage the document title tag in the head section of the HTML document. It is
recommended to add this support in the theme to improve SEO and accessibility. */
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

/**
 * This function registers two menu locations in WordPress, one for the primary menu and one for the
 * footer menu.
 */
function folaremidixon_menus(){
    $locations = array(
        'primary' => "Primary Menu", 
        'footer' => "Footer Menu",
    );

    register_nav_menus($locations);
}

add_action('init', 'folaremidixon_menus');




add_action('after_setup_theme', 'folaremidixon_theme_support');


    /**
     * This function registers and enqueues custom styles and Font Awesome icons for a WordPress theme.
     */
    function folaremidixon_register_styles(){

        $version = wp_get_theme()->get('Version');

        wp_enqueue_style('folaremidixon-custom-style', get_template_directory_uri() . "/style.css", array('folaremidixon-fontawesome'),  $version, 'all');
        wp_enqueue_style('folaremidixon-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '5.15.3', 'all');
    }

    add_action('wp_enqueue_scripts', 'folaremidixon_register_styles')

?>