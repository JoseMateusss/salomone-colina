<?php
function cs_data_customizer( $wp_customizer )
{
    //Settings
    $wp_customizer->add_setting('cs_cases_attended', array(
        'default' => '000'
    ));
    $wp_customizer->add_setting('cs_cases_won', array(
        'default' => '00'
    ));
    $wp_customizer->add_setting('cs_years_history', array(
        'default' => '00'
    ));

    //Sections
    $wp_customizer->add_section('cs_data_section', array(
        'title' => 'Dados de casos',
        'priority' => '2'
    ));

    //Controllers
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_cases_attended',
            array(
                'label' => 'Casos atendidos',
                'section' => 'cs_data_section',
                'settings' => 'cs_cases_attended',
                'type' => 'number'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_cases_won',
            array(
                'label' => 'Casos ganhos',
                'section' => 'cs_data_section',
                'settings' => 'cs_cases_won',
                'type' => 'number'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'cs_years_history',
            array(
                'label' => 'Anos de história',
                'section' => 'cs_data_section',
                'settings' => 'cs_years_history',
                'type' => 'number'
            )
        )
    );
}