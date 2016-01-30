<?php
/**
 * Plugin Name: Newsletter Subscriber
 * Description: A form to subscribe to a newsletter
 * Version: 1.0
 * Author: Zoran Mihelcic
 * 
 **/
 //Exit if Accessed Diretctliy
 if(!defined('ABSPATH')){
     exit;
 }

//Load scripts
require_once(plugin_dir_path(__FILE__) . '/includes/newsletter-subscriber-scripts.php');

//Load class
require_once(plugin_dir_path(__FILE__) . '/includes/newsletter-subscriber-class.php');

//register widget

function register_newsletter_subscriber(){
    register_widget('Newsletter_Subscriber_Widget');
}
add_action('widgets_init', 'register_newsletter_subscriber');
