<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/css/bootstrap.min', array(), '1.0.0', true );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/css/bootstrap.bundle.min', array(), '1.0.0', true );



?>