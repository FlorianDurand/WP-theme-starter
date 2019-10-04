<?php


$title = get_field( 'title_presta' ) ?: 'Titre de la page...' ;
$intro = get_field( 'intro_presta' ) ?: 'intro...' ;
?>


	<h2><?php echo $title ?></h2>
	<p><?php echo $intro ?></p>


