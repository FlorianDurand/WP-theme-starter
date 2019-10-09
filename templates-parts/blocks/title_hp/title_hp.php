<?php


$title = get_field( 'title_HP' ) ?: 'Titre de la page...' ;
$intro = get_field( 'intro_HP' ) ?: 'intro...' ;
?>

<div class="title_hp">
    <h1 class="H1"><?php echo $title ?></h1>
    <p><?php echo $intro ?></p>
</div>



