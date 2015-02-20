<?php
register_nav_menu( 'top', 'Menu Topo');
register_nav_menu( 'footer', 'Menu Rodapé');

add_action( 'wp_enqueue_scripts', 'scripts_style');
add_action('init', 'init_registers');

add_filter( 'wp_mail_content_type', 'set_html_content_type' );
add_action('after_setup_theme', 'remove_admin_bar');



function init_registers() {
    register_sidebar(array(
        'name' => "Sidebar",
        'id' => 'general-sidebar',
        'before_widget' => '<div id="%1$s" class="mt20 widget %2$s">',
        'after_widget' => '<div class="margin-bottom"></div></div>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
}

function scripts_style() {
    wp_enqueue_style('font-lato', 'http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext', false );
    wp_enqueue_style('font-bree', 'http://fonts.googleapis.com/css?family=Bree+Serif', null);

    wp_enqueue_style('fontsawesome', get_bloginfo('template_url') .'/assets/fonts/font-awesome/css/font-awesome.min.css', null);
    wp_enqueue_style('boostrap', get_bloginfo('template_url') .'/assets/css/bootstrap.min.css', null);
    wp_enqueue_style('social-css', get_bloginfo('template_url') .'/assets/css/social-buttons.css', array('boostrap'));
    wp_enqueue_style('main', get_bloginfo('template_url') .'/assets/css/main.css', array('font-lato', 'font-bree', 'font-bree', 'boostrap', 'social-css'));

    wp_enqueue_script('modernizr', get_bloginfo('template_url') .'/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', null, null, false);

    wp_enqueue_script('boostrap', get_bloginfo('template_url') .'/assets/js/vendor/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('placeholder', get_bloginfo('template_url') .'/assets/js/vendor/placeholder.js', array('jquery'), null, true);
    wp_enqueue_script('mobile', get_bloginfo('template_url') .'/assets/js/vendor/jquery.mobile.custom.min.js', array('jquery', 'boostrap'), null, true);
    wp_enqueue_script('main', get_bloginfo('template_url') .'/assets/js/main.js', array('jquery', 'boostrap', 'mobile', 'placeholder'), null, true);
}



function set_html_content_type() {
    return 'text/html';
}


function remove_admin_bar() {
    if (is_mobile()) {
        show_admin_bar(false);
    }
}