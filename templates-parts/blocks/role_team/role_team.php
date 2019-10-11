<?php


$role = get_field( 'role' ) ?: 'Rôle du membre...' ;
$degree = get_field( 'degree_member' );
?>


	<div class="role"><?php the_field( 'role' ); ?></div>
    <br>
    <?php if ( $degree ) { ?>
	<span class="degree"><?php echo $degree ?></span>
    <?php } ?>

