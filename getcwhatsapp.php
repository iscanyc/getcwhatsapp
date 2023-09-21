<?php

/**
 * Plugin Name: GetCWhatsApp
 * Description: Create simple WhatsApp conctact button for your wordpress site.
 * Version: 1.0.0
 * Plugin URI: https://github.com/iscanyc/getcwhatsapp
 * Author: Can Yücel
 * Author URI: https://github.com/iscanyc
 * License: GPL2
 */

add_action('wp_footer', 'getcwhatsapp_create_whatsapp_button');
add_action('admin_menu', 'getcwhatsap_menu');


if (!function_exists('getcwhatsapp_create_whatsapp_button')) {
   function getcwhatsapp_create_whatsapp_button()
   {
      include_once('views/popup.php');
   }
}

if (!function_exists('getcwhatsapp_html')) {
   function getcwhatsapp_html()
   {
      if (current_user_can('manage_options')) {
         if ($_POST) {
            getcwhatsap_update_option('getcwhatsapp_position', 'position');
            getcwhatsap_update_option('getcwhatsapp_number', 'number');
            getcwhatsap_update_option('getcwhatsapp_text', 'text');
         }
         include_once('views/html.php');
      }
   }
}
if (!function_exists('getcwhatsap_update_option')) {
   function getcwhatsap_update_option($key, $post_key)
   {
      if (isset($_POST[$post_key])) {
         $post = strip_tags($_POST[$post_key]);
         if (!get_option($key)) {
            add_option($key, $post);
         } else {
            update_option($key, $post);
         }
      }
   }
}
if (!function_exists('getcwhatsap_menu')) {
   function getcwhatsap_menu()
   {
      add_menu_page(
         'GetCWhatsApp',
         'GetCWhatsApp',
         'manage_options',
         'getcwhatsapp',
         'getcwhatsapp_html',
         'dashicons-whatsapp',
         25
      );
   }
}