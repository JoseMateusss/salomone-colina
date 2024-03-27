<?php
function css_dynamic() {
    $heroButtonBgColor = get_theme_mod('cs_hero_button_bgcolor', '#cc922d'); 
    $heroButtonColor = get_theme_mod('cs_hero_button_color', '#ffffff');
    $heroTitleColor = get_theme_mod('cs_hero_title_color', '#cc922d');
    $heroCaptionColor = get_theme_mod('cs_hero_caption_color', '#ffffff');
    $heroCallColor = get_theme_mod('cs_hero_call_color', '#ffffff');
    $caseButtonBgColor = get_theme_mod('cs_case_button_bgcolor', '#cc922d'); 
    $caseButtonColor = get_theme_mod('cs_case_button_color', '#ffffff');
    $actingButtonBgColor = get_theme_mod('cs_acting_button_bgcolor', '#981B1F'); 
    $actingButtonColor = get_theme_mod('cs_acting_button_color', '#ffffff');

    $css = "
        <style>
            #button_hero {
                background-color: $heroButtonBgColor !important;
                color: $heroButtonColor !important;
            }

            .hero-content header h1 {
                color: $heroTitleColor !important;
            }

            #hero_caption {
                color: $heroCaptionColor !important;
            }

            #hero_call {
                color: $heroCallColor !important;
            }

            #button_case {
                background-color: $caseButtonBgColor !important;
                color: $caseButtonColor !important;
            }

            #button_acting {
                background-color: $actingButtonBgColor !important;
                color: $actingButtonColor !important;
            }

        </style>
    ";
    echo $css;
}