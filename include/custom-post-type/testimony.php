<?php
function register_testimony_custom_post_type() {
    $labels = array(
        'name'               => _x('Depoimentos', 'Nome geral dos depoimentos'),
        'singular_name'      => _x('Depoimento', 'Nome singular dos depoimentos'),
        'menu_name'          => __('Depoimentos'),
        'add_new'            => __('Adicionar Novo'),
        'add_new_item'       => __('Adicionar Novo Depoimentos'),
        'edit_item'          => __('Editar Depoimento'),
        'new_item'           => __('Novo depoimento'),
        'view_item'          => __('Ver depoimento'),
        'search_items'       => __('Buscar depoimentos'),
        'not_found'          => __('Nenhum depoimento encontrado'),
        'not_found_in_trash' => __('Nenhum depoimento encontrado na lixeira'),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'menu_icon'           => 'dashicons-admin-comments',
        'supports'            => array('title', 'thumbnail'),
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'testimony'),
    );

    register_post_type('testimony', $args);
}