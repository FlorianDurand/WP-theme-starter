<?php
$title = get_field( 'title_actu_hp' ) ?: 'Titre de la section...' ; ?>
<div class="actu_hp">
<div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>">
<h2 class="h2"><?php echo $title ?></h2>
    <div class="news">
        <?php
        $new = array(
            'ignore_sticky_posts' => 1,
            'post_type' => 'post',
            'posts_per_page' => 3,
        );
        $the_query = new WP_Query( $new );
        $i = 0;
        $y = 1;
        if($the_query -> have_posts()): ?>
        <?php while($the_query -> have_posts()): ?>
        <?php $the_query -> the_post(); ?>
                <?php
                $margin = $i * 60;
                $time = $y * 100;
                ?>
                <div class="single-news" style="margin-top: <?php echo $margin . 'px';?>" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $time;?>" data-aos-once="true">
                    <?php the_post_thumbnail(); ?>
                    <div class="box">
                        <h5><?php the_title(); ?></h5>
                        <a href="<?php the_permalink(); ?>">Lire l'article</a>
                    </div>
                </div>
            <?php $i++;$y++;?>
        <?php endwhile;?>
        <?php endif;
        wp_reset_postdata();?>
    </div>
</div>
</div>




