<?php
// Add scripts
function yts_add_scripts(){
    // Add main CSS
    wp_enqueue_style('yts-main-style', plugins_url(). '/YouTube_Subscription_WP_Plugin/css/style.css');
    // Add main JS
    wp_enqueue_script('yts-main-script', plugins_url(). '/YouTube_Subscription_WP_Plugin/js/main.js');

}



add_action('wp_enqueue_scripts', 'yts_add_scripts');