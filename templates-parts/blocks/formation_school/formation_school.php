<?php
$title = get_field( 'title_formation_school' ) ?: 'Titre de la section...' ;
$link = get_field( 'link_formation' );
?>
<div class="formation_school">
    <div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>">
        <h2 class="h2"><?php echo $title ?></h2>
        <div class="formations">
	    <?php
	    $i = 0;
	    $margin = 50;
	    // check if the repeater field has rows of data
	    if ( have_rows( 'formation_repeater' ) ):

		    // loop through the rows of data
		    while ( have_rows( 'formation_repeater' ) ) : the_row(); ?>
			    <?php $margin_top = $i * $margin;?>
                <div class="formation" style="margin-top: <?php echo $margin_top . 'px';?> " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-once="true">
	                <h4><?php the_sub_field( 'title_formation' ); ?></h4>
	                <p><?php the_sub_field( 'description_formation' ); ?></p>
                </div>
			    <?php
			    if ( 2 === $i ) {
				    $i = 0;
			    } else {
				    $i++;
			    }
			    ;?>
		    <?php endwhile;

	    else :

		    // no rows found

	    endif; ?>
        </div>
    </div>
	<?php if( $link ):
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
		?>
        <a class="school_link button-style" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
	<?php endif; ?>
</div>






