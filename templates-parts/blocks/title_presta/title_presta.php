<?php


$title = get_field( 'title_presta' ) ?: 'Titre de la page...' ;
$intro = get_field( 'intro_presta' ) ?: 'intro...' ;
?>

<div class="title_presta">
    <h1 class="h2"><?php echo $title ?></h1>
    <p><?php echo $intro ?></p>
</div>



