<?php get_header(); ?>

<div class="container">
    <div class="car">



        <?php
        $hot = get_field('hot');
        if ($hot) : ?>
            <p>!!!!! HOT !!!!!</p>
        <?php endif; ?>
        <img src="<?php echo get_field('featured_image')["sizes"]["medium"]; ?>" alt="<?php echo get_sub_field('featured_image')["alt"]; ?>">

        <?php
        $args = array(
            'post_type' => 'car',
        );
        $the_query = new WP_Query($args);
        $brands = get_the_terms(get_the_ID(), 'brand');
        $engines = get_the_terms(get_the_ID(), 'engine'); ?>
        <?php if ($the_query->have_posts()) : ?>
            <p class="car__name"><span><?php
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
                                                    ?></p>
        <?php endif; ?>
        <?php if ($the_query->have_posts()) : ?>
            <p><strong>Engine:</strong> <?php foreach ($engines as $engine) echo $engine->name; ?></p>

        <?php endif; ?>
        <p class="car-color"><strong>Color:</strong> <?php echo get_field('color'); ?></p>
        <p class="car-color"><strong>Mileage:</strong> <?php echo get_field('mileage'); ?></p>
        <p class="car-color"><strong>Price:</strong> <?php echo get_field('price'); ?></p>
        <p class="car-color"><strong>Showroom:</strong> <?php echo get_field('showroom')->post_title; ?></p>
        <?php
        $images = get_field('gallery');
        if ($images) : ?>
            <ul>
                <?php foreach ($images as $image) : ?>
                    <li>
                        <a href="<?php echo esc_url($image['url']); ?>" target="_blank">
                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                        <p><?php echo esc_html($image['caption']); ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>



    </div>
</div>
<?php get_footer(); ?>