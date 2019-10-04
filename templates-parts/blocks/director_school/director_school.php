<?php


$title_director = get_field( 'title_director_school' ) ?: 'Titre de la page...' ;
$director_speech = get_field( 'director_school' ) ?: 'Mots du directeur...' ;

?>

	<h2><?php echo $title_director ?></h2>
	<p><?php echo $director_speech ?></p>

