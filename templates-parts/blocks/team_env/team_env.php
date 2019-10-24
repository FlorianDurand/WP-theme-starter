<?php
$title_team = get_field( 'title_team_env' ) ?: 'Titre de la section...' ;
$type_of_team = get_field( 'team_type_env' );
$intro_team = get_field( 'intro_team_env' );
$last = get_field( 'end_page' );
if ( $last ) {
    $last = 'last';
    echo '<div class="team_env ' . $last . '">';
} else {
    echo '<div class="team_env">';
}
?>
    <div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>;color:white;">
        <h2 class="h2"><?php echo $title_team ?></h2>
        <?php if ( $intro_team ) { ?>
        <p><?php echo $intro_team ?></p>
        <?php } ?>
        <?php
        $team = array(
            'post_type' => 'team',
            'tax_query' => array(
                array(
                    'taxonomy' => 'type_of_member',
                    'field'    => 'slug',
                    'terms'    => $type_of_team->{'slug'},
                ),
            ),
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query( $team );
        if ( 'current_mandate' === $type_of_team->{'slug'} ) {
            $col = 4;
        } else {
            $col = 3;
        }
        ?>
        <div class="members <?php echo 'col-' . $col;?>">
       <?php
            $i = 0;
            $margin = 50;
            $y = 1;
            if( $the_query -> have_posts() ): ?>
        <?php while( $the_query -> have_posts() ): ?>
        <?php $the_query -> the_post(); ?>

            <?php $margin_top = $i * $margin;
            $time = $y*50;
            ?>
           <div class="member" style="margin-top: <?php echo $margin_top . 'px';?> " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $time;?>" data-aos-once="true">
	           <?php the_post_thumbnail( 'team_env' ); ?>
	            <h5 class="h5"><?php the_title(); ?></h5>
	           <?php the_content(); ?>
           </div>
        <?php
            if ( 4 === $col && 3 === $i ) {
                $i = 0;
                $y = 1;
            } elseif ( 3 === $col && 2 === $i) {
                $i = 0;
                $y = 1;
            } else {
                $i++;
                $y++;
            }
            ;?>
        <?php endwhile;?>
        <?php endif;
        wp_reset_postdata(); ?>
        </div>
    </div>
</div>





