<?php

require_once get_template_directory() . '/inc/class-assets.php';
require_once get_template_directory() . '/inc/class-customize.php';

Theme_Assets::getInstance();
new Class_customize();

?>