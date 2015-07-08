<?php
/**
 * Plugin Name: Hello Salvador
 * Plugin URI: https://profiles.wordpress.org/sergiuscosta
 * Description: Simple way to remember Salvador, Bahia
 * Version: 1.0.0
 * Author: Sergio Costa
 * Author URI: http://sergiocosta.net.br/
 * Text Domain: hellosalvador
 * License: GPLv2
 */


function hello_salvador_background() { 
	$images = array(
		'001.jpg',
		'002.jpg',
		'003.jpg',
		'004.jpg',
		'005.jpg',
		'006.jpg',
		'007.jpg',
		'008.jpg'
	); 
	$image = $images[array_rand($images)];
	$image = plugin_dir_url(__FILE__) . 'images/' . $image; ?>
	<style>
		html {
			background-color: transparent !important;
		} 
		body { 
			background: url('<?php echo $image; ?>') no-repeat center center fixed; 
			-webkit-background-size: cover;
			   -moz-background-size: cover;
				 -o-background-size: cover;
					background-size: cover;
		}
	</style> <?php
}
add_action('admin_head', 'hello_salvador_background');
