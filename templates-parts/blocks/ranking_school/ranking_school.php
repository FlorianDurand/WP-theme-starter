<?php
$title = get_field( 'title_ranking_school' ) ?: 'Titre de la section...' ;
$sub_title = get_field( 'sub_title_ranking_school' ) ?: 'Sous-Titre de la section...' ;
$last = get_field( 'end_page' );
if ( $last ) {
	$last = 'last';
	echo '<div class="ranking_school ' . $last . '">';
} else {
	echo '<div class="ranking_school">';
}
?>
 <div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>">
     <h2 class="h2"><?php echo $title ?></h2>
     <h3><?php echo $sub_title ?></h3>
     <div class="ranks">
	     <?php
	     $i=1;
	     // check if the repeater field has rows of data
	     if ( have_rows( 'ranking_repeater' ) ):

		     // loop through the rows of data
		     while ( have_rows( 'ranking_repeater' ) ) : the_row();?>
			     <?php
			     $time = 250*$i;
			     $time_1 = $time+250;
			     ?>
                <div class="rank">
	                <span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $time; ?>" data-aos-once="true"><?php the_sub_field( 'ranking_number' );?></span>
	                <p data-aos-duration="1000" data-aos="fade-up" data-aos-delay="<?php echo $time_1; ?>" data-aos-once="true"><?php the_sub_field( 'ranking_description' ); ?></p>
                </div>


		     <?php $i++;
             endwhile;

	     else :

		     // no rows found

	     endif; ?>
     </div>

 </div>
</div>



