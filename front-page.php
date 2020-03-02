<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="slider-section">
            <?php if (have_rows('slider')) : ?>

                <div class="slider__wrapper">

                    <?php while (have_rows('slider')) : the_row(); ?>
                        <div class="slider__item">
                            <img src="<?php echo get_sub_field('slider-image')["url"]; ?>" alt="<?php echo get_sub_field('slider-image')["alt"]; ?>">
                            <p><?php the_sub_field('slider-text'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </section>

        <section class="showrooms-main">
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
        </section>

        <section class="content-main">
            <div class="container">
                <h2 class="cars-main__headline">About us</h2>
                <?php
                if (have_rows('slider')) : ?>
                    <p><?php
                        if ((have_rows('slider'))) {
                            echo get_field('frontpage_content');
                        }
                        ?></p>

                <?php endif; ?>
            </div>
        </section>

        <section class="cars-main">
            <div class="container">
                <h2 class="cars-main__headline">Our hot cars</h2>
                <?php
                $args = array(
                    'post_type' => 'car',
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <ul class="cars-main__list">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php
                            $hot = get_field('hot');
                            if ($hot) : ?>
                                <li class="cars-main__item car-main">
                                    <a href="<?php the_permalink(); ?>" class="car__link">
                                        <p class="car-main__model">
                                            <span><?php
                                                    $brands = get_the_terms(get_the_ID(), 'brand');
                                                    foreach ($brands as $brand) {
                                                        if ($brand->parent < 1) {
                                                            echo $brand->name . ' ';
                                                        };
                                                    }
                                                    ?></span> <?php
                                                                foreach ($brands as $brand) {
                                                                    if (!$brand->parent < 1) {
                                                                        echo $brand->name;
                                                                    };
                                                                }
                                                                ?>
                                        </p>
                                        <p class="car-main__engine">
                                            Engine:</strong> <?php
                                                                $engines = get_the_terms(get_the_ID(), 'engine');
                                                                foreach ($engines as $engine) echo $engine->name; ?>
                                        </p>
                                        <div class="car-main__container">
                                            <p class="car-main__mileage">
                                                <span class="car-main__mileage--name">Mileage: </span><span class="car-main__mileage--number"><?php echo get_field('mileage'); ?></span>
                                            </p>
                                            <p class="car-main__price">$<?php echo get_field('price'); ?></p>
                                        </div>
                                    </a>
                                </li>

                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>



    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>