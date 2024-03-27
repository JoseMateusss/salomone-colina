<?php
function cs_theme_styles()
{
 	//styles
 	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/template.css');

    $cor_botao = get_theme_mod('cs_hero_button_color', '#00000');
    $css = "
        #button_hero {
            background-color: $cor_botao !important; 
        }
    ";
    wp_add_inline_style('seu-estilo', $css);

    //scripsts
 	wp_enqueue_script('mainscripts', get_template_directory_uri().'/assets/js/main.js', '', '',true);	
 }

 function cs_after_setup()
 {
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails"); 
}
