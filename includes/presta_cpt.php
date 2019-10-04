<?php

function ajout_cpt_presta() {
    $post_type_presta = "presta";
$labels = array(
        'name'               => 'Prestations',
        'singular_name'      => 'prestation',
        'all_items'          => 'Toutes les Prestations',
        'add_new'            => 'Ajouter une Prestation',
        'add_new_item'       => 'Ajouter une Prestation',
        'edit_item'          => "Modifier une Prestation",
        'new_item'           => 'Ajouter une Prestation',
        'view_item'          => "Voir la Prestation",
        'search_items'       => 'Chercher une prestation',
        'not_found'          => 'Pas de prestation',
        'not_found_in_trash' => 'Pas de prestation',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Prestations',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor','excerpt', 'thumbnail'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-portfolio',
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => $post_type_presta )
    );

    register_post_type($post_type_presta, $args );
}
add_action( 'init', 'ajout_cpt_presta' );





