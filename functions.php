<?php
//includes
require get_template_directory(). "/include/setup.php";
require get_template_directory(). "/include/customizer/theme-customizer.php";
require get_template_directory(). "/include/custom-post-type/faq.php";
require get_template_directory(). "/include/custom-post-type/case.php";
require get_template_directory(). "/include/custom-post-type/acting.php";
require get_template_directory(). "/include/custom-post-type/testimony.php";
require get_template_directory(). "/include/css/dynamic.php";				

//Hooks
add_action('wp_enqueue_scripts', 'cs_theme_styles');
add_action('after_setup_theme', 'cs_after_setup');
add_action('customize_register', 'cs_customizer_register');
add_action('init', 'register_faq_custom_post_type');
add_action('init', 'register_case_custom_post_type');
add_action('init', 'register_acting_custom_post_type');
add_action('init', 'register_testimony_custom_post_type');
add_action('wp_head', 'css_dynamic');