<?php
$new = array(
	'post_type' => 'presta',
	'post_per_page' => -1,
);
$the_query = new WP_Query( $new ); ?>
<div class="presta_presta">
    <div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>; color: white;">
        <div class="prestas">
            <div class="swiper-container-presta-mobile">
                <div class="prestas_title swiper-wrapper">
                    <?php
                    $i = 1;
                    $target = 0;
                    if($the_query -> have_posts()): ?>
                        <?php while($the_query -> have_posts()): ?>
                            <?php $the_query -> the_post(); ?>
                            <?php if ( $i === 1 ) { ?>
                            <div class="single_presta_title title_active swiper-slide" data-parent="<?php echo 'target' . $target; ?>">
                                <?php  } else { ?>
                                <div class="single_presta_title swiper-slide" data-parent="<?php echo 'target' . $target; ?>">
                                    <?php } ?>
                                <span><?php echo $i;?></span>
                                <h3 class="h3"><?php the_title(); ?></h3>
                            </div>
                        <?php $i++; $target++ ?>
                        <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>
	       <div class="prestas_content" id="prestas_content">
	               <?php
                   $i = 0;
                   $target = 0;
                   if($the_query -> have_posts()): ?>
		               <?php while($the_query -> have_posts()): ?>
			               <?php $the_query -> the_post(); ?>
                            <?php if ( $i === 0 ) { ?>
                            <div class="single_presta_content content_active" id="<?php echo 'target' . $target; ?>">
                            <?php  } else { ?>
                            <div class="single_presta_content" id="<?php echo 'target' . $target; ?>">
                                <?php } ?>
                                <h3 class="h3mobile"><?php the_title(); ?></h3>
                               <?php the_content(); ?>
                            </div>
		               <?php
                       $i++; $target++;
                       endwhile;?>
	               <?php endif;
	               wp_reset_postdata(); ?>
           </div>
        </div>
    </div>
</div>
        <script>
          if ( document.getElementsByClassName( "prestas" ).length > 0 ) {
            var i, tabHeight, maxHeight, titlePresta;
            titlePresta = document.getElementsByClassName("single_presta_title");
            for (i = 0; i < titlePresta.length; i++) {
              titlePresta[i].addEventListener("click", showPresta);
            }
            tabHeight = document.getElementsByClassName("single_presta_content");
            maxHeight = 0;
            for (i = 0; i < tabHeight.length; i++) {
              if (maxHeight < tabHeight[i].clientHeight) {
                maxHeight = tabHeight[i].clientHeight
              }
            }
            document.getElementById('prestas_content').style.height = maxHeight + 'px';

            function showPresta () {
              let i;
              for (i = 0; i < titlePresta.length; i++) {
                let current_title = document.getElementsByClassName("title_active");
                let current_content = document.getElementsByClassName("single_presta_content");
                current_title[0].className = current_title[0].className.replace("title_active", "");
                this.className += " title_active";
                const target = this.dataset.parent;
                current_content[i].classList.remove('content_active');
                setTimeout(function () {
                  wait(target);
                }, 400);
              }

              function wait (target) {
                document.getElementById(target).classList.add('content_active');
              }
            }
          }
          </script>





