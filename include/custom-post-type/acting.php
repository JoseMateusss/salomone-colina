<?php
function register_acting_custom_post_type() {
    $labels = array(
        'name'               => _x('Atuações', 'Nome geral de atuações'),
        'singular_name'      => _x('Atuação', 'Nome singular para atuação'),
        'menu_name'          => __('Atuações'),
        'add_new'            => __('Adicionar Novo'),
        'add_new_item'       => __('Adicionar Nova atuação'),
        'edit_item'          => __('Editar atuação'),
        'new_item'           => __('Nova atuação'),
        'view_item'          => __('Ver atuação'),
        'search_items'       => __('Buscar atuações'),
        'not_found'          => __('Nenhuma atuação encontrada'),
        'not_found_in_trash' => __('Nenhuma atuação encontrada na lixeira'),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'menu_icon'           => 'dashicons-paperclip',
        'supports'            => array('title', 'editor', 'thumbnail'),
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'acting'),
    );

    register_post_type('acting', $args);
}