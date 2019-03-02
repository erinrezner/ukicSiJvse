<?php
//Remove Image Compression
add_filter('jpeg_quality', create_function('', 'return 100;'));
add_filter('wp_editor_set_quality', create_function('', 'return 100;'));

//Title
add_theme_support( 'title-tag' );

//Remove WP Generator Meta Tag
remove_action('wp_head', 'wp_generator');

// No Self Pings
function no_self_ping( &$links ) {
	$home = get_option( 'home' );
	foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, $home ) )
			unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );

//* Change the URL of the WordPress login logo
function TR_url_login_logo()
{
  return site_url();;
}
add_filter('login_headerurl', 'TR_url_login_logo');
//* Login Screen: Set 'remember me' to be checked
function TR_login_checked_remember_me()
{
  add_filter( 'login_footer', 'TR_rememberme_checked' )
  ;
}
function TR_rememberme_checked()
{
  echo "<script>document.getElementById('rememberme').checked = true;</script>";
}
add_action( 'init', 'TR_login_checked_remember_me' );
?>
