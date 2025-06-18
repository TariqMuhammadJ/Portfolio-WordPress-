<?php

require_once get_template_directory() . '/inc/class-assets.php';
require_once get_template_directory() . '/inc/class-customize.php';
require_once get_template_directory() . '/inc/class-widget.php';
require_once get_template_directory() . '/inc/class-author.php';

Theme_Assets::getInstance();
new Class_customize();

new Author_Fields();



?>