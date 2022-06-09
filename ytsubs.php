<?php
/*
Plugin Name: youtubesubs
Plugin URI: https://
Description: Counts and displays current YouTube subscriptions.
Version: 0.1.0
Aurthor: Jared Matta
Author URI: https://
Text Domain: 
Domain Path:
*/

// Exit if path is accessed directly
if(!defined('ABSPATH')){exit;}

// Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/ytsubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/ytsubs-class.php');

// Register Widget
function register_youtubesubs(){register_widget('Youtube_Subs_Widget');}

// Hook in function
add_action('widgets_init', 'register_youtubesubs');