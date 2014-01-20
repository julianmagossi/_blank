<?php 
/*
Theme Name: _blank
Description: Tema simples para desenvolvedores de Wordpress
Author: Julian Magossi
Author URI: http://julianmagossi.com.br
Tags: dev theme, tema para desenvolvedores, simples, simple,  CSS válido, valid CSS,  XHTML válido, valid XHTML, branco, bla
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Version: 1.2
*/

register_nav_menus();

add_theme_support('post-thumbnails');
add_image_size( 'mini', 50, 50 );

add_theme_support( 'automatic-feed-links' );

$defaults = array(
	'default-image'          => get_template_directory_uri() . '/images/logo_blank.png',
	'random-default'         => false,
	'width'                  => 216,
	'height'                 => 93,
	'flex-height'            => true,
	'flex-width'             => true,
	'default-text-color'     => '000000',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

$defaults = array(
	'default-color'          => 'cccccc',
	'default-image'          => get_template_directory_uri() . '/images/bg.jpg',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
