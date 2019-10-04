<?php

function ajout_cpt_team() {
    $post_type_team = "team";
$labels = array(
        'name'               => 'Membres',
        'singular_name'      => 'Membre',
        'all_items'          => 'Tous les Membres',
        'add_new'            => 'Ajouter un Membre',
        'add_new_item'       => 'Ajouter un Membre',
        'edit_item'          => "Modifier un Membre",
        'new_item'           => 'Ajouter un Membre',
        'view_item'          => "Voir le Membre",
        'search_items'       => 'Chercher un Membre',
        'not_found'          => 'Pas de Membre',
        'not_found_in_trash' => 'Pas de Membre',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Nos Membres',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor','thumbnail'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-groups',
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => $post_type_team )
    );

    register_post_type($post_type_team, $args );
}
add_action( 'init', 'ajout_cpt_team' );





