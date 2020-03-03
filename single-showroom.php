<?php get_header(); ?>
<div class="container showroom">
    <?php
    $args = array(
        'post_type' => 'showroom',
    );
    $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
        <h2><?php echo get_the_title(); ?></h2>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <div class="showroom__location">
        <?php echo get_field('location'); ?>
    </div>
    <div class="showroom__description">

        <h3 class="showroom__headline--min">Meet our managers</h3>

        <?php if (have_rows('managers')) : ?>
            <ul class="showroom-managers">
                <?php while (have_rows('managers')) : the_row(); ?>
                    <li class="showroom-manager">
                        <img src="<?php echo get_sub_field('photo')["sizes"]["medium"]; ?>" alt="<?php echo get_sub_field('photo')["alt"]; ?>">
                        <p class="showroom-manager__name"><?php echo get_sub_field('name'); ?></p>
                        <p><?php echo get_sub_field('email'); ?></p>
                        <p><?php echo get_sub_field('phone'); ?></p>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        <?php endif; ?>
    </div>

    <h3 class="showroom__headline--min">Cars we have</h3>

    <?php
    $args = array(
        'post_type' => 'car',
    );
    $the_query = new WP_Query($args); ?>

<pre>
<?php var_dump($the_query); ?>
</pre>

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