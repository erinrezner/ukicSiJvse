<?php
//Set Upload Sizes
@ini_set( 'upload_max_size' , '128M' );
@ini_set( 'post_max_size', '32M');
@ini_set( 'max_execution_time', '300' );

//Title
add_theme_support( 'title-tag' );

//Remove WP Generator Meta Tag
remove_action('wp_head', 'wp_generator');
?>
