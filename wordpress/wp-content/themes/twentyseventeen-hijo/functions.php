<?php 
function twentyseventeen_css_padre() {
	wp_enqueue_style('parent-css', get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'twentyseventeen_css_padre', 10);

function twentyseventeen_css_hijo() {
	wp_enqueue_style('child-css', get_stylesheet_directory_uri().'/main.css');
}
add_action('wp_enqueue_scripts','twentyseventeen_css_hijo', 20);
?>