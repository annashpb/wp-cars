<?php get_header(); ?>

<div class="container">
<?php
                $args = array(
                    'post_type' => 'car',
                );
                $the_query = new WP_Query($args); ?>
                <?php if ($the_query->have_posts()) : ?>
                    <ul class="cars__list">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="cars__item car">                                
                                <a href="<?php the_permalink(); ?>" class="car__link">
                                <p class="car__name"><?php echo get_the_title(); ?></p>
                            </a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>                  
                    </ul>
                <?php endif; ?>

</div>


<?php get_footer(); ?>