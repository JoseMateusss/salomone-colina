<?php
function register_faq_custom_post_type() {
    $labels = array(
        'name'               => _x('FAQs', 'Nome geral dos FAQs'),
        'singular_name'      => _x('FAQ', 'Nome singular dos FAQs'),
        'menu_name'          => __('FAQs'),
        'add_new'            => __('Adicionar Novo'),
        'add_new_item'       => __('Adicionar Novo FAQ'),
        'edit_item'          => __('Editar FAQ'),
        'new_item'           => __('Novo FAQ'),
        'view_item'          => __('Ver FAQ'),
        'search_items'       => __('Buscar FAQs'),
        'not_found'          => __('Nenhum FAQ encontrado'),
        'not_found_in_trash' => __('Nenhum FAQ encontrado na lixeira'),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'menu_icon'           => 'dashicons-editor-help', // Ícone para o menu
        'supports'            => array('title', 'editor'),
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'faq'),
    );

    register_post_type('faq', $args);
}