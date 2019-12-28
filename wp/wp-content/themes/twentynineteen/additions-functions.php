<?php
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

wp_enqueue_style( 'main', get_template_directory_uri() . '/css/app.min.css',false,'1.1','all');
wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts/fonts.css',false,'1.1','all');
wp_enqueue_style( 'animate-css', '/node-dev/node_modules/animate.css/animate.min.css',false,'1.1','all');
wp_enqueue_style( 'material-icons', '/node-dev/node_modules/material-icons/iconfont/material-icons.css',false,'1.1','all');
wp_enqueue_style( 'fontawesome', '/node-dev/node_modules/@fortawesome/fontawesome-free/css/all.min.css',false,'1.1','all');
wp_enqueue_style( 'bootstrap', '/node-dev/node_modules/bootstrap/dist/css/bootstrap.min.css',false,'1.1','all');