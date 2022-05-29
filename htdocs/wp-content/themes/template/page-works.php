<section class="p-index__works" id="works">
    <div class="u-layout">
        <h2 class="c-headline u-subheading u-font-serif">WORKS</h2>

        <div class="p-index__works__inner">
            <?php

            if ( get_query_var('paged') ) {
                $paged = get_query_var('paged');
            } else {
                $paged = 1;
            }

            $args = array(
                'post_type' => 'cp_works',
                'posts_per_page' => 6,
                'paged' => $paged,
            );
            $wp_query = new WP_Query($args);
            if ($wp_query->have_posts()):
                 ?>
                <?php while($wp_query->have_posts()): $wp_query->the_post();?>
            <div class="p-index__works__inner__item-container">
                <div class="p-index__works__inner__item">
                    <div class="p-index__works__inner__item__img-container">
                        <img src="<?php echo get_template_directory_uri();?>/data/img/works/img-sample.jpg" alt="project1" class="p-index__works__inner__item__img-container__img">
                    </div>
                    <div class="p-index__works__inner__item__text-container">
                        <p class="p-index__works__inner__item__text-container__title u-text is-big u-font-serif"><?php the_field('title'); ?></p>
                        <p class="p-index__works__inner__item__text-container__description u-text is-small"><?php the_field('content'); ?></p>
                    </div>
                </div>
                <?php get_template_part('page', 'modal');?>
            </div>
        <?php endwhile; endif; ?>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        </div>
    </div>
</section>
