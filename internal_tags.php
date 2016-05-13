<?php

/**
 * @package: Internal Tags
 * @version 0.0
 */
/*
Plugin Name: Internal Tags
Plugin URI: http://www.vijithassar.com
Description: Clone the WordPress tagging system for internal use.
Author: Vijith Assar
Version: 0.1
Author URI: http://www.vijithassar.com/
*/

function internal_tags() {
	$internal_arguments = array(
		'label' => 'Internal Tags',
		'show_tagcloud' => false,
		'show_in_nav_menus' => false,
		'labels' => array(
			'singular_name' => 'internal tag',
			'choose_from_most_used' => 'Choose from the most used internal tags',
			'add_or_remove_items' => 'Add or remove internal tags',
			'edit_item' => 'Edit internal tag',
			'separate_items_with_commas' => 'Separate internal tags with commas',
			'update_item' => 'Update internal tags',
			'new_item_name' => 'New internal tag',
			'search_items' => 'Search internal tags',
			'popular_items' => 'Popular internal tags',
			'all_items' => 'All internal tags'
		),
		'rewrite' => array('with_front' => false),
		'show_admin_column' => true
	);
	register_taxonomy('internal', 'post', $internal_arguments);
}
add_action('init', 'internal_tags');