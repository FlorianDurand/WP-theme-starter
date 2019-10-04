<?php

function ajout_cpt_partner() {
    $post_type_partner = "partner";
$labels = array(
        'name'               => 'Partenaires',
        'singular_name'      => 'Partenaire',
        'all_items'          => 'Tous les Partenaires',
        'add_new'            => 'Ajouter un Partenaire',
        'add_new_item'       => 'Ajouter un Partenaire',
        'edit_item'          => "Modifier un Partenaire",
        'new_item'           => 'Ajouter un Partenaire',
        'view_item'          => "Voir le Partenaire",
        'search_items'       => 'Chercher un Partenaire',
        'not_found'          => 'Pas de Partenaire',
        'not_found_in_trash' => 'Pas de Partenaire',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Nos Partenaires',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor','thumbnail'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 9,
        'menu_icon'           => 'dashicons-money',
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => $post_type_partner )
    );

    register_post_type($post_type_partner, $args );
}
add_action( 'init', 'ajout_cpt_partner' );





