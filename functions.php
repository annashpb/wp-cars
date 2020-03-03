<?php


function wpdocs_theme_name_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('slick-styles', get_template_directory_uri() . '/slick/slick.css', array(), "1.8.1", false);
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css', array(), "1.8.1", false);

	wp_enqueue_script('jquery-script', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js");
	wp_enqueue_script('slick-script', get_template_directory_uri() . '/slick/slick.min.js', array(), "1.8.1", true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/app.js');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');



if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

function register_my_menu()
{
	register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');


add_shortcode('footer-form', 'view_form');
function view_form()
{
	$field = '<form>
	<p>Call me, please</p>
	<label><p>Name</p>
		<input type="text" name="name" placeholder="Please, enter your name" required>
	</label>
	<label><p>Phone number</p>
		<input type="number" name="phone" placeholder="Please, enter your phone number">
	</label>
	<button type="submit">Send</button>
</form>';
	return $field;
}
