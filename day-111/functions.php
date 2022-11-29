<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');

wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support('titel-tag');
add_theme_support('custom-logo');



register_nav_menus([
    'TM'=> 'Primary1',
    'FM'=>'Footer'
]);


register_sidebar([
    'name'=>'Main Banner',
    'id'=>'mainbanner',
    'befor_widget'=>'',
    'after_widget'=>'',
]);
register_sidebar([
    'name'=>'Side Image',
    'id'=>'sideimg',
    'befor_widget'=>'<div class="s_img">',
    'after_widget'=>'',

]);
    

?>