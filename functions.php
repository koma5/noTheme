<?php

$defaults = array(
	'default-image'          => 'https://picsum.photos/id/648/1000/400',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);

add_theme_support( 'custom-header', $defaults );

?>
