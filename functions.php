<?php

require_once get_template_directory() . '/inc/class-assets.php';
require_once get_template_directory() . '/inc/class-customize.php';
require_once get_template_directory() . '/inc/class-widget.php';
require_once get_template_directory() . '/inc/class-author.php';
require_once get_template_directory() . '/inc/class-contact.php';

Theme_Assets::getInstance();
new Class_customize();

new Author_Fields();
new ContactForm();

// both can be added elsewhere
add_filter('excerpt_length', function($length){
    if(get_post_type() === 'project'){
        return 20;
    }

    return $length;
});

// I am going to be practicing some functions here, and modify them later on//
function mytheme_register_image_sizes() {
    add_image_size('single-post-featured', 1200, 400, true);
}
add_action('after_setup_theme', 'mytheme_register_image_sizes');






?>