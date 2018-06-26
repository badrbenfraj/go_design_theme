<?php  

    require get_template_directory().'/inc/options.php';


    function go_design_styles(){
        wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');
        wp_enqueue_style('base', get_template_directory_uri().'/css/base.css');
        wp_enqueue_style('vendor', get_template_directory_uri().'/css/vendor.css');

        wp_enqueue_script( 'modernizr', get_template_directory_uri().'/js/modernizr.js');
        wp_enqueue_script( 'pace', get_template_directory_uri().'/js/pace.min.js');
    }
    add_action('wp_enqueue_scripts', 'go_design_styles');

    function go_design_script() {
        wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-2.1.3.min.js');
        wp_enqueue_script( 'plugins', get_template_directory_uri().'/js/plugins.js');
        wp_enqueue_script( 'mainjs', get_template_directory_uri().'/js/main.js');
    }
    add_action( 'wp_footer', 'go_design_script' );

    function go_design_menu(){
        register_nav_menus(array(
            'header-menu' => __('Header Menu', 'Go_Design'),
            'social-menu' => __('Social Menu', 'Go_Design')
        ));
    }
    add_action('init','go_design_menu');



?>