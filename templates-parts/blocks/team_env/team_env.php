<?php
$title_team = get_field( 'title_team_env' ) ?: 'Titre de la section...' ;
$intro_team = get_field( 'intro_team_env' ) ?: 'Intro de la section...' ; ?>
<h2><?php echo $title_team ?></h2>
<p><?php echo $intro_team ?></p>
<?php
$team = array(
	'post_type' => 'team',
	'post_per_page' => -1,
);
$the_query = new WP_Query( $team );
if($the_query -> have_posts()): ?>
<?php while($the_query -> have_posts()): ?>
<?php $the_query -> the_post(); ?>
	<?php the_title(); ?> <br>
	<?php the_content(); ?>
	<?php the_post_thumbnail(); ?>
<?php endwhile;?>
<?php endif;
wp_reset_postdata();





