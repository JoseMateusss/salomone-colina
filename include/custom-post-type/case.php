<?php
function register_case_custom_post_type() {
    $labels = array(
        'name'               => _x('Cases', 'Nome geral dos Cases'),
        'singular_name'      => _x('Case', 'Nome singular dos Cases'),
        'menu_name'          => __('Cases'),
        'add_new'            => __('Adicionar Novo'),
        'add_new_item'       => __('Adicionar Novo case'),
        'edit_item'          => __('Editar case'),
        'new_item'           => __('Novo case'),
        'view_item'          => __('Ver case'),
        'search_items'       => __('Buscar cases'),
        'not_found'          => __('Nenhum case encontrado'),
        'not_found_in_trash' => __('Nenhum case encontrado na lixeira'),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'menu_icon'           => 'dashicons-text-page',
        'supports'            => array('title', 'editor', 'thumbnail'),
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'case'),
    );

    register_post_type('case', $args);
}