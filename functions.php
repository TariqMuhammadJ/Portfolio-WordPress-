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


add_filter('excerpt_length', function($length){
    if(get_post_type() === 'project'){
        return 20;
    }

    return $length;
})





?>