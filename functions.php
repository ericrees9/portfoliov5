<?php 

/** Setting Up Theme Styles **/
function october_enqueue_styles() {
  wp_enqueue_style('october_main_styles', get_template_directory_uri() . '/css/build/style.min.css', NULL, 0.1);
}
add_action('wp_enqueue_scripts', 'october_enqueue_styles');

/** Setting Up Theme Scripts **/
function october_enqueue_scripts() {
  wp_enqueue_script('october_main_js', get_theme_file_uri('/js/build/app.min.js'), NULL, 0.1, true);
}
add_action('wp_enqueue_scripts', 'october_enqueue_scripts');

/** Setting Up Theme Features **/
function october_features() {
  add_theme_support('title-tag');
  register_nav_menu( 'side_menu_location', 'Side Menu Location' );
}
add_action('after_setup_theme', 'october_features');