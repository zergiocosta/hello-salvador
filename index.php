<?php
/**
 * Plugin Name: Hello Salvador
 * Plugin URI: https://profiles.wordpress.org/sergiuscosta
 * Description: Simple way to remember Salvador, Bahia
 * Version: 1.0.0
 * Author: Sergio Costa
 * Author URI: http://sergiocosta.net.br/
 * Text Domain: hellosalvador
 * License: GPLv2 or later
 */


function hello_salvador_background() { 
	$images = array(
		'001.jpg',
		'002.jpg',
		'003.jpg'
	); 
	$image = $images[array_rand($images)];
	$image = plugin_dir_url(__FILE__) . 'images/' . $image; ?>
	<style>
		html, body { 
			background: url('<?php echo $image; ?>') no-repeat center center fixed; 
			/*background-color: rgba(255, 255, 255, 0.3);*/
			-webkit-background-size: cover;
			   -moz-background-size: cover;
				 -o-background-size: cover;
					background-size: cover;
		}
		#wpwrap {
			background: rgba(0, 0, 0, 0.0);
		}
	</style> <?php
}
add_action('admin_init', 'hello_salvador_background');
