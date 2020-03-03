<footer id="colophon" class="site-footer">

    
    <div class="container footer-container">
        <div class="form">
        <?php echo do_shortcode("[footer-form]"); ?>
        </div>
        
        <p><?php echo get_field('copyright', 'option'); ?></p>
    </div>

</footer>
<?php wp_footer(); ?>

</body>

</html>