<?php
/*
Plugin Name: YouTube Subs
Plugin URI: https://
Description: Counts and displays current YouTube subscriptions.
Version: 0.1.0
Aurthor: Jared Matta
Author URI: https://
Text Domain: 
Domain Path:
*/

// Exit if accessed directly
if(!defined('ABSPATH')){exit;}

// Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/ytsubs-scripts.php');
