<?php
function cs_acting_customizer( $wp_customizer )
{
    
    //Settings
    $wp_customizer->add_setting('cs_acting_title', array(
        'default' => 'Como funciona nossa atuação'
    ));

    $wp_customizer->add_setting('cs_acting_button_text', array(
        'default' => 'Fale com um especialista'
    ));

    $wp_customizer->add_setting('cs_acting_button_bgcolor', array(
        'default' => '#981B1F'
    ));
    
    $wp_customizer->add_setting('cs_acting_button_color', array(
        'default' => '#ffffff'
    ));
    
    //Sections
    $wp_customizer->add_section('cs_acting_section', array(
        'title' => 'Seção de atuação',
        'priority' => '5',
    ));

    //Controllers
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_acting_title',
            array(
                'label' => 'Título',
                'section' => 'cs_acting_section',
                'settings' => 'cs_acting_title',
                'type' => 'text'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_acting_button_text',
            array(
                'label' => 'Texto do botão',
                'section' => 'cs_acting_section',
                'settings' => 'cs_acting_button_text',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_acting_button_bgcolor',
            array(
                'label' => 'Cor de fundo',
                'section' => 'cs_acting_section',
                'settings' => 'cs_acting_button_bgcolor',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_acting_button_color',
            array(
                'label' => 'Cor do texto do botão',
                'section' => 'cs_acting_section',
                'settings' => 'cs_acting_button_color',
                'priority' => 10,
            )
        )
    );
}