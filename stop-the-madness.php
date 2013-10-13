<?php
/**
 * Plugin Name: Stop the madness
 * Description: This is a WordPress plugin to prevent rewrite rule madeness. Occasionally, WordPress or a plugin would go crazy and write WP rewrite rules block into .htaccess again and again and again ultimately resulting in a bloated .htaccess and potentially 500 Internal Server Error. In many cases, this plugin would prevent that. 
 * Plugin URI:  https://github.com/OC2PS/wordpress-stop-the-madness
 * Author:      OC2PS
 * Author URI:  https://github.com/oc2ps
 */
 
add_filter( 'flush_rewrite_rules_hard', '__return_false' );
 
?>