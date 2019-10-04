<?php

function ajout_cpt_client() {
    $post_type_client = "client";
$labels = array(
        'name'               => 'Clients',
        'singular_name'      => 'Clients',
        'all_items'          => 'Tous les Clients',
        'add_new'            => 'Ajouter un Client',
        'add_new_item'       => 'Ajouter un Client',
        'edit_item'          => "Modifier un Client",
        'new_item'           => 'Ajouter un Client',
        'view_item'          => "Voir le Client",
        'search_items'       => 'Chercher un Client',
        'not_found'          => 'Pas de Client',
        'not_found_in_trash' => 'Pas de Client',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Nos Principaux Clients',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor','thumbnail'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => $post_type_client )
    );

    register_post_type($post_type_client, $args );
}
add_action( 'init', 'ajout_cpt_client' );





