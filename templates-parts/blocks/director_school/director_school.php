<?php


$title_director = get_field( 'title_director_school' ) ?: 'Titre de la page...' ;
$director = get_field( 'director' ) ?: 'Président d\'AgroParistech' ;
$director_speech_1 = get_field( 'director_school_1' ) ?: 'Mots du directeur premier bloc' ;
$director_speech_2 = get_field( 'director_school_2' ) ?: 'Mots du directeur second bloc' ;
$director_image = get_field( 'director_img' );
$size = 'full' ; // (thumbnail, medium, large, full or custom size)
$link = get_field( 'link_director' );

?>
<div class="director_school">
    <h2 class="h2"><?php echo $title_director ?></h2>
    <div class="speech">
        <p><?php echo $director_speech_1 ?></p>
        <div id="right_director">
            <p><?php echo $director_speech_2 ?></p>
            <div class="img">
		        <span><?php echo $director ?></span>
		        <?php if( $director_image ) {

			        echo wp_get_attachment_image( $director_image, $size );

		        } ?>
            </div>
        </div>
    </div>


    <?php if( $link ): ?>
       <div id="director_link"><?php echo $link ?></div>
    <?php endif; ?>
</div>

