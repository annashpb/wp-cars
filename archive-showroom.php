<?php get_header(); ?>

<div class="container">
                <?php
                $args = array(
                    'post_type' => 'showroom',
                );
                $the_query = new WP_Query($args); ?>
                <?php if ($the_query->have_posts()) : ?>
                    <ul class="showrooms-main__list">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="showrooms-main__item showroom-main">
                                <p class="showroom-main__name"><?php echo get_the_title(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="showroom-main__link">Go to the showroom</a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>                  
                    </ul>
                <?php endif; ?>
            </div>


<?php get_footer(); ?>