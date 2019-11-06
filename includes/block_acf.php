<?php

add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
function add_block_editor_assets(){
	wp_enqueue_style('block_editor_css', get_template_directory_uri() . '/templates-parts/blocks_style/blocks.css');
}
function register_acf_block_types() {

	/*
	 * Home Page
	 */
	acf_register_block_type(array(
		'name'              => 'numbers',
		'title'             => __('Chiffres Clés'),
		'description'       => __('Ajouter des chiffres clés.'),
		'render_template'   => 'templates-parts/blocks/numbers/numbers.php',
		'category'          => 'formatting',
		'icon'              => 'chart-line',
		'keywords'          => array( 'chiffres', 'clés', 'ajouter' ),
	));
	acf_register_block_type(array(
		'name'              => 'title_hp',
		'title'             => __('Titre style page d\'accueil'),
		'render_template'   => 'templates-parts/blocks/title_hp/title_hp.php',
		'category'          => 'formatting',
		'icon'              => 'format-quote',
		'keywords'          => array( 'Titre', 'Home page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'Presation_resume',
		'title'             => __('Résumer des Prestations (HP)'),
		'render_template'   => 'templates-parts/blocks/presta_hp/presta_hp.php',
		'category'          => 'formatting',
		'icon'              => 'portfolio',
		'keywords'          => array( 'prestation', 'Home page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'end_picture',
		'title'             => __('Photo de fin de section'),
		'render_template'   => 'templates-parts/blocks/end_section_picture/end_picture.php',
		'category'          => 'formatting',
		'icon'              => 'format-image',
		'keywords'          => array( 'image', 'section', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'school',
		'title'             => __('Présentation de l\'école (HP)'),
		'render_template'   => 'templates-parts/blocks/school_pres/school_hp.php',
		'category'          => 'formatting',
		'icon'              => 'welcome-learn-more',
		'keywords'          => array( 'ecole', 'Home page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'actu_resume',
		'title'             => __('Résumer des Actualités (HP)'),
		'render_template'   => 'templates-parts/blocks/actu_hp/actu_hp.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array( 'actualité', 'Home page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'clients_resume',
		'title'             => __('Ils nous ont fait confiance'),
		'render_template'   => 'templates-parts/blocks/clients_hp/clients_hp.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array( 'clients', 'Home page', 'confiance' ),
	));


	/*
	 * School Page
	 */
	acf_register_block_type(array(
		'name'              => 'title_school',
		'title'             => __('Titre style page école'),
		'render_template'   => 'templates-parts/blocks/title_school/title_school.php',
		'category'          => 'formatting',
		'icon'              => 'format-quote',
		'keywords'          => array( 'Titre', 'ecole page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'presentation_school',
		'title'             => __('Présentation de l\'école (école)'),
		'render_template'   => 'templates-parts/blocks/presentation_school/presentation_school.php',
		'category'          => 'formatting',
		'icon'              => 'admin-home',
		'keywords'          => array( 'Présentation de l\'école', 'ecole page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'formation_school',
		'title'             => __('Présentation des formations (école)'),
		'render_template'   => 'templates-parts/blocks/formation_school/formation_school.php',
		'category'          => 'formatting',
		'icon'              => 'admin-home',
		'keywords'          => array( 'Formation', 'ecole page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'director_school',
		'title'             => __('Mots du directeur'),
		'render_template'   => 'templates-parts/blocks/director_school/director_school.php',
		'category'          => 'formatting',
		'icon'              => 'id-alt',
		'keywords'          => array( 'Directeur', 'ecole page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'ranking',
		'title'             => __('Classements de l\'école'),
		'description'       => __('Renseigner les classements de l\'école'),
		'render_template'   => 'templates-parts/blocks/ranking_school/ranking_school.php',
		'category'          => 'formatting',
		'icon'              => 'chart-line',
		'keywords'          => array( 'Classement', 'ecole page', 'page' ),
	));


	/*
	 * Env Page
	 */
	acf_register_block_type(array(
		'name'              => 'title_environment',
		'title'             => __('Titre style page environnement'),
		'render_template'   => 'templates-parts/blocks/title_env/title_env.php',
		'category'          => 'formatting',
		'icon'              => 'format-quote',
		'keywords'          => array( 'Titre', 'environnement page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'president_words',
		'title'             => __('Discours du président de l\'ASE'),
		'render_template'   => 'templates-parts/blocks/president_env/president_env.php',
		'category'          => 'formatting',
		'icon'              => 'format-quote',
		'keywords'          => array( 'Président', 'environnement page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'key_date',
		'title'             => __('Dates Clés'),
		'render_template'   => 'templates-parts/blocks/key_date_env/key_date_env.php',
		'category'          => 'formatting',
		'icon'              => 'buddicons-community',
		'keywords'          => array( 'Dates Clés', 'environnement page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'team_env',
		'title'             => __('Les membres de la JE'),
		'render_template'   => 'templates-parts/blocks/team_env/team_env.php',
		'category'          => 'formatting',
		'icon'              => 'buddicons-community',
		'keywords'          => array( 'Dates Clés', 'environnement page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'role_team',
		'title'             => __('Role du membre'),
		'render_template'   => 'templates-parts/blocks/role_team/role_team.php',
		'category'          => 'formatting',
		'icon'              => 'buddicons-buddypress-logo',
		'keywords'          => array( 'Role', 'team', 'team' ),
	));
	acf_register_block_type(array(
		'name'              => 'rse_env',
		'title'             => __('Politique RSE'),
		'render_template'   => 'templates-parts/blocks/rse_env/rse_env.php',
		'category'          => 'formatting',
		'icon'              => 'palmtree',
		'keywords'          => array( 'Politique', 'rse', 'environnement page', 'page' ),
	));


	/*
	 * Prestation Page
	 */
	acf_register_block_type(array(
		'name'              => 'title_presta',
		'title'             => __('Titre style page prestation'),
		'render_template'   => 'templates-parts/blocks/title_presta/title_presta.php',
		'category'          => 'formatting',
		'icon'              => 'format-quote',
		'keywords'          => array( 'Titre', 'Prestaion page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'Presation_presta',
		'title'             => __('Nos Prestations (page prestation)'),
		'render_template'   => 'templates-parts/blocks/presta_presta/presta_presta.php',
		'category'          => 'formatting',
		'icon'              => 'portfolio',
		'keywords'          => array( 'prestation', 'Prestation page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'solutions',
		'title'             => __('Nos Solutions'),
		'render_template'   => 'templates-parts/blocks/solutions_presta/solutions_presta.php',
		'category'          => 'formatting',
		'icon'              => 'book-alt',
		'keywords'          => array( 'Solution', 'solutions', 'Prestation page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'etude_steps',
		'title'             => __('Déroulé de l\'étude'),
		'description'       => __('Renseigner le déroulement d\'une étude'),
		'render_template'   => 'templates-parts/blocks/etude_steps_presta/etude_steps_presta.php',
		'category'          => 'formatting',
		'icon'              => 'chart-line',
		'keywords'          => array( 'Déroulé', 'étude', 'Prestation page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'Client_words_presta',
		'title'             => __('Ils nous font confiance (client individuel)'),
		'render_template'   => 'templates-parts/blocks/client_presta/client_presta.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array( 'confiance', 'prestation page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'quality',
		'title'             => __('Nos gages de qualités'),
		'render_template'   => 'templates-parts/blocks/quality_presta/quality_presta.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array( 'Qualité', 'prestation page', 'page' ),
	));
	acf_register_block_type(array(
		'name'              => 'partners',
		'title'             => __('Nos Partenaires'),
		'render_template'   => 'templates-parts/blocks/partenaire_presta/partenaire_presta.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array( 'Partenaires', 'Prestation page', 'page' ),
	));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
	add_action('acf/init', 'register_acf_block_types');
}