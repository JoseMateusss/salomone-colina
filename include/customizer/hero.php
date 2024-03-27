<?php
function cs_hero_customizer( $wp_customizer )
{
    //panel
    $wp_customizer->add_panel('cs_hero_panel', array(
        'title' => 'Seção de Manchete',
        'priority' => 3,
    ));


    //Settings
    $wp_customizer->add_setting('cs_hero_title', array(
        'default' => 'sofreu multa ou TEVE SUA CNH CASSADA ou suspensa?'
    ));

    $wp_customizer->add_setting('cs_hero_caption', array(
        'default' => 'Somos um escritório de advocacia especializado em Direito de Trânsito.'
    ));

    $wp_customizer->add_setting('cs_hero_call', array(
        'default' => 'Clique e receba nossa ajuda em seu caso!'
    ));

    $wp_customizer->add_setting('cs_hero_title_color', array(
        'default' => '#cc922d'
    ));

    $wp_customizer->add_setting('cs_hero_caption_color', array(
        'default' => '#ffffff'
    ));

    $wp_customizer->add_setting('cs_hero_call_color', array(
        'default' => '#ffffff'
    ));

    $wp_customizer->add_setting('cs_hero_button_text', array(
        'default' => 'Falar com especialista'
    ));

    $wp_customizer->add_setting('cs_hero_button_bgcolor', array(
        'default' => '#cc922d'
    ));

    $wp_customizer->add_setting('cs_hero_button_color', array(
        'default' => '#ffffff'
    ));

    $wp_customizer->add_setting('cs_hero_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customizer->add_setting('cs_hero_feature_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    //Sections
    $wp_customizer->add_section('cs_hero_text_section', array(
        'title' => 'Textos',
        'priority' => '3',
        'panel' => 'cs_hero_panel',
    ));

    $wp_customizer->add_section('cs_hero_button_section', array(
        'title' => 'Botão de CTA',
        'priority' => '10',
        'panel' => 'cs_hero_panel',
    ));

    $wp_customizer->add_section('cs_hero_images_section', array(
        'title' => 'Imagens',
        'priority' => '10',
        'panel' => 'cs_hero_panel',
    ));

    //Controllers
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_hero_title',
            array(
                'label' => 'Título',
                'section' => 'cs_hero_text_section',
                'settings' => 'cs_hero_title',
                'type' => 'text'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_hero_caption',
            array(
                'label' => 'Subtítulo',
                'section' => 'cs_hero_text_section',
                'settings' => 'cs_hero_caption',
                'type' => 'text'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_hero_call',
            array(
                'label' => 'Chamada para ação',
                'section' => 'cs_hero_text_section',
                'settings' => 'cs_hero_call',
                'type' => 'text'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_hero_button_text',
            array(
                'label' => 'Texto',
                'section' => 'cs_hero_button_section',
                'settings' => 'cs_hero_button_text',
                'type' => 'text',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_hero_button_color',
            array(
                'label' => 'Cor do texto',
                'section' => 'cs_hero_button_section',
                'settings' => 'cs_hero_button_color',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_hero_button_bgcolor',
            array(
                'label' => 'Cor de fundo',
                'section' => 'cs_hero_button_section',
                'settings' => 'cs_hero_button_bgcolor',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_hero_title_color',
            array(
                'label' => 'Cor do título',
                'section' => 'cs_hero_text_section',
                'settings' => 'cs_hero_title_color',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_hero_caption_color',
            array(
                'label' => 'Cor do subtítulo',
                'section' => 'cs_hero_text_section',
                'settings' => 'cs_hero_caption_color',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'cs_hero_call_color',
            array(
                'label' => 'Cor do texto de CTA',
                'section' => 'cs_hero_text_section',
                'settings' => 'cs_hero_call_color',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Image_Control(
            $wp_customizer,
            'cs_hero_logo',
            array(
                'label' => 'Logo marca',
                'section' => 'cs_hero_images_section',
                'settings' => 'cs_hero_logo',
                'priority' => 10,
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Image_Control(
            $wp_customizer,
            'cs_hero_feature_image',
            array(
                'label' => 'Imagem de destaque',
                'section' => 'cs_hero_images_section',
                'settings' => 'cs_hero_feature_image',
                'priority' => 10,
            )
        )
    );

}