<?php


$title = get_field( 'title_HP' ) ?: 'Titre de la page...' ;
$intro = get_field( 'intro_HP' ) ?: 'intro...' ;
?>


	<h2><?php echo $title ?></h2>
	<p><?php echo $intro ?></p>


