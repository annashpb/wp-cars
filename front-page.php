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
                <ul class="showrooms-main__list">
                    <li class="showrooms-main__item showroom-main">
                        <p class="showroom-main__name">Showroom name</p>
                        <a href="#" class="showroom-main__link">Go to the showroom</a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="content-main">

        </section>

        <section class="cars-main">
            <div class="container">
                <ul class="cars-main__list">
                    <li class="cars-main__item car-main">
                        <p class="car-main__model">Car brand and model</p>
                        <p class="car-main__engine">Car engine</p>
                        <div class="car-main__container">
                            <p class="car-main__mileage">
                                <span class="car-main__mileage--name">Mileage:</span> <br> <span class="car-main__mileage--number"></span>
                            </p>
                            <p class="car-main__price">$0.00</p>
                        </div>

                    </li>
                </ul>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>