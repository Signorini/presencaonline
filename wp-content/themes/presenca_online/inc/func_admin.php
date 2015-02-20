<?php
add_action('init', 'change_post_object_label', 2);
add_action('admin_menu', 'change_post_menu_label', 1);

add_editor_style();


function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Artigos';
    $submenu['edit.php'][5][0] = 'Artigos';
    $submenu['edit.php'][10][0] = 'Add Artigo';
    echo '';
}

function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Artigo';
    $labels->singular_name = 'Artigo';
    $labels->add_new = 'Add Artigo';
    $labels->add_new_item = 'Add Artigo';
    $labels->edit_item = 'Editar Artigo';
    $labels->new_item = 'Artigo';
    $labels->view_item = 'Ver Artigo';
    $labels->search_items = 'Pesquisar Artigo';
    $labels->not_found = 'Nenhum Artigo encontrado';
    $labels->not_found_in_trash = 'Nenhum Artigo encontrado';
}