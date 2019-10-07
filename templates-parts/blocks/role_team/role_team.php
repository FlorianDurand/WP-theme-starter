<?php


$role = get_field( 'role' ) ?: 'Rôle du membre...' ;
$degree = get_field( 'degree_member' );
?>


	<span><?php echo $role ?></span>
    <br>
    <?php if ( $degree ) { ?>
	<span><?php echo $degree ?></span>
    <?php }

