<?php
function wpexplorer_remove_dashboard_widget () {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
}
add_action ('wp_dashboard_setup', 'wpexplorer_remove_dashboard_widget');

function wpexplorer_remove_menus() {
//	remove_menu_page( 'plugins.php' );         // Plugins
//	remove_menu_page( 'tools.php' );           // Tools
//	remove_menu_page( 'options-general.php' ); // Settings
//	remove_menu_page( 'edit.php' );            // Article
	remove_menu_page( 'edit-comments.php' );   // Comments
}
add_action( 'admin_menu', 'wpexplorer_remove_menus' );


function wpexplorer_adjust_the_wp_menu() {
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'themes.php', 'customize.php?return=%2Fwp-admin%2Fthemes.php' );
}
add_action( 'admin_menu', 'wpexplorer_adjust_the_wp_menu', 999 );



function wpexplorer_remove_footer_admin () {
	echo '';
}
add_filter( 'admin_footer_text', 'wpexplorer_remove_footer_admin' );

function wpexplorer_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_ase_simple.svg );
			padding-bottom: 30px;
		}
	</style>
<?php }

add_action( 'login_enqueue_scripts', 'wpexplorer_login_logo' );
function wpexplorer_login_logo_url() {
	return esc_url( home_url( '/' ) );
}
add_filter( 'login_headerurl', 'wpexplorer_login_logo_url' );

function wpexplorer_login_logo_url_title() {
	return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'wpexplorer_login_logo_url_title' );

