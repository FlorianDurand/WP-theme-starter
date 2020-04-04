<?php

function add_custom_cpt() {
    $post_type = "custom";
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
        'supports'            => array( 'title','editor','thumbnail' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-groups',
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

	$taxonomy = "custom_taxonomy"; //if you need to create custom taxonomy for this custom post type
	$object_type = array("team"); //array of post type or custom post type that can use this taxonomy
	$args = array(
		'label' => __( 'Name of taxonomy' ), //A plural descriptive name for the taxonomy marked for translation.
		'rewrite' => array( //Set to false to prevent automatic URL rewriting a.k.a. "pretty permalinks". Pass an $args array to override default URL settings for permalinks as outlined below:
            'slug' => 'type_of_member' //Used as pretty permalink text (i.e. /tag/) - defaults to $taxonomy (taxonomy's name slug)
        ),
		'hierarchical' => true, //Is this taxonomy hierarchical (have descendants) like categories or not hierarchical like tags.
	);
	register_taxonomy( $taxonomy, $object_type, $args );
}
add_action( 'init', 'add_custom_cpt' );





