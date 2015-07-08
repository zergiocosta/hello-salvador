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
	$root = plugin_dir_path(__FILE__) . 'images/';
	$iter = new RecursiveIteratorIterator(
	    new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS),
	    RecursiveIteratorIterator::SELF_FIRST,
	    RecursiveIteratorIterator::CATCH_GET_CHILD 
	);
	$lvls = 1;
	$iter->setMaxDepth($lvls);
	$paths = array($root);
	foreach ($iter as $path => $dir) {
	    $paths[] = $path;
	}

	$imagebg = $paths[array_rand($paths)];
	$imagebg = explode("/", $imagebg);
	$imagebg = array_reverse($imagebg);

	if (!empty($imagebg)) {
		$imageurl = plugin_dir_url(__FILE__) . 'images/' . $imagebg[0];
	} else {
		$imageurl = plugin_dir_url(__FILE__) . 'images/001.jpg';
	}


	?>
	<style>
		html {
			background-color: transparent !important;
		} 
		body { 
			background: url('<?php echo $imageurl; ?>') no-repeat center center fixed; 
			-webkit-background-size: cover;
			   -moz-background-size: cover;
				 -o-background-size: cover;
					background-size: cover;
		}
	</style> <?php
}
add_action('admin_head', 'hello_salvador_background');
