<?php

/**
 * All theme setup functions located in this file
 *
 * @package oneBlog
 */

function oneBlog_front_scripts()
{
	//Styles enqueue.
	wp_enqueue_style('oneBlog-style', get_stylesheet_uri());
	wp_enqueue_style('oneBlog-front-css', get_template_directory_uri() . '/assets/css/custom.css');
	wp_enqueue_style('oneBlog-media-css', get_template_directory_uri() . '/assets/css/media.css');
}
