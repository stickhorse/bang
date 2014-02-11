<?php 
// =============================== Add Styles ================================ //

if( !function_exists("theme_styles") ) {  
    function theme_styles() { 
        wp_register_style( 'add', get_template_directory_uri() . '/css/add.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'add' );

        wp_register_style( 'imp_reg', get_template_directory_uri() . '/css/imp_reg.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'imp_reg' );

        wp_register_style( 'imp_inv', get_template_directory_uri() . '/css/imp_inv.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'imp_inv' );


        wp_register_style('cutive', 'http://fonts.googleapis.com/css?family=Cutive');
        wp_enqueue_style('cutive');
	}
}
add_action("wp_enqueue_scripts", "theme_styles");


add_action('wp_dashboard_setup', 'custom_dash_widgets');

function custom_dash_widgets() {
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {

    global $current_user;
    get_currentuserinfo();
    echo '<p>Välkommen ' . $current_user->user_firstname . '! har du något du undrar över? <br> Maila genom länken <a href="mailto:nicoantoniades@gmail.com">här</a>.</p>';
}


?>