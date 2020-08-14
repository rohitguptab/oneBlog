<?php

/**
 * This file contains all action hooks.
 *
 *
 * @package oneBlog
 */

/*Action for enqueue scripts.*/
add_action('wp_enqueue_scripts', 'oneBlog_front_scripts');
