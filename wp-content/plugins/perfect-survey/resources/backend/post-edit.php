<?php if (!defined('ABSPATH'))  exit; // Exit if accessed directly


global $post;/*@var $post WP_Post*/

/**
* Post type short code
*/
require_once 'wp_ps_metaboxes/shortcode.php';

/**
* Questions and Answers of post type
*/
require_once 'wp_ps_metaboxes/questions.php';

/**
* Post type meta
*/
require_once 'wp_ps_metaboxes/meta.php';
