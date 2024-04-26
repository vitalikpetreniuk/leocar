<?php

    add_theme_support( 'menus' ); // Ensure theme supports menus

    function my_theme_menu_locations() {
        register_nav_menus( array(
            'rent-header' => 'Rent Header',
            'purchase-header' => 'Purchase Header'
        ));
    }
    add_action( 'after_setup_theme', 'my_theme_menu_locations' );

?>