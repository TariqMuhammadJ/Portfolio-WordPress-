<?php

require_once get_template_directory() . '/inc/class-assets.php';
require_once get_template_directory() . '/inc/class-customize.php';
require_once get_template_directory() . '/inc/class-widget.php';
require_once get_template_directory() . '/inc/class-author.php';

Theme_Assets::getInstance();
new Class_customize();
function load_theme_widget_areas(){
    $widget = new Widget_Area();

    $widget->add('footer-social', 'social-footer-area', 'a footer area for social icons', '<div class="flex flex-wrap justify-center gap-4">', '</div>' );
}

add_action('after_setup_theme', 'load_theme_widget_areas');

new Author_Fields();

?>