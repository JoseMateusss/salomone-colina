<?php
function cs_link_customizer( $wp_customizer )
{
    //Settings
    $wp_customizer->add_setting('cs_link_cta', array(
        'default' => ''
    ));
    
    //Sections
    $wp_customizer->add_section('cs_link_section', array(
        'title' => 'Link de CTA',
        'priority' => '1'
    ));

    //Controllers
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_link_cta',
            array(
                'label' => 'URL',
                'section' => 'cs_link_section',
                'settings' => 'cs_link_cta',
                'type' => 'text'
            )
        )
    );

}