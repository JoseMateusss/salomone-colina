<?php
function cs_case_customizer( $wp_customizer )
{
    
    //Settings
    $wp_customizer->add_setting('cs_case_title', array(
        'default' => 'Você deve ser encaixar em algum desses casos'
    ));

    $wp_customizer->add_setting('cs_case_image', array(
        'default' => ''
    ));

    $wp_customizer->add_setting('cs_case_button_text', array(
        'default' => 'Fale com um especialista'
    ));

    $wp_customizer->add_setting('cs_case_button_bgcolor', array(
        'default' => '#CC922D'
    ));
    
    $wp_customizer->add_setting('cs_case_button_color', array(
        'default' => '#ffffff'
    ));

    //Sections
    $wp_customizer->add_section('cs_case_section', array(
        'title' => 'Seção de cases',
        'priority' => '4',
    ));

    //Controllers
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_case_title',
            array(
                'label' => 'Título',
                'section' => 'cs_case_section',
                'settings' => 'cs_case_title',
                'type' => 'text'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Image_Control(
            $wp_customizer,
            'cs_case_image',
            array(
                'label' => 'Imagem de destaque',
                'section' => 'cs_case_section',
                'settings' => 'cs_case_image',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_case_button_text',
            array(
                'label' => 'Texto do botão',
                'section' => 'cs_case_section',
                'settings' => 'cs_case_button_text',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_case_button_bgcolor',
            array(
                'label' => 'Cor de fundo',
                'section' => 'cs_case_section',
                'settings' => 'cs_case_button_bgcolor',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_case_button_color',
            array(
                'label' => 'Cor do texto do botão',
                'section' => 'cs_case_section',
                'settings' => 'cs_case_button_color',
                'priority' => 10,
            )
        )
    );
}