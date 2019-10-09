<?php


$end_image = get_field( 'end_section_image' );
if( !empty($end_image) ):
	$size = 'fullscreen';
	$thumb = $end_image['sizes'][ $size ];
	?>
<?php endif; ?>
<div class="end_picture" style="background-image: url(<?php echo $thumb; ?>)">

</div>


