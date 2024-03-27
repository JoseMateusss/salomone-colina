<?php
require get_template_directory().'/include/customizer/data.php';
require get_template_directory().'/include/customizer/link.php';
require get_template_directory().'/include/customizer/hero.php';
require get_template_directory().'/include/customizer/case.php';
require get_template_directory().'/include/customizer/acting.php';

function cs_customizer_register( $wp_customizer ){
    cs_data_customizer($wp_customizer);
    cs_link_customizer($wp_customizer);
    cs_hero_customizer($wp_customizer);
    cs_case_customizer($wp_customizer);
    cs_acting_customizer($wp_customizer);
}