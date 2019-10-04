<?php


$title = get_field( 'title_presentation_school' ) ?: 'Titre de la page...' ;
$intro1 = get_field( 'presentation_school_1' ) ?: 'Presentation block 1...' ;
$intro2 = get_field( 'presentation_school_2' ) ?: 'Presentation block 2...' ;

?>

	<h2><?php echo $title ?></h2>
	<p><?php echo $intro1 ?></p>
	<p><?php echo $intro2 ?></p>


